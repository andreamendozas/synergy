<?php /*%%SmartyHeaderCode:1909798638520bc9af01d015-14412907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b6ff2253876e1b01c125c34ca5a1e7519815d09' => 
    array (
      0 => '/home/andrea/qplan/qplan/themes/default/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909798638520bc9af01d015-14412907',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520bc9af10ebb1_30403547',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520bc9af10ebb1_30403547')) {function content_520bc9af10ebb1_30403547($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://qplan.localhost/index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://qplan.localhost/index.php?controller=history" title="Listado de mis pedidos" rel="nofollow">Mis pedidos</a></li>
						<li><a href="http://qplan.localhost/index.php?controller=order-slip" title="Listado de mis vales de compra" rel="nofollow">Mis vales descuento</a></li>
			<li><a href="http://qplan.localhost/index.php?controller=addresses" title="Listado de mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://qplan.localhost/index.php?controller=identity" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
						
<li class="favoriteproducts">
	<a href="http://qplan.localhost/index.php?fc=module&amp;module=favoriteproducts&amp;controller=account" title="Mis productos favoritos">
				Mis productos favoritos
	</a>
</li>

		</ul>
		<p class="logout"><a href="http://qplan.localhost/index.php?mylogout" title="Cerrar sesión" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>