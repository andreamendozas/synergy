<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 20:12:28
         compiled from "/home/andrea/qplan/qplan/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112330220152054d2ced22f3-97161427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd45664fda75a96d02e3b8abac965619dbd55f0c9' => 
    array (
      0 => '/home/andrea/qplan/qplan/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1366915986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112330220152054d2ced22f3-97161427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d2cef8271_43657685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d2cef8271_43657685')) {function content_52054d2cef8271_43657685($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>