<?php /* Smarty version Smarty-3.1.13, created on 2013-08-14 13:47:14
         compiled from "/home/andrea/qplan/qplan/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1631668270520bc9aa820970-75470492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a48d20e3cc593b08dabb552b29b75b257efd80' => 
    array (
      0 => '/home/andrea/qplan/qplan/modules/feeder/feederHeader.tpl',
      1 => 1366915992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1631668270520bc9aa820970-75470492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520bc9aa8d71a8_53766071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520bc9aa8d71a8_53766071')) {function content_520bc9aa8d71a8_53766071($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/andrea/qplan/qplan/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>