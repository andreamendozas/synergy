<?php /* Smarty version Smarty-3.1.13, created on 2013-08-14 19:25:41
         compiled from "/home/andrea/qplan/qplan/admin6896/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:358843952520c18fddc8851-11411907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55220bb5326609923931aa6000e652541ddf35b4' => 
    array (
      0 => '/home/andrea/qplan/qplan/admin6896/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1366915986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358843952520c18fddc8851-11411907',
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
  'unifunc' => 'content_520c18fddfe883_13401257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c18fddfe883_13401257')) {function content_520c18fddfe883_13401257($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>