<?php /* Smarty version 3.1.27, created on 2023-01-28 07:51:54
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:168525674263d4c60a1dd3e1_76437141%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0338d9d85895de987e33bd1f313c091e4d0119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\login_redirect.tpl',
      1 => 1674318863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168525674263d4c60a1dd3e1_76437141',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d4c60a1fd466_02344018',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d4c60a1fd466_02344018')) {
function content_63d4c60a1fd466_02344018 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '168525674263d4c60a1dd3e1_76437141';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="refresh" content="1; url=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
  <link rel="manifest" href="./assets/site.webmanifest">
  <link rel="mask-icon" href="./assets/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
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