<?php /* Smarty version 3.1.27, created on 2022-08-07 13:26:52
         compiled from "C:\xampp\htdocs\tmpl\logo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11491860662efa17c1b3b17_62040907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df3985bcd0a009490f2919aa2b8b34c6386b3df9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\logo.tpl',
      1 => 1643026499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11491860662efa17c1b3b17_62040907',
  'variables' => 
  array (
    'meta_title' => 0,
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efa17c1bc771_69390889',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efa17c1bc771_69390889')) {
function content_62efa17c1bc771_69390889 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '11491860662efa17c1b3b17_62040907';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['meta_title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['site_name'] : $tmp));?>
</title>
<base href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/" />
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFF2" link="#666699" vlink="#666699" alink="#666699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<center>
<table width="760" border="0" cellpadding="0" cellspacing="0" height=100<?php echo '%>';?>
  <tr> 
    <td valign=top height=142>
      <table cellspacing=0 cellpadding=0 border=0 width=100% height=142>
	    <tr>
		  <td background="images/ver.gif" class=toptable><img src="images/top.gif" width=304 height=142 border="0" align=left></td>
		  <td background="images/ver.gif" class=toptable valign=bottom align=right>

<b>
<a href="<?php echo smarty_modifier_myescape(encurl("?a=home"));?>
" class=toplink>Home</a> &middot; 
<a href="<?php echo smarty_modifier_myescape(encurl("?a=faq"));?>
" class=toplink>FAQ</a> &middot; 
<a href="<?php echo smarty_modifier_myescape(encurl("?a=rules"));?>
" class=toplink>Rules</a> &middot; 
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
<a href="<?php echo smarty_modifier_myescape(encurl("?a=signup"));?>
" class=toplink>Sign up</a> &middot; 
<a href="<?php echo smarty_modifier_myescape(encurl("?a=login"));?>
" class=toplink>Login</a> &middot; 
<?php } else { ?>
<a href="<?php echo smarty_modifier_myescape(encurl("?a=logout"));?>
" class=toplink>Logout</a> &middot; 
<?php }?>
<a href="<?php echo smarty_modifier_myescape(encurl("?a=support"));?>
" class=toplink>Support</a></b>&nbsp; &nbsp;</td>
 	    </tr>
	  </table>
     </td>
  </tr>
<?php }
}
?>