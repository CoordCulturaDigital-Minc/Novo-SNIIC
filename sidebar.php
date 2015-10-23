<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Argent Neue
 */
?>

<aside class="container-fluid dark"><div class="wrapper center-block clearfix">
	<div class="col-xs-12 col-sm-4 col-md-4">
		<!-- TODO: Convert into custom Wordpress widget for backend editing -->
		<aside class="busca">
			<h4>Busca</h4>
			<?php echo get_search_form(); ?>
		</aside/>

		<!-- TODO: Melhorar forma de expor isso... está meio cru, acho. -->
		<aside class="contato">
			<a href="http://sniic.cultura.gov.br/contato/"><h4>Contato</h4></a>
			<ul>
				<li><i class="fa fa-envelope"></i>
					<script type="text/javascript">
						var lsjtxjq = ['u','c','v','.','"','h','s','n','g','i','<','.','a','.','s','m','c','>','.','i','a','u','t','a','t','m','i','u','/','i',':','l','@','b','c','r','l','a','c','"','l','s','r','a','=','>','t','=','r','a','c','o','o','v','i','s','u','r',' ','i','o','"','e','l','r','b','<','g','a','l','e','f','@','n',' ','"'];var kxnfxvs = [62,56,68,29,36,3,52,53,66,18,72,65,1,33,42,46,38,75,69,19,64,23,13,74,25,9,11,59,73,55,15,12,21,34,58,4,60,47,22,8,39,41,27,28,7,51,61,43,71,40,20,31,14,32,54,16,26,63,2,48,67,44,45,24,35,70,0,30,10,49,5,6,57,17,37,50];var viihjiw= new Array();for(var i=0;i<kxnfxvs.length;i++){viihjiw[kxnfxvs[i]] = lsjtxjq[i]; }for(var i=0;i<viihjiw.length;i++){document.write(viihjiw[i]);}
					</script>
				<noscript>Please enable Javascript to see the email address</noscript></li>
				<li><a href="tel:+556120242230"><i class="fa fa-phone"></i>+55 (61) 2024-2230</a></li>
			</ul>
		</aside>

		<!-- TODO: Convert into custom Wordpress widget for backend editing, use Tinyletter -->
		<aside class="newsletter hidden">
			<h4>Notícias por e-mail</h4>
			<div class="input-group col-xs-12">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</button>
				</span>
			</div>
		</aside>
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4">
		<!-- TODO: Add more social addresses and mangled email -->
		<!-- TODO: Convert into custom Wordpress widget for backend editing -->
		<aside class="redes-sociais">
			<h4>Redes</h4>
			<ul>
				<li><a href="https://github.com/CoordCulturaDigital-MinC/"><i class="fa fa-github-alt"></i>/CoordCulturaDigital-MinC</a></li>
				<li><a href="https://www.youtube.com/user/ministeriodacultura/"><i class="fa fa-youtube-play"></i>/ministeriodacultura</a></li>
				<li><a href="https://www.facebook.com/MinisterioDaCultura"><i class="fa fa-facebook-official"></i>/MinisterioDaCultura</a></li>
				<li><a href="https://instagram.com/culturagovbr/"><i class="fa fa-instagram"></i>/culturagovbr</a></li>
				<li><a href="https://twitter.com/culturagovbr/"><i class="fa fa-twitter"></i>/culturagovbr</a></li>
			</ul>
		</aside>
	</div>

	<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4">
		<img class="center-block" style="max-width: 340px; width: 100%;" src="<?php echo get_template_directory_uri() ?>/assets/secretaria-politicas-culturais_dark.png" class="img-responsive"/>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4 hidden">
		<aside class="velho-sniic clearfix">
			<img class="center-block" src="<?php echo get_template_directory_uri() ?>/assets/old-logo.svg"/>
			<p class="center-block text-center">Está procurando seu cadastro no SNIIC ou precisando do número SNIIC? Ele mudou, saiba mais aqui.</p>
			<button class="btn btn-default col-xs-12" type="button">Meu número SNIIC</button>
		</aside>
	</div>

</div></aside>
