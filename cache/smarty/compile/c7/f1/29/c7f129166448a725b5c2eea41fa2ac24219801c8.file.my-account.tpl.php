<?php /* Smarty version Smarty-3.1.13, created on 2013-08-14 13:47:18
         compiled from "/home/andrea/qplan/qplan/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158635950520bc9aee7b991-51217473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f129166448a725b5c2eea41fa2ac24219801c8' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158635950520bc9aee7b991-51217473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
    'mobile_hook' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520bc9aef13e77_93770595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520bc9aef13e77_93770595')) {function content_520bc9aef13e77_93770595($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/andrea/qplan/qplan/tools/smarty/plugins/modifier.escape.php';
?>

<li class="favoriteproducts">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account'), 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value){?><img <?php if (isset($_smarty_tpl->tpl_vars['mobile_hook']->value)){?>src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/favorites.png" class="ui-li-icon ui-li-thumb"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/favorites.png" class="icon"<?php }?> alt="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
"/><?php }?>
		<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

	</a>
</li>
<?php }} ?>