<?php
/**
 * @package Argent Neue
 */
get_header(); ?>

<?php if (is_search()): ?>

<section class="container-fluid busca"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <?php echo get_search_form(); ?>
	</div>
</div></section>

<section class="container-fluid busca"><div class="wrapper center-block clearfix row">
	<p class="col-md-offset-2 md-visible col-md-4 ">
		Estamos trabalhando para que você consiga achar tudo o que procura através de uma única busca.
	</p>
	<p class="md-visible col-md-4 ">
		Para melhorar nosso entendimento do que as pessoas esperam do SNIIC, estamos coletando e analisando os termos mais buscados. Caso tenha curiosidade, os três termos mais buscados até agora 	foram:
	</p>
</div></section>

<?php endif; ?>

<main id="main" class="site-main" role="main"><div class="wrapper center-block clearfix row">

	<header class="page-header hidden">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'argent' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header>

	<div class="col-xs-12 col-sm-4 col-md-4 ">

		<h3 class="md-visible">Enquanto isso</h3>

		<div class="wrapper center-block clearfix row">
			<?php echo get_search_form(); ?>
		</div>

		<h3>Buscar Publicações</h3>

		<?php wp_dropdown_categories(array(

				'orderby'            => 'NAME',
				'show_option_none'	 => 'Selecione uma área',
				'order'              => 'ASC',
				'hide_empty'         => false,
				'selected'           => 0, //TODO preencher
				'name'               => 'area',
				'id'                 => 'select-area',
				'class'              => 'postform',
				'depth'              => 0,
				'tab_index'          => 0,
				'taxonomy'           => 'area',
				'hide_if_empty'      => false,
				'value_field'	     => 'slug',
			)); ?>

		<?php wp_dropdown_categories(array(

				'orderby'            => 'NAME',
				'show_option_none'	 => 'Selecione um tipo',
				'order'              => 'ASC',
				'hide_empty'         => false,
				'selected'           => 0, //TODO preencher
				'name'               => 'tipo',
				'id'                 => 'select-tipo',
				'class'              => 'postform',
				'depth'              => 0,
				'tab_index'          => 0,
				'taxonomy'           => 'tipo',
				'hide_if_empty'      => false,
				'value_field'	     => 'slug',
			)); ?>

		<script type="text/javascript">
			<!--
			var area = document.getElementById("select-area");
			var tipo = document.getElementById("select-tipo");
			function onAreaChange() {
				if ( area.options[area.selectedIndex].value != -1 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>/area/"+area.options[area.selectedIndex].value;
				}
			}
			tipo.onchange = onAreaChange;

			function onTipoChange() {
				if ( tipo.options[tipo.selectedIndex].value != -1 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>/tipo/"+tipo.options[tipo.selectedIndex].value;
				}
			}
			tipo.onchange = onTipoChange;
			-->
		</script>

		<?php if (get_search_query()): ?>

			<p>
				<a href="http://mapas.cultura.gov.br/busca/##(global:(enabled:(agent:!t),filterEntity:agent),agent:(keyword:'<?php echo get_search_query(); ?>'))" target="blank">
					Buscar por <?php echo get_search_query(); ?> nos Agentes em Mapas.cultura
				</a>
			</p>
			<p>
				<a href="http://mapas.cultura.gov.br/busca/##(global:(enabled:(space:!t),filterEntity:space),space:(keyword:'<?php echo get_search_query(); ?>'))" target="blank">
					Buscar por <?php echo get_search_query(); ?> nos Espaços em Mapas.cultura
				</a>
			</p>
			<p>
				<a href="http://mapas.cultura.gov.br/busca/##(global:(enabled:(event:!t),filterEntity:event),space:(keyword:'<?php echo get_search_query(); ?>'))" target="blank">
					Buscar por <?php echo get_search_query(); ?> nos Eventos em Mapas.cultura
				</a>
			</p>
			<p>
				<a href="http://dados.cultura.gov.br/dataset?q=<?php echo get_search_query(); ?>" target="blank">
					Buscar por <?php echo get_search_query(); ?> nos dados abertos em Dados.cultura
				</a>
			</p>

		<?php endif; ?>

	</div>

	<div class="col-xs-12 col-sm-8 col-md-8">

	<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
		/**
		 * Run the loop for the search to output the results.
		 * If you want to overload this in a child theme then include a file
		 * called content-search.php and that will be used instead.
		 */
		get_template_part( 'content/content', get_post_format() );
		?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

	<?php else : ?>

		Nenhum conteúdo encontrado

	<?php endif; ?>

	</div>



</div></main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
