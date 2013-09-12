<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 20:12:09
         compiled from "/home/andrea/qplan/qplan/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12534840652054d19095bf9-22985238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ce7d70b6da36497e9f65d9f7558d89a514b7360' => 
    array (
      0 => '/home/andrea/qplan/qplan/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1366915986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12534840652054d19095bf9-22985238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d190c84b4_71801427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d190c84b4_71801427')) {function content_52054d190c84b4_71801427($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/andrea/qplan/qplan/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
</span><?php }} ?>