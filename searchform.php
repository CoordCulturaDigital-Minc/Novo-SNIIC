<form role="search" method="get" class="search-form clearfix" action="<?php bloginfo('siteurl'); ?>">
	<div class="form-group">
		<!-- <label class="hidden" for="searchForm">Buscar</label> -->
		<span class="sr-only">Buscar</span>

		<div class="input-group">
			<input type="search" class="search-field" placeholder="O que você está buscando?" value="<?php
				echo get_search_query();
			?>" name="s" title="Search for:">
			<!-- id="searchForm" -->
			<div class="input-group-addon">
				<button type="submit" class="search-submit" value="Search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button>
			</div>
		</div>

	</div>
</form>
