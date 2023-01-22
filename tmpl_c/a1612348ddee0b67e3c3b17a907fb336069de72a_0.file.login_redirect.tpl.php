<?php /* Smarty version 3.1.27, created on 2023-01-21 17:12:07
         compiled from "C:\xampp\htdocs\ivypay\tmpl\login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1921006963cc0ed7cd1096_76272549%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1612348ddee0b67e3c3b17a907fb336069de72a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ivypay\\tmpl\\login_redirect.tpl',
      1 => 1663998420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1921006963cc0ed7cd1096_76272549',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63cc0ed7cf3812_55703273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63cc0ed7cf3812_55703273')) {
function content_63cc0ed7cf3812_55703273 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\ivypay\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1921006963cc0ed7cd1096_76272549';
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