<?php
/**
 * @package Argent Neue
 */
get_header(); ?>

<section class="container-fluid busca dark"><div class="wrapper center-block clearfix row">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
	<?php echo get_search_form(); ?>
	</div>
</div></section>

<main id="main" class="publicacoes" role="main"><div class="wrapper center-block clearfix row">

	<header class="page-header hidden">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'argent' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header>

	<aside class="col-xs-12 col-sm-4 col-md-4">

		<?php if (is_search()): ?>

			<div class="alert alert-info" role="alert">
				<p>
					Estamos trabalhando para que você consiga achar tudo o que procura através de uma única busca. Para melhorar nosso entendimento do que as pessoas esperam do SNIIC, estamos coletando e analisando os termos mais buscados.
					<?php if (SaveSearch::getTopCount() > 50): ?>

						Até agora são:
						<?php $termos = SaveSearch::getTopTerms(); ?>
						<?php foreach ($termos as $i => $termo) : if (empty($termo)) continue;?>
							<?php echo $termo; ?>
							<?php echo ($i < sizeof($termos) -1) ? ',' : '.'; ?>
						<?php endforeach; ?>

					<?php endif; ?>
				</p>
				<p>
					<strong>Enquanto isso, utilize os campos abaixo para ajudá-lo a encontrar o que procura.</strong>
				</p>
			</div>


			<button class="hidden visible-xs col-xs-12 btn btn-link"
							type="button"
							data-toggle="collapse"
							data-target="#collapseSearchOptions"
							aria-expanded="false"
							aria-controls="collapseSearchOptions">
				<a>Mais opções</a>
			</button>

		<?php endif; // is_search() ?>

		<aside class="filter">
			<div class="form-group">
				<label class="title" for="select-area">Tema</label>

				<?php wp_dropdown_categories(array(

						'orderby'            => 'NAME',
						'show_option_none'	 => 'Selecione um tema',
						'order'              => 'ASC',
						'hide_empty'         => false,
						'selected'           => is_tax('tema') ? get_queried_object()->term_id : false,
						'name'               => 'tema',
						'id'                 => 'select-tema',
						'class'              => 'postform form-control',
						'depth'              => 0,
						'tab_index'          => 0,
						'taxonomy'           => 'tema',
						'hide_if_empty'      => false,
						'value_field'	     => 'slug',
					)); ?>
			</div>
			<div class="form-group">
				<label class="title" for="select-tipo">Tipo de publicação</label>
				<?php wp_dropdown_categories(array(

						'orderby'            => 'NAME',
						'show_option_none'	 => 'Selecione um tipo',
						'order'              => 'ASC',
						'hide_empty'         => false,
						'selected'           => is_tax('tipo') ? get_queried_object()->term_id : false,
						'name'               => 'tipo',
						'id'                 => 'select-tipo',
						'class'              => 'postform form-control',
						'depth'              => 0,
						'tab_index'          => 0,
						'taxonomy'           => 'tipo',
						'hide_if_empty'      => false,
						'value_field'	     => 'slug',
					)); ?>
			</div>
		</aside>

		<script type="text/javascript">
			<!--
			var tema = document.getElementById("select-tema");
			var tipo = document.getElementById("select-tipo");
			function onTemaChange() {
				if ( tema.options[tema.selectedIndex].value != -1 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>/tema/"+tema.options[tema.selectedIndex].value;
				}
			}
			tipo.onchange = onTemaChange;

			function onTipoChange() {
				if ( tipo.options[tipo.selectedIndex].value != -1 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>/tipo/"+tipo.options[tipo.selectedIndex].value;
				}
			}
			tipo.onchange = onTipoChange;
			-->
		</script>

		<?php if (get_search_query()): ?>
			<aside>
				<h4>Buscar nas plataformas</h4>
				<ul>
					<li>
						<h5 class="brand-heading">
							<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.mapas.svg"/>
							<span>Mapas</span>.cultura.gov.br</h5>
						<ul>
							<li><a href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(agent:!t),filterEntity:agent),agent:(keyword:'<?php echo get_search_query(); ?>'))" target="blank">
								Agentes Culturais com "<em><?php echo get_search_query(); ?></em>"
							</a></li>
							<li><a href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(space:!t),filterEntity:space),space:(keyword:'<?php echo get_search_query(); ?>'))" target="blank">
								Espaços Culturais com "<em><?php echo get_search_query(); ?></em>"
							</a></li>
							<li><a href="<?php echo MAPAS_URL; ?>/busca/##(global:(enabled:(event:!t),filterEntity:event),space:(keyword:'<?php echo get_search_query(); ?>'))" target="blank">
								Eventos Culturais com "<em><?php echo get_search_query(); ?></em>"
							</a></li>
						</ul>
					</li>

					<li class="hidden">
						<h5 class="brand-heading">
							<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.dados.svg"/>
							<span>Dados</span>.cultura.gov.br</h5>
							<ul>
								<li><a href="http://dados.cultura.gov.br/dataset?q=<?php echo get_search_query(); ?>" target="blank">
									<em><?php echo get_search_query(); ?></em> nos dados abertos
								</a></li>
							</ul>
					</li>
				</ul>
			</aside>
		<?php endif; ?>


	</aside>

	<div class="col-xs-12 col-sm-8">

	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part ('front-page/front-page', 'publicacoes'); ?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

	<?php else : ?>

		<h1>Nenhum conteúdo encontrado</h1>

	<?php endif; ?>
	</div>
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
