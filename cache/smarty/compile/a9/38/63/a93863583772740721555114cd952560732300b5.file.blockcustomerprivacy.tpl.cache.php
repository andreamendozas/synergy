<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 10:00:41
         compiled from "/home/andrea/qplan/qplan/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1122031162521cb811bd4414-32629074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93863583772740721555114cd952560732300b5' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1366915990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1122031162521cb811bd4414-32629074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521cb811cde837_42454214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521cb811cde837_42454214')) {function content_521cb811cde837_42454214($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>