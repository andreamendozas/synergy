<?php /* Smarty version Smarty-3.1.13, created on 2013-08-14 13:47:14
         compiled from "/home/andrea/qplan/qplan/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:450776822520bc9aa08adb8-89992559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f656ae38bf4c6045b8a36220843c537c65432d1' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '450776822520bc9aa08adb8-89992559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520bc9aa2ccd76_38939092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520bc9aa2ccd76_38939092')) {function content_520bc9aa2ccd76_38939092($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>