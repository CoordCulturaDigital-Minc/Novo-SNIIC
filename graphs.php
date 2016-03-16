<?php /* Template Name: Graphs */ ?>
<?php get_header(); ?>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-10">
		<h1 class="brand-heading"><?php the_title(); ?>
			<span class="edit-link"><?php edit_post_link( '<i class="fa fa-pencil-square-o"></i>' ); ?></span>
		</h1>
	</div>
</div></section>

<main class="container-fluid" role="main">

	<div class="clearfix row"><div class="wrapper center-block"><div class="col-xs-12" id="graph-wrapper">
	</div></div></div>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php //the_content(); ?>

	<?php endwhile; ?>

</main>

<script>

var colors = {"all" : [
	"#40d7d7", "#0c93a2",
	"#99cc66", "#669966",
	"#f192ab", "#F4517E",
	"#9090de", "#666699",
	"#e6b66c", "#F7931E",
	"#df7e6b", "#ED522F",
	"#cbcbcb", "#AEAEAE"]
	,
	"basic": (function () {
		var basic = [];
		for (var i = 0; i < colors.all.length; i++) {
			if (i % 2 == 0) basic.push(colors.all[i]);
		}
		return basic;
	}),
	"counter": (function () {
		var basic = [];
		for (var i = 0; i < colors.all.length; i++) {
			if (i % 2 == 0) basic.push(colors.all[i+1]);
		}
		return basic;
	}),
	"null": "#cbcbcb"
};

</script>

<script>

function shallowCopy(oldObj) {
	var newObj = {};
	for (var i in oldObj) { if(oldObj.hasOwnProperty(i)) { newObj[i] = oldObj[i]; } }
	return newObj;
}

var prototype_brasil = function() {

	var brasil = {
		"name": "Brasil", "acro": "BR",
		"sub": [
			{
				"name": "Centro-Oeste", "acro": "CO",
				"sub": [
					{ "name": "Distrito Federal", "acro": "DF" },
					{ "name": "Goiás", "acro": "GO" },
					{ "name": "Mato Grosso do Sul", "acro": "MS"},
					{ "name": "Mato Grosso", "acro": "MT" }
				]
			},{
				"name": "Nordeste", "acro": "NE",
				"sub": [
					{ "name": "Alagoas", "acro": "AL" },
					{ "name": "Bahia", "acro": "BA" },
					{ "name": "Ceará", "acro": "CE" },
					{ "name": "Maranhão", "acro": "MA" },
					{ "name": "Paraíba", "acro": "PB" },
					{ "name": "Pernambuco", "acro": "PE" },
					{ "name": "Piauí", "acro": "PI" },
					{ "name": "Rio Grande do Norte", "acro": "RN" },
					{ "name": "Sergipe", "acro": "SE" }
				]
			},{
				"name": "Norte", "acro": "NO",
				"sub": [
					{ "name": "Acre", "acro": "AC" },
					{ "name": "Amazonas", "acro": "AM" },
					{ "name": "Amapá", "acro": "AP" },
					{ "name": "Pará", "acro": "PA" },
					{ "name": "Rondônia", "acro": "RO" },
					{ "name": "Roraima", "acro": "RR" },
					{ "name": "Tocantins", "acro": "TO" }
				]
			},{
				"name": "Sudeste", "acro": "SE",
				"sub": [
					{ "name": "Espírito Santos", "acro": "ES" },
					{ "name": "Minas Gerais", "acro": "MG" },
					{ "name": "Rio de Janeiro", "acro": "RJ" },
					{ "name": "São Paulo", "acro": "SP" }
				]
			},{
				"name": "Sul", "acro": "S",
				"sub": [
					{ "name": "Paraná", "acro": "PR" },
					{ "name": "Rio de Grande do Sul", "acro": "RS" },
					{ "name": "Santa Catarina", "acro": "SC" }
				]
			}
		]
	}

	brasil.sub = brasil.sub.map(function (a, i, as) { a.index = i; a.sub = a.sub.map(function (a, i, as) { a.index = i; return a; }); return a; });

	return brasil;

}

</script>

<!-- Gráfico I, consumo acumulado -->

<style>
#graph-wrapper {
	background-color: white;
	padding: 30px 0;
}
#graph-wrapper ul.graph-selector {
	list-style: none;
	padding-left: 0;
}
#graph-wrapper ul.graph-selector li {
	display: inline-block;
	text-transform: uppercase;
	background-color: white;
	padding: 3px 7px 3px;
	border-radius: 10px;
	margin-right: 5px;
	font-weight: 700;
}
#graph-wrapper ul.graph-selector li:last-child {
	margin-right: 0;
}
#graph-wrapper ul.graph-selector li:hover {
	color: white;
}

</style>

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/vale-cultura/graf01_consumo_regiao_uf.js' ?>"></script>
<script> d3.json("<?php echo get_template_directory_uri() . '/vale-cultura/graf01_consumo_regiao_uf.json' ?>", graf01_consumo_regiao_uf); </script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/javascript/graf03_trab_beneficiados_regiao_uf.js' ?>"></script>
<script> d3.json("<?php echo get_template_directory_uri() . '/vale-cultura/graf03_trab_beneficiados_regiao_uf.json' ?>", graf03_trab_beneficiados_regiao_uf); </script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
