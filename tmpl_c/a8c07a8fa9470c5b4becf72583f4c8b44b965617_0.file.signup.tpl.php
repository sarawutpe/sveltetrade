<?php /* Smarty version 3.1.27, created on 2023-01-21 16:20:19
         compiled from "C:\xampp\htdocs\ivypay\tmpl\signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:38544417463cc02b3c48900_37650394%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8c07a8fa9470c5b4becf72583f4c8b44b965617' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ivypay\\tmpl\\signup.tpl',
      1 => 1662888064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38544417463cc02b3c48900_37650394',
  'variables' => 
  array (
    'deny_registration' => 0,
    'settings' => 0,
    'referer' => 0,
    'errors' => 0,
    'err' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63cc02b3c84111_89068373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63cc02b3c84111_89068373')) {
function content_63cc02b3c84111_89068373 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\ivypay\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '38544417463cc02b3c48900_37650394';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Signup"), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
  We are closed for new registrations now.
<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value['id'] && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
  You do not have a upline. Our system require a upline for each user.
<?php } else { ?>

  
  

  <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?><div class="alert error">Invalid turing image</div><?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['ip_exists_in_database']) {?><div class="alert error">Your IP already exists in our database. Sorry, but registration
      impossible</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_username']) {?><div class="alert error">Please enter valid username! It should contains English letters and
      digits only.</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['username_too_short']) {?><div class="alert error">Username should contains <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['username_too_short']);?>
 charaters at
      least</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['username_exists']) {?><div class="alert error">The Username is already taken. Please try another Username.</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_password']) {?><div class="alert error">Please define a password</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['password_confirm']) {?><div class="alert error">Please confirm your password correctly</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['password_too_small']) {?><div class="alert error">The password you provided is too small, please enter at least
      <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['password_too_small']);?>
 characters!</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_email']) {?><div class="alert error">Please valid email address</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['email_confirm']) {?><div class="alert error">Please confirm your email address correctly</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['email_exists']) {?><div class="alert error">An account with this email is already exist</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_address']) {?><div class="alert error">Please enter your address</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_city']) {?><div class="alert error">Please enter your city</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_state']) {?><div class="alert error">Please enter your state</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_zip']) {?><div class="alert error">Please enter your zip</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_country']) {?><div class="alert error">Please enter your country</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_transaction_code']) {?><div class="alert error">Please define a transaction code</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_confirm']) {?><div class="alert error">Please correcty confirm your transaction code</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']) {?><div class="alert error">The transaction code you provided is too small, please enter
      at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']);?>
 characters!</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_vs_password']) {?><div class="alert error">The Transaction Code should not be equal to the Password you
      have defined</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_agree']) {?><div class="alert error">You have to agree with the Terms and Conditions!</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_account_format']) {?>
      <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value['invalid_account_format'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
        <div class="alert error"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>
</div>
      <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
    <?php }?>
  <?php }?>
  <fluent-card class="card">
    <div class="flex justify-content-center">
      <form onsubmit="return checkform()" method="post" name="regform">
        <div class="form-control">
          <span class="fontSize-xl fontWeight-regular mb-2">Signup</span>
          <input type="hidden" name="a" value="signup">
          <input type="hidden" name="action" value="signup">
          <input type="hidden" name="fullname" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['fullname'], ENT_QUOTES, 'UTF-8', true));?>
">
          <div class="field">
            <fluent-text-field type="text" class="w-100" name="username" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
"
              appearance="outline" required>Username</fluent-text-field>
          </div>
          <div class="field">
            <fluent-text-field type="password" class="w-100" name="password" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['password'], ENT_QUOTES, 'UTF-8', true));?>
"
              appearance="outline" required>Password</fluent-text-field>
          </div>
          <div class="field">
            <fluent-text-field type="password" class="w-100" name="password2" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['password2'], ENT_QUOTES, 'UTF-8', true));?>
"
              appearance="outline" required>Retype Password</fluent-text-field>
          </div>
          <div class="field">
            <fluent-text-field type="text" class="w-100" name="email" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true));?>
"
              appearance="outline" required>E-mail Address</fluent-text-field>
          </div>
          <input type="hidden" name="email1" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email1'], ENT_QUOTES, 'UTF-8', true));?>
">
          <?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"signup"), 0);
?>

          <input type="hidden" name="agree" value="1">
          <div class="action">
            <fluent-button type="submit" appearance="accent">Signup</fluent-button>
          </div>
      </form>
    </div>
  </fluent-card>
  <?php echo '<script'; ?>
>
    document.getElementsByName('username')[0].addEventListener('input', (e) => {
      document.getElementsByName('fullname')[0].value = e.target.value
    })
    document.getElementsByName('email')[0].addEventListener('input', (e) => {
      document.getElementsByName('email1')[0].value = e.target.value
    })
  <?php echo '</script'; ?>
>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>