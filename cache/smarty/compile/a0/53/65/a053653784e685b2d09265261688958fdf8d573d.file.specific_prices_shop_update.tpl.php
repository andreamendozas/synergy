<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 20:12:18
         compiled from "/home/andrea/qplan/qplan/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196011359352054d22dd0563-00081834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a053653784e685b2d09265261688958fdf8d573d' => 
    array (
      0 => '/home/andrea/qplan/qplan/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl',
      1 => 1366915986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196011359352054d22dd0563-00081834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d22e34706_12320013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d22e34706_12320013')) {function content_52054d22e34706_12320013($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/andrea/qplan/qplan/tools/smarty/plugins/modifier.escape.php';
?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], 'htmlall', 'UTF-8');?>
</option>
<?php } ?><?php }} ?>