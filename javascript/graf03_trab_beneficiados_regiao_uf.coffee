graf03_trab_beneficiados_regiao_uf = (error, data) ->
  if error
    alert error
    return

  title = data["title"]
  data = data["data"]

  height = 250
  width = 700
  fontSize = 10

  padding = x: 10, y: 20

  brasil = prototype_brasil()

  meses = ["JANEIRO","FEVEREIRO","MARÇO","ABRIL","MAIO","JUNHO","JULHO","AGOSTO","SETEMBRO","OUTUBRO","NOVEMBRO","DEZEMBRO"]
  mesesDictionary = meses
    .reduce (prev, a, i, as) ->
      prev[a] = i
      return prev
    , {}

  data = data
    .map (a, i, as) ->
        a["Mes"] = mesesDictionary[a["Mes"]] + 1
        return a

  datetimeSort = (a, b) ->
    return d3.ascending a["Ano"] b["Ano"] if d3.ascending a["Ano"] b["Ano"] != 0
    return d3.ascending a["Mes"] b["Mes"]

  datetimeRange = ((min, max) ->
    [min["Ano"]..max["Ano"]]
      .map (ano) ->
        [1..12]
          .filter (mes) -> (mes >= min["Mes"] or ano > max["Ano"]) and (mes <= max["Mes"] or ano < max["Ano"])
          .map (mes) -> {"Ano": ano, "Mes": mes}
      .reduce (prev, a, i, as) ->
        prev.concat a if a?
      , []
  ) (
    data.reduce (prev, a, i, as) ->
      return {"Ano": a["Ano"], "Mes": a["Mes"]} if d3.ascending(prev["Ano"], a["Ano"]) == 1 or (d3.ascending(prev["Ano"], a["Ano"]) == 0 and d3.ascending(prev["Mes"], a["Mes"]) == 1)
      return {"Ano": prev["Ano"], "Mes": prev["Mes"]}
  ), (
    data.reduce (prev, a, i, as) ->
      return {"Ano": a["Ano"], "Mes": a["Mes"]} if d3.descending(prev["Ano"], a["Ano"]) == 1 or (d3.descending(prev["Ano"], a["Ano"]) == 0 and d3.descending(prev["Mes"], a["Mes"]) == 1)
      return {"Ano": prev["Ano"], "Mes": prev["Mes"]}
  )

  brasil.sub.forEach (reg_a, reg_i, reg_as) ->
    reg_a.data = datetimeRange
      .map (a, i, as) ->
        d = data
          .filter (d) -> reg_a.name.toUpperCase() == d["Regiao"]
          .filter (d) -> return a["Mes"] == d["Mes"] and a["Ano"] == d["Ano"]
        return {
          "Ano": a["Ano"],
          "Mes": a["Mes"],
          "Consumido": d.reduce ((prev, a, i, as) -> prev + a["Valor_consumido"]), 0
          "Qtd_operacoes": d.reduce ((prev, a, i, as) -> prev + a["Qtd_operacoes"]), 0
        }
      .sort datetimeSort

    reg_a.mensal = reg_a.data
      .map (a, i, as) -> a["Consumido"]
    reg_a.cumulativo = reg_a.mensal.slice(0)
      .map (a, i, as) -> as[i] += (i == 0) ? 0 : as[i-1]

  return
