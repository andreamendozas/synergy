<?php /*%%SmartyHeaderCode:1704939726520bc9aac9e590-94739257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcd0c92a7fdafae7b87191e4ba40fd539c7b465b' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1704939726520bc9aac9e590-94739257',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520bc9aad3f377_04305492',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520bc9aad3f377_04305492')) {function content_520bc9aad3f377_04305492($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://qplan.localhost/index.php?controller=contact" title="contacto">contacto</a></li>
	<li id="header_link_sitemap"><a href="http://qplan.localhost/index.php?controller=sitemap" title="mapa sitio">mapa sitio</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://qplan.localhost/index.php', 'Qplan', 'Favoritos');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>