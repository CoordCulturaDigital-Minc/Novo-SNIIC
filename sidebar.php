<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Argent Neue
 */
?>

<aside><div class="wrapper center-block clearfix">
	<div class="col-1 col-md-4 col-sm-6 col-xs-12">
		<aside class="busca">
			<h4>Busca</h4>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
				</span>
			</div>
		</aside/>
		<aside class="newsletter">
			<h4><em>Newsletter</em></h4>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</button>
				</span>
			</div>
		</aside>
		<aside class="plataformas">
			<h4>Plataformas</h4>
			<ul>
				<li><a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.indicadores.svg" class="img-responsive"/>
					<span>Indicadores</span>.cultura.gov.br</a></li>
				<li><a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.mapas.svg" class="img-responsive"/>
					<span>Mapas</span>.cultura.gov.br</a></li>
				<li><a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.publicacoes.svg" class="img-responsive"/>
					<span>Publicações</span>.cultura.gov.br</a></li>
				<li><a href="/">
					<img src="<?php echo get_template_directory_uri() ?>/assets/sub.glyph.vocabulario.svg" class="img-responsive"/>
					<span>Vocabulário</span>.cultura.gov.br</a></li>
			</ul>
		</aside>
	</div>

	<div class="col-2 col-md-4 col-sm-6 col-xs-12">
		<aside class="redes-sociais">
			<h4>Redes Sociais</h4>
			<ul>
				<li><a href="https://github.com/"><i class="fa fa-github-alt"></i>/sniic</a></li>
				<li><a href="https://youtube.com/"><i class="fa fa-youtube-play"></i>/canaldoSNIIC</a></li>
				<li><a href="https://facebook.com/"><i class="fa fa-facebook-official"></i>/SNIIC</a></li>
				<li><a href="https://instagram.com/"><i class="fa fa-instagram"></i>/sniic_br</a></li>
				<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i>/sniic_br</a></li>
				<li><a href="https://twitter.com/"><i class="fa fa-envelope"></i>mail@cultura.gov.br</a></li>
			</ul>
		</aside>
	</div>

	<div class="col-3 col-md-4 col-sm-6 col-xs-12">
		<aside class="velho-sniic">
			<img class="center-block" src="">
			<h4>Número do SNIIC e RAC</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.</p>
		</aside>
	</div>
</div></aside>
