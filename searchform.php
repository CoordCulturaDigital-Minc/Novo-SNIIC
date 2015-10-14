<form role="search" method="get" class="search-form" action="<?php bloginfo('siteurl'); ?>">
	<label>
		<span class="screen-reader-text">Buscar:</span>
		<input type="search" class="search-field col-xs-12" placeholder="O que você está buscando?" value="<?php
			echo get_search_query();
		?>" name="s" title="Search for:">
	</label>
	<button type="submit" class="search-submit" value="Search">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	</button>
</form>
