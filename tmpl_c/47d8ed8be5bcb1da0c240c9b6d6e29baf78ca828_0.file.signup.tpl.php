<?php /* Smarty version 3.1.27, created on 2023-01-29 16:52:26
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48281067663d6963ad24719_97607731%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47d8ed8be5bcb1da0c240c9b6d6e29baf78ca828' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\signup.tpl',
      1 => 1674990436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48281067663d6963ad24719_97607731',
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
  'unifunc' => 'content_63d6963af3c975_02866240',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d6963af3c975_02866240')) {
function content_63d6963af3c975_02866240 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '48281067663d6963ad24719_97607731';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Signup"), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
  We are closed for new registrations now.
<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value['id'] && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
  You do not have a upline. Our system require a upline for each user.
<?php } else { ?>

  
  

  <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?><div class="alert error">Invalid turing image</div><?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['ip_exists_in_database']) {?><div class="alert error">Your IP already exists in our database. Sorry, but
        registration
      impossible</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_username']) {?><div class="alert error">Please enter valid username! It should contains English letters
        and
      digits only.</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['username_too_short']) {?><div class="alert error">Username should contains <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['username_too_short']);?>
 charaters
        at
      least</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['username_exists']) {?><div class="alert error">The Username is already taken. Please try another Username.</div>
    <?php }?>
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
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']) {?><div class="alert error">The transaction code you provided is too small, please
        enter
      at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']);?>
 characters!</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_vs_password']) {?><div class="alert error">The Transaction Code should not be equal to the
        Password you
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
            <fluent-text-field type="text" class="w-100" name="email" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true));?>
"
              appearance="outline" required>E-mail Address</fluent-text-field>
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
          <input type="hidden" name="email1" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email1'], ENT_QUOTES, 'UTF-8', true));?>
">
          <?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"signup"), 0);
?>

          <div class="field">
            <fluent-checkbox onchange="hideDialog(false)" name="agree" value=1 <?php if ($_smarty_tpl->tpl_vars['frm']->value['agree']) {?>checked<?php }?>>I have read and agree to <b>Terms & Conditions</b></fluent-checkbox>
          </div>
          <div class="action">
            <fluent-button type="submit" appearance="accent">Signup</fluent-button>
          </div>
      </form>
      <!-- Dialog -->
      <fluent-dialog id="defaultDialog" class="dialog" hidden trap-focus modal>
        <div class="flex justify-content-between align-items-center px-3">
          <h2>Terms & Conditions</h2>
          <div onclick="handleAgree(false)" class="close-button">
            <i class="ms-Icon ms-Icon--StatusErrorFull"></i>
          </div>
        </div>
        <fluent-divider></fluent-divider>
        <div class="dialog-content">

          <div style="margin-bottom: 160px;">

            <span class="fontSize-l fontWeight-bold mb-2">General</span>
            <span class="fontSize-l mb-2">Opening accounts are for adults of legal age only.</span>
            <span class="fontSize-l mb-2">A person is allowed to open 1 account only.</span>
            <span class="fontSize-l mb-2">In case of mischievous and/or harmful actions against the service. Your account will be permanently terminated.</span>
          </div>
          <div class="flex justify-content-center px-3 pb-4">
            <fluent-button class="mr-4" onclick="handleAgree(true)" type="button" autofocus="false" appearance="accent" >Accept</fluent-button>
            <fluent-button class="mr-4" onclick="handleAgree(false)" type="button" autofocus="false" appearance="outline" >Decline</fluent-button>
          </div>
        </div>
      </fluent-dialog>
    </div>

  </fluent-card>

  <?php echo '<script'; ?>
>
    const defaultDialog = document.getElementById('defaultDialog')
    const fullname = document.getElementsByName('fullname')
    const username = document.getElementsByName('username')
    const email = document.getElementsByName('email')
    const email1 = document.getElementsByName('email1')

    function hideDialog(value) {
      defaultDialog.hidden = Boolean(value)
    }

    function handleAgree(value) {
      if (Boolean(value)) {
        document.getElementsByName('agree')[0].checked = true
      } else {
        document.getElementsByName('agree')[0].checked = false
      }
      if (defaultDialog) {
        defaultDialog.hidden = true
      }
    }

    if (username && fullname) {
      username[0].addEventListener('input', (e) => {
        fullname[0].value = e.target.value
      })
    }

    if (email && email1) {
      email[0].addEventListener('input', (e) => {
        email1[0].value = e.target.value
      })
    }

  <?php echo '</script'; ?>
>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>