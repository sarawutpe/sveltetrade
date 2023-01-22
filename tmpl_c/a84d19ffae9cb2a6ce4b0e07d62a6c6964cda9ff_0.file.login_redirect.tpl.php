<?php /* Smarty version 3.1.27, created on 2023-01-15 09:07:24
         compiled from "C:\xampp\htdocs\tmpl\login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:182751490463c3b43c1ec835_63318538%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84d19ffae9cb2a6ce4b0e07d62a6c6964cda9ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\login_redirect.tpl',
      1 => 1663998420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182751490463c3b43c1ec835_63318538',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63c3b43c20c151_96393432',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63c3b43c20c151_96393432')) {
function content_63c3b43c20c151_96393432 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '182751490463c3b43c1ec835_63318538';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="refresh" content="1; url=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['site_name'])===null||$tmp==='' ? '' : $tmp));?>
</title>
  <?php echo '<script'; ?>
 type="module" src="./assets/js/web-components.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="./assets/css/styles.css" />
</head>
<body style="background-color: #000000">
  <div id="loader">
    <fluent-progress-ring></fluent-progress-ring>
    <span style="margin-top: 40px" class="fontSize-xl fontWeight-semilight">Loading...</span>
  </div>
</body>
</html><?php }
}
?>