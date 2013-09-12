<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 20:11:49
         compiled from "/home/andrea/qplan/qplan/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71042351652054d056996e6-98004666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e8ac09f833e9e7759e799f11a70359aa509928' => 
    array (
      0 => '/home/andrea/qplan/qplan/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl',
      1 => 1366915986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71042351652054d056996e6-98004666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d056b9940_01048686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d056b9940_01048686')) {function content_52054d056b9940_01048686($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delivery.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>