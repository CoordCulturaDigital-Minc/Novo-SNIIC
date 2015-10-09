<form role="search" method="get" class="search-form" action="<?php bloginfo('siteurl'); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field col-xs-12" placeholder="Maecenas convallis?" value="<?php
			echo get_search_query();
		?>" name="s" title="Search for:">
	</label>
	<button type="submit" class="btn btn-default search-submit" value="Search">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	</button>
</form>
