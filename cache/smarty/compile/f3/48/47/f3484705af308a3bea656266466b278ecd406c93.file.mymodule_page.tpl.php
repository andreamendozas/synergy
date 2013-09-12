<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 10:43:42
         compiled from "/home/andrea/qplan/qplan/modules/blockactcupones/mymodule_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5359236975213b3889552e5-18815963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3484705af308a3bea656266466b278ecd406c93' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/blockactcupones/mymodule_page.tpl',
      1 => 1377616359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5359236975213b3889552e5-18815963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5213b3889a49f7_87341138',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5213b3889a49f7_87341138')) {function content_5213b3889a49f7_87341138($_smarty_tpl) {?>

<div>
<form action="guardar.php" method="post">
CÓDIGO:<input type="text" id="codigo" name="codigo">
<input type="submit" value="ACTIVAR">
</form>
</div>

<?php }} ?>