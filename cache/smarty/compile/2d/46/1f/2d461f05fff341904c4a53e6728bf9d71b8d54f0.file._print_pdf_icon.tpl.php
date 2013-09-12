<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 20:12:09
         compiled from "/home/andrea/qplan/qplan/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193845350252054d19716555-92274232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d461f05fff341904c4a53e6728bf9d71b8d54f0' => 
    array (
      0 => '/home/andrea/qplan/qplan/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1366915986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193845350252054d19716555-92274232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d197b1ab8_77337466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d197b1ab8_77337466')) {function content_52054d197b1ab8_77337466($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/andrea/qplan/qplan/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
<a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateOrderSlipPDF&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['order_slip']->value->id;?>
"><img src="../img/admin/tab-invoice.gif" alt="order_slip" /></a>
</span>
<?php }} ?>