<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 09:47:55
         compiled from "/home/andrea/qplan/qplan/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3694684952054d0cbdfb42-55936778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b04bffee004ed425b261f05eb142e38c1defb291' => 
    array (
      0 => '/home/andrea/qplan/qplan/themes/default/footer.tpl',
      1 => 1378736271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3694684952054d0cbdfb42-55936778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d0cc48fa6_26021132',
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d0cc48fa6_26021132')) {function content_52054d0cc48fa6_26021132($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
				 <div id="right_column" class="column grid_2 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div> 
			</div> 

<!-- Footer -->
		<div style="position:relative;">			
			<img src="http://qplan.localhost/img/imagen.jpg" style="padding: 0px 0px 1px 40px;"/>
			<img src="http://qplan.localhost/img/imagen.jpg" style="padding: 0px 0px 1px 30px;"/>
			<img src="http://qplan.localhost/img/imagen.jpg" style="padding: 0px 0px 1px 35px;"/>

		</div>
		<br>
		<br>
			<div id="footer" class="grid_9 alpha omega clearfix abajo">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
				<?php }?>
			</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>