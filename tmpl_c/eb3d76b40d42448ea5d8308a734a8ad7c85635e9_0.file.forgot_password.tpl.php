<?php /* Smarty version 3.1.27, created on 2023-01-14 05:43:43
         compiled from "C:\xampp\htdocs\tmpl\forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109608208163c232ffc998b5_40463933%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3d76b40d42448ea5d8308a734a8ad7c85635e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\forgot_password.tpl',
      1 => 1662892107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109608208163c232ffc998b5_40463933',
  'variables' => 
  array (
    'errors' => 0,
    'found_records' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63c232ffcc78c5_13892073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63c232ffcc78c5_13892073')) {
function content_63c232ffcc78c5_13892073 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '109608208163c232ffc998b5_40463933';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Forgot Password"), 0);
?>


  <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>
  <div class="alert error">Invalid turing image</div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 2) {?>
  <div class="alert error">Your account was found. Please check your e-mail address and follow the confirmation URL to reset your password.</div>
  <?php } else { ?>
  <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 0) {?>
  <div class="alert error">No accounts found for provided info.</div>
  <?php } elseif ($_smarty_tpl->tpl_vars['found_records']->value == 1) {?>
  <div class="alert error">Request was confirmed. Login and password was sent to your email address.</div>
  <?php }?>

  <fluent-card class="card">
    <div class="flex justify-content-center">
      <form method="post" name="regform">
        <div class="form-control">
          <span class="fontSize-xl fontWeight-regular mb-2">Forgot Password</span>
          <input type="hidden" name="a" value="forgot_password">
          <input type="hidden" name="action" value="forgot_password">
          <div class="field">
            <fluent-text-field type="text" class="w-100" name="email" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"
              appearance="outline" required>Username or E-mail Address</fluent-text-field>
          </div>
          <input type="hidden" name="email1" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email1'], ENT_QUOTES, 'UTF-8', true));?>
">
          <?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"signup"), 0);
?>

          <input type="hidden" name="agree" value="1">
          <div class="action">
            <fluent-button type="submit" appearance="accent">Forgot</fluent-button>
          </div>
      </form>
    </div>
  </fluent-card>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>