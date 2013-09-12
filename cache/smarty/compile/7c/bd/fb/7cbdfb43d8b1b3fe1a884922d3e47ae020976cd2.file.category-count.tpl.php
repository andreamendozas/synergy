<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 20:12:13
         compiled from "/home/andrea/qplan/qplan/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3156083952054d1d02b7d2-27739709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cbdfb43d8b1b3fe1a884922d3e47ae020976cd2' => 
    array (
      0 => '/home/andrea/qplan/qplan/themes/default/category-count.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3156083952054d1d02b7d2-27739709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d1d1225a5_25416654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d1d1225a5_25416654')) {function content_52054d1d1225a5_25416654($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>