<?php /* Smarty version 3.1.27, created on 2023-01-21 17:14:13
         compiled from "C:\xampp\htdocs\ivypay\tmpl\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18730923863cc0f558f1b78_94004312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c9618257bc9650f286db14bff5c1a7dd316528' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ivypay\\tmpl\\nav.tpl',
      1 => 1673540740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18730923863cc0f558f1b78_94004312',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63cc0f558fb182_62711764',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63cc0f558fb182_62711764')) {
function content_63cc0f558fb182_62711764 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\ivypay\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '18730923863cc0f558f1b78_94004312';
?>
            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>
              <div class="menu-group">
                <a href="<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
" class="menu-item <?php if ($_GET['a'] == "account") {?>active<?php }?>">
                  <i class="ms-Icon ms-Icon--Home fontSize-xl"></i>
                  <span>Home</span>
                </a>
                <a href="<?php echo smarty_modifier_myescape(encurl("?a=deposit"));?>
" class="menu-item <?php if ($_GET['a'] == "deposit") {?>active<?php }?>">
                  <i class="ms-Icon ms-Icon--Money fontSize-xl"></i>
                  <span>Deposit</span>
                </a>
                <a href="<?php echo smarty_modifier_myescape(encurl("?a=withdraw"));?>
" class="menu-item <?php if ($_GET['a'] == "withdraw") {?>active<?php }?>">
                  <i class="ms-Icon ms-Icon--Bank fontSize-xl"></i>
                  <span>Withdraw</span>
                </a>
                <a href="<?php echo smarty_modifier_myescape(encurl("?a=history"));?>
" class="menu-item <?php if ($_GET['a'] == "history") {?>active<?php }?>">
                  <i class="ms-Icon ms-Icon--LineChart fontSize-xl"></i>
                  <span>History</span>
                </a>
                <a href="<?php echo smarty_modifier_myescape(encurl("?a=referals"));?>
" class="menu-item <?php if ($_GET['a'] == "referals") {?>active<?php }?>">
                  <i class="ms-Icon ms-Icon--SplitObject fontSize-xl"></i>
                  <span>Referrals</span>
                </a>
                <a href="<?php echo smarty_modifier_myescape(encurl("?a=security"));?>
" class="menu-item <?php if ($_GET['a'] == "security") {?>active<?php }?>">
                  <i class="ms-Icon ms-Icon--AuthenticatorApp fontSize-xl"></i>
                  <span>Security</span>
                </a>
                <a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
" class="menu-item <?php if ($_GET['a'] == "edit_account") {?>active<?php }?>">
                  <i class="ms-Icon ms-Icon--Settings fontSize-xl"></i>
                  <span>Settings</span>
                </a>
                <a href="<?php echo smarty_modifier_myescape(encurl("?a=logout"));?>
" class="menu-item">
                  <i class="ms-Icon ms-Icon--SignOut fontSize-xl"></i>
                  <span>Exit</span>
                </a>
              </div>
            <?php }?>
            </div>
            </div>
            </div>
            <div id="portal-content">
<div class="container"><?php }
}
?>