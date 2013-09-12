<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 20:12:05
         compiled from "/home/andrea/qplan/qplan/themes/default/modules/blockmyaccountfooter/blockmyaccountfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198439050952054d15e8f981-60486246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '198439050952054d15e8f981-60486246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054d162a5b83_45610240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054d162a5b83_45610240')) {function content_52054d162a5b83_45610240($_smarty_tpl) {?>

<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my customer account','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true);?>
" title="<?php echo smartyTranslate(array('s'=>'List of my orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true);?>
" title="<?php echo smartyTranslate(array('s'=>'List of my merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li><?php }?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true);?>
" title="<?php echo smartyTranslate(array('s'=>'List of my credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true);?>
" title="<?php echo smartyTranslate(array('s'=>'List of my addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my personal information','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true);?>
" title="<?php echo smartyTranslate(array('s'=>'List of my vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li><?php }?>
			<?php echo $_smarty_tpl->tpl_vars['HOOK_BLOCK_MY_ACCOUNT']->value;?>

		</ul>
		<p class="logout"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>