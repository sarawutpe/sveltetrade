<?php /* Smarty version 3.1.27, created on 2023-01-27 23:06:48
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:119370534463d44af8b68537_92818337%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f86ba28358546effd62b91d897f5ab9ce2bd74d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\header.tpl',
      1 => 1674398913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119370534463d44af8b68537_92818337',
  'variables' => 
  array (
    'settings' => 0,
    'meta_title' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d44af8b703b2_55390649',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d44af8b703b2_55390649')) {
function content_63d44af8b703b2_55390649 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '119370534463d44af8b68537_92818337';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
  <link rel="manifest" href="./assets/site.webmanifest">
  <link rel="mask-icon" href="./assets/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['site_name'])===null||$tmp==='' ? '' : $tmp));?>
 - <?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['meta_title']->value)===null||$tmp==='' ? '' : $tmp));?>
</title>
  <link rel="stylesheet" href="./assets/css/fabric-icons.css" />
  <?php echo '<script'; ?>
 type="module" src="./assets/js/web-components.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <?php echo '<script'; ?>
 type="text/javascript" src="./assets/js/script.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="./assets/js/apexcharts.js"><?php echo '</script'; ?>
>
</head>

<body>
  <div id="loader">
    <fluent-progress-ring></fluent-progress-ring>
  </div>
  <div id="portal" class=<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] === 0) {
echo smarty_modifier_myescape("sticky");
}?>>
    <div class="portal-menu">
      <div class="container">
        <div class="menu">
          <div class="header-nav">
            <div class="portal-logo">
              <a href="<?php echo smarty_modifier_myescape(encurl("/"));?>
">
                <img src="./assets/img/logo.png" width="180px" height="22px" alt="logo" />
              </a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] === 1) {?>
              <div id="mobile-menu-icon">
                <i class="ms-Icon ms-Icon--WaffleOffice365 fontSize-xl"></i>
              </div>
            </div>
            <div class="profile-group">
              <img class="profile" src="./assets/img/avatar.png" width="64px" height="64px" alt="avatar" />
              <div class="text">
                <span class="fontSize-l"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</span>
                <div>
                  <span
                    class="fontSize-l fontWeight-regular"><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo smarty_modifier_myescape(amount_smarty_format($_smarty_tpl->tpl_vars['userinfo']->value['balance_totals']['balance']));?>
</span>
                </div>
              </div>
            <?php }?>
          </div>
<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>