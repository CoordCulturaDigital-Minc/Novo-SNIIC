graf01_consumo_regiao_uf = function(error, data) {
	if (error) { alert(error);return; }

	var title = data["title"],
			data = data["data"];

	var height = 250,
			width = 700,
			fontSize = 10;

	var padding = { "x": 10, "y": 20 };

	var brasil = prototype_brasil();

	var meses = ["JANEIRO","FEVEREIRO","MARÇO","ABRIL","MAIO","JUNHO","JULHO","AGOSTO","SETEMBRO","OUTUBRO","NOVEMBRO","DEZEMBRO"];
	var mesesDictionary = meses.reduce(function(prev, a, i, as){ prev[a] = i; return prev; }, {});

	data = data.map(function(a, i, as) {
		a["Mes"] = mesesDictionary[a["Mes"]] + 1;
		return a;
	});

	var datetimeSort = function(a, b) {
		if (d3.ascending(a["Ano"], b["Ano"]) != 0) {
			return d3.ascending(a["Ano"], b["Ano"]);
		}
		return d3.ascending(a["Mes"], b["Mes"]);
	}

	var datetimeRange = (function(min, max){
		var range = [];
		for (var i = min["Ano"]; i <= max["Ano"]; i++) {
			for (var j = 1; j <= 12 && (j <= max["Mes"] || i < max["Ano"]); j++) {
				if (i == min["Ano"]) { j = min["Mes"]; }
				range.push({"Ano": i, "Mes": j});
			}
		}
		return range;
	})(
		data.reduce(function(prev, a, i, as) {
			if (d3.ascending(prev["Ano"], a["Ano"]) == 1 ||
				 (d3.ascending(prev["Ano"], a["Ano"]) == 0 &&
					d3.ascending(prev["Mes"], a["Mes"]) == 1)) {
				return {"Ano": a["Ano"], "Mes": a["Mes"]};
			}
			return {"Ano": prev["Ano"], "Mes": prev["Mes"]};
		}),
		data.reduce(function(prev, a, i, as) {
			if (d3.descending(prev["Ano"], a["Ano"]) == 1 ||
				 (d3.descending(prev["Ano"], a["Ano"]) == 0 &&
					d3.descending(prev["Mes"], a["Mes"]) == 1)) {
				return {"Ano": a["Ano"], "Mes": a["Mes"]};
			}
			return {"Ano": prev["Ano"], "Mes": prev["Mes"]};
		})
	);

	brasil.data = datetimeRange.map(function(a, i, as) {
		var d = data.filter(function(d){ return a["Mes"] == d["Mes"] && a["Ano"] == d["Ano"]; });
		return {
			"Ano": a["Ano"],
			"Mes": a["Mes"],
			// "Consumo_total_mes": d[0]["Consumo_total_mes"],
			"Consumido": d.reduce(function(prev, a, i, as) { return prev + a["Valor_consumido"] }, 0),
			"Qtd_operacoes": d.reduce(function(prev, a, i, as) { return prev + a["Qtd_operacoes"] }, 0)
		};
	}).sort(datetimeSort);
	brasil.mensal = brasil.data.map(function(a, i, as) { return a["Consumido"] });
	brasil.cumulativo = brasil.mensal.slice(0).map(function(a, i, as) { return as[i] += (i == 0) ? 0 : as[i-1]; });
	brasil.index = 6;

	// FYI
	// console.log(brasil.data.filter(function(d){ return d["Consumo_total_mes"] != d["Valor_consumido"] }));

	brasil.sub.forEach(function(reg_a, reg_i, reg_as){
		reg_a.data = datetimeRange.map(function(a, i, as) {
			var d = data
				.filter(function(d){ return reg_a.name.toUpperCase() == d["Regiao"] })
				.filter(function(d){ return a["Mes"] == d["Mes"] && a["Ano"] == d["Ano"]; }) || [];
			return {
				"Ano": a["Ano"],
				"Mes": a["Mes"],
				"Consumido": d.reduce(function(prev, a, i, as) { return prev + a["Valor_consumido"] }, 0),
				"Qtd_operacoes": d.reduce(function(prev, a, i, as) { return prev + a["Qtd_operacoes"] }, 0)
			};
		}).sort(datetimeSort);
		reg_a.mensal = reg_a.data.map(function(a, i, as) { return a["Consumido"] });
		reg_a.cumulativo = reg_a.mensal.slice(0).map(function(a, i, as) { return as[i] += (i == 0) ? 0 : as[i-1]; });
		reg_a.sub.forEach(function(uf_a, uf_i, uf_as){
			uf_a.data = datetimeRange.map(function(a, i, as) {
				var d = data
					.filter(function(d){ return uf_a.acro.toUpperCase() == d["UF"] })
					.filter(function(d){ return a["Mes"] == d["Mes"] && a["Ano"] == d["Ano"]; }) || [];
				return {
					"Ano": a["Ano"],
					"Mes": a["Mes"],
					"Consumido": d.reduce(function(prev, a, i, as) { return prev + a["Valor_consumido"] }, 0),
					"Qtd_operacoes": d.reduce(function(prev, a, i, as) { return prev + a["Qtd_operacoes"] }, 0)
				};
			}).sort(datetimeSort);
			uf_a.mensal = uf_a.data.map(function(a, i, as) { return a["Consumido"] });
			uf_a.cumulativo = uf_a.mensal.slice(0).map(function(a, i, as) { return as[i] += (i == 0) ? 0 : as[i-1]; });
		});
	});

	var redraw = function(data) {
		yScaleBars = d3.scale.linear()
			.domain([0, d3.max(data.mensal, function(d) { return d })])
			.range([0, height]);

		chart.select(".bars").selectAll("rect").data(data.mensal)
			.transition().duration(1000)
			.attr("fill", colors.basic()[data.index])
			.attr("x", function(d, i) { return xScale(i) })
			.attr("y", function(d) { return height - yScaleBars(d) })
			.attr("width", xScale.rangeBand())
			.attr("height", function(d) { return yScaleBars(d) });

		yScalePath = d3.scale.linear()
			.domain([0, [data.cumulativo[data.cumulativo.length - 1]]])
			.range([height, 0]);

		chart.select(".path").select("path")
			.transition().duration(1000)
			.attr("d", line(data.cumulativo))
			.attr("stroke", colors.counter()[data.index])
			.attr("stroke-width", 5)
			.attr("fill", "none")
			.attr("stroke-linecap", "round");
	}

	var nullData = datetimeRange.map(function(a) { return { "Ano": a["Ano"], "Mes": a["Mes"], "Consumido": 0, "Qtd_operacoes": 0 } }).sort(datetimeSort);
	var nullValues = {
		"index": 6,
		"data": nullData,
		"mensal": nullData.map(function() { return 0 }),
		"cumulativo": nullData.slice(0).map(function() { return 0 })
	};

	var selectors = d3.select("#graph-wrapper")
		.append("ul").attr("class", "graph-selector").selectAll("li")
		.data(brasil.sub).enter()
			.append("li")
			.text(function (d) { return d.name })
			.style("background-color", function(d) {colors.basic()[d.index]})
			.style("color", colors.null)
			.attr("data", function(d) { return d.name })
			.on("mouseover", function(d, i) {
				d3.select(this)
					.transition().duration(250)
						.style("background-color", colors.basic()[d.index])
						.style("color", "white");
				redraw(d);
			})
			.on("mouseout", function() {
				d3.select(this)
					.transition().duration(250)
						.style("background-color", "white")
						.style("color", colors.null);
				redraw(brasil);
			});

	var chart = d3.select("#graph-wrapper")
		.append("svg").attr("class", "graph-consumo center-block")
			.style("width", width)
			.style("height", height)
			.style("margin-bottom", 30);

	var xScale = d3.scale.ordinal()
		.domain(d3.range(brasil.data.length))
		.rangeRoundBands([0, width], 0.05);

	var yScaleBars = d3.scale.linear()
		.domain([0, d3.max(nullValues.mensal, function(d) { return d })])
		.range([0, height]);

	var bars = chart.append("g").attr("class", "bars")
		.selectAll("rect").data(nullValues.mensal).enter()
			.append("rect")
			.attr("fill", colors.basic()[nullValues.index])
			.attr("x", function(d, i) { return xScale(i) })
			.attr("y", function(d) { return height - yScaleBars(d) })
			.attr("width", xScale.rangeBand())
			.attr("height", function(d) { return yScaleBars(d) });

	var yScalePath = d3.scale.linear()
		.domain([0, [nullValues.cumulativo[nullValues.cumulativo.length - 1]]])
		.range([height, 0]);

	var line = d3.svg.line()
		.x(function(d,i) { return xScale(i) + xScale.rangeBand() / 2 })
		.y(function(d) { return yScalePath(d) })
		.interpolate("basis");

	var path = chart.append("g").attr("class", "path")
		.append("path")
			.attr("clip-path", "url(#line-area)")
			.attr("d", line(nullValues.cumulativo))
			.attr("stroke", colors.counter()[nullValues.index])
			.attr("stroke-width", 5)
			.attr("fill", "none")
			.attr("stroke-linecap", "round");

	var mesesCap = meses.map(function(a, i, as){ return a.substring(0, 3) });

	var labels = chart.append("g").attr("class", "labels")
		.selectAll("text").data(nullValues.data).enter()
			.append("text")
				.attr("fill", colors.null)
				.attr("text-anchor", "middle")
				.attr("font-size", fontSize)
				.attr("x", function(d, i) { return xScale(i) + xScale.rangeBand()/2 })
				.attr("y", function(d) { return height - 3 })
				.text(function(d) { return mesesCap[d["Mes"] - 1] });

	redraw(brasil);

	var clipPath = chart.append("g").attr("class", "mask")
		.append("clipPath").attr("id", "line-area")
			.append("rect")
				.attr("x", 0).attr("y", 0)
				.attr("height", height).attr("width", 0)
				.transition().duration(1000)
					.attr("width", width);
}
