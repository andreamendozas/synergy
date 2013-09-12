<?php /* Smarty version Smarty-3.1.13, created on 2013-08-14 13:47:16
         compiled from "/home/andrea/qplan/qplan/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:630983597520bc9ac6fbd52-78500651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c5f460edb58805d62224b2e0dd062fe3341f554' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/blockadvertising/blockadvertising.tpl',
      1 => 1366915990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '630983597520bc9ac6fbd52-78500651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520bc9ac71f275_24995527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520bc9ac71f275_24995527')) {function content_520bc9ac71f275_24995527($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>