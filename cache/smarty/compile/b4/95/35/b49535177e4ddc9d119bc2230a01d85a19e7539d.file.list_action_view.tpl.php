<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 14:33:51
         compiled from "/home/andrea/qplan/qplan/admin6896/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236331889521cf817c72f95-85743891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b49535177e4ddc9d119bc2230a01d85a19e7539d' => 
    array (
      0 => '/home/andrea/qplan/qplan/admin6896/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1366915986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236331889521cf817c72f95-85743891',
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
  'unifunc' => 'content_521cf817e6d698_95849299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521cf817e6d698_95849299')) {function content_521cf817e6d698_95849299($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>