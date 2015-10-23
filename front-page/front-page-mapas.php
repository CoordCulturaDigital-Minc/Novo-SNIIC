<section class="container-fluid mapas"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12">
	<h1 class="brand-heading">
		<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.mapas.svg"/>
		Mapas<span class="hidden-xs">.cultura.gov.br</span></h1>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4">
	<p>
		O Mapas Culturais substituirá o antigo cadastro do Sistema Nacional de Informações e Indicadores Culturais (SNIIC), porém com maior facilidade de uso, mais possibilidades de filtros de busca e integrado a outras bases de dados do MinC, como a Rede Cultura Viva, o Sistema Nacional de Bibliotecas Públicas e o Cadastro Nacional de Museus (este último em breve).</p>
	</div>

  <div class="col-xs-12 col-sm-6 col-md-4">
		<h4>Explore</h4>
		<ul>
			<li id="counter-agent"><a href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(agent:!t),filterEntity:agent))">
        <i class="fa fa-user"></i><span class="buscando">…</span> agentes</a></li>

			<li id="counter-space"><a href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(space:!t),filterEntity:space))">
			     <i class="fa fa-building-o"></i><span class="buscando">…</span> espaços</a></li>

			<li id="counter-project"><a href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(project:!t),filterEntity:project))">
			<i class="fa fa-file-o"></i><span class="buscando">…</span> projetos</a></li>

      <li id="counter-event" class="hidden"><a href="">
			<i class="fa fa-calendar"></i><span class="buscando">…</span> eventos</a></li>
		</ul>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4">
	<a href="<?php echo MAPAS_URL; ?>"><figure>
		<img src="<?php echo get_template_directory_uri() ?>/assets/thumbMapas.png" class="img-responsive">
		<figcaption>Navegue pelo Mapa da Cultura</figcaption>
	</figure></a>
  </div>
</div></section>

<script>
jQuery(document).ready(function($) {
	$.getJSON('<?php echo MAPAS_URL; ?>/api/agent/find?@select=id&@count=1', function(x) {
			if (typeof(x) == 'number')
				$('#counter-agent span.buscando').text(x).removeClass('buscando');
	});
	$.getJSON('<?php echo MAPAS_URL; ?>/api/space/find?@select=id&@count=1', function(x) {
			if (typeof(x) == 'number')
				$('#counter-space span.buscando').text(x).removeClass('buscando');
	});
	$.getJSON('<?php echo MAPAS_URL; ?>/api/project/find?@select=id&@count=1', function(x) {
			if (typeof(x) == 'number')
				$('#counter-project span.buscando').text(x).removeClass('buscando');
	});
});
</script>
