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
			<h4><em>Notícias por e-mail</em></h4>
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
				<li class="hidden"><a href="https://github.com/CoordCulturaDigital-Minc/"><i class="fa fa-github-alt"></i>/sniic</a></li>
				<li><a href="https://www.youtube.com/user/ministeriodacultura/"><i class="fa fa-youtube-play"></i>/ministeriodacultura</a></li>
				<li><a href="https://www.facebook.com/MinisterioDaCultura"><i class="fa fa-facebook-official"></i>/MinisterioDaCultura</a></li>
				<li class="hidden"><a href="https://instagram.com/culturagovbr/"><i class="fa fa-instagram"></i>/culturagovbr</a></li>
				<li><a href="https://twitter.com/culturagovbr/"><i class="fa fa-twitter"></i>/culturagovbr</a></li>
			</ul>
		</aside>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2">
		<aside class="velho-sniic clearfix">
			<img class="center-block" src="<?php echo get_template_directory_uri() ?>/assets/old-logo.svg"/>
			<p class="center-block text-center">Está procurando seu cadastro no SNIIC ou precisando do número SNIIC? Ele mudou, saiba mais aqui.</p>
			<button class="btn btn-default col-xs-12" type="button">Meu número SNIIC</button>
		</aside>
	</div>
</div></aside>
