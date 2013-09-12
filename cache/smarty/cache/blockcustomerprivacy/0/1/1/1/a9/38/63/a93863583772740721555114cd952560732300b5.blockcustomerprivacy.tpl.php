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
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521cb811ce4a77_18650786',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521cb811ce4a77_18650786')) {function content_521cb811ce4a77_18650786($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3>Privacidad de los datos de los clientes</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy">El dato personal que da esta utilizado para responder a sus búsquedas, procesa sus ordenes o autorizase el acceso especifico a la información. Tiene derecho de modificar todas las informaciones personales que tenemos sobre usted en pagina &quot;my account&quot;.</label>		
</fieldset><?php }} ?>