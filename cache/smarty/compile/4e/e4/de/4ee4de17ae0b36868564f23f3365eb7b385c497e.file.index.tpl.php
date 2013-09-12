<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 20:12:24
         compiled from "/home/andrea/qplan/qplan/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125382504152054d28d3d004-87164702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ee4de17ae0b36868564f23f3365eb7b385c497e' => 
    array (
      0 => '/home/andrea/qplan/qplan/themes/default/mobile/index.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125382504152054d28d3d004-87164702',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d28d59d73_55254718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d28d59d73_55254718')) {function content_52054d28d59d73_55254718($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>