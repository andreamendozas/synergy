<?php /*%%SmartyHeaderCode:1579370576520bc9aad46cf7-77306751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1c5e8280bc2f8c5a8354c28f7413b34d104e07' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/blocksearch/blocksearch-top.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
    '551d2624970e17e7afdbebc8c50104bf4cec128c' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1579370576520bc9aad46cf7-77306751',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520bc9aae92f80_92603752',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520bc9aae92f80_92603752')) {function content_520bc9aae92f80_92603752($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top">

	<form method="get" action="http://qplan.localhost/index.php?controller=search" id="searchbox">
		<p>
			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
			<input type="submit" name="submit_search" value="Buscar" class="button" />
	</p>
	</form>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://qplan.localhost/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>