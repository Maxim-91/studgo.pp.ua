<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";a:2:{s:4:"body";s:0:"";s:4:"head";a:0:{}}s:6:"result";s:770:"
<form id="searchbox" action="/index.php/mss" method="post" role="search">
	<input type="text" value="" name="searchword" placeholder="search..." />
	<button type="reset" value="Reset"></button>
	<input type="hidden" name="task"   value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="156" />	
</form>

<script src="/templates/yoo_downtown/warp/js/search.js"></script>
<script>
jQuery(function($) {
	$('#searchbox input[name=searchword]').search({'url': '/index.php/component/search/?tmpl=raw&amp;type=json&amp;ordering=&amp;searchphrase=all', 'param': 'searchword', 'msgResultsHeader': 'Search Results', 'msgMoreResults': 'More Results', 'msgNoResults': 'No results found'}).placeholder();
});
</script>
";}