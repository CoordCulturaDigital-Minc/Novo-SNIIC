<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Argent Neue
 */
?>

<aside class="container-fluid"><div class="wrapper center-block clearfix">
	<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">

		<!-- TODO: Convert into custom Wordpress widget for backend editing -->
		<aside class="busca">
			<h4>Busca</h4>
			<?php echo get_search_form(); ?>
		</aside/>

		<!-- TODO: Convert into custom Wordpress widget for backend editing, use Tinyletter -->
		<aside class="newsletter hidden">
			<h4><em>Newsletter</em></h4>
			<div class="input-group col-xs-12">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</button>
				</span>
			</div>
		</aside>

		<!-- TODO: Add more social addresses and mangled email -->
		<!-- TODO: Convert into custom Wordpress widget for backend editing -->
		<aside class="redes-sociais">
			<h4>Redes Sociais</h4>
			<ul>
				<li class="hidden"><a href="https://github.com/"><i class="fa fa-github-alt"></i>/sniic</a></li>
				<li><a href="https://youtube.com/"><i class="fa fa-youtube-play"></i>/canaldoSNIIC</a></li>
				<li><a href="https://facebook.com/sniic"><i class="fa fa-facebook-official"></i>/SNIIC</a></li>
				<li class="hidden"><a href="https://instagram.com/"><i class="fa fa-instagram"></i>/sniic_br</a></li>
				<li><a href="https://twitter.com/sniic_br"><i class="fa fa-twitter"></i>/sniic_br</a></li>
				<li class="hidden"><a href="https://twitter.com/"><i class="fa fa-envelope"></i>mail@cultura.gov.br</a></li>
			</ul>
		</aside>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2">
		<aside class="velho-sniic clearfix">
			<img class="center-block" src="<?php echo get_template_directory_uri() ?>/assets/old-logo.svg"/>
			<p class="center-block text-center">Nunc diam velit, adipiscing ut tristique vitae, sagittis vel odio. Maecenas convallis ullamcorper ultricies.</p>
			<button class="btn btn-default col-xs-12" type="button">Cadastro SNIIC</button>
		</aside>
	</div>
</div></aside>
