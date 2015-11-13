<form role="search" method="get" class="search-form clearfix" action="<?php bloginfo('siteurl'); ?>"><label>
		<span class="sr-only">Buscar:</span>

		<input type="search" class="search-field" placeholder="O que você está buscando?" value="<?php
			echo get_search_query();
		?>" name="s" title="Search for:">

		<button type="submit" class="search-submit" value="Search">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</button>

</label></form>
