<?php /* Smarty version 3.1.27, created on 2023-01-15 09:07:29
         compiled from "C:\xampp\htdocs\tmpl\edit_account.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75221065863c3b4415dd3f2_51552919%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '353b2630b63d745df289e1c47b14560ecd837b29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\edit_account.tpl',
      1 => 1667121599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75221065863c3b4415dd3f2_51552919',
  'variables' => 
  array (
    'frm' => 0,
    'errors' => 0,
    'err' => 0,
    'userinfo' => 0,
    'settings' => 0,
    'countries' => 0,
    'c' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63c3b4416295b7_97615313',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63c3b4416295b7_97615313')) {
function content_63c3b4416295b7_97615313 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '75221065863c3b4415dd3f2_51552919';
?>
          <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Edit Account"), 0);
?>

          <span class="fontSize-xl fontWeight-regular mb-3">Settings</span>

          <form method="post" name="editform">
            <input type="hidden" name="a" value="edit_account">
            <input type="hidden" name="action" value="edit_account">
            <input type="hidden" name="say" value="">

            <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'changed') {?>
            <div class="alert success">Your account data has been updated successfully.</div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?><div class="alert error">Invalid turing image</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_transaction_code']) {?><div class="alert error">You have provided invalid Current Transaction Code</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['tfa_code']) {?><div class="alert error">Invalid 2FA code</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_fullname']) {?><div class="alert error">Please enter your full name</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['ip_exists_in_database']) {?><div class="alert error">Your IP already exists in our database. Sorry, but registration impossible</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_username']) {?><div class="alert error">Please enter valid username! It should contains English letters and digits only.</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['username_too_short']) {?><div class="alert error">Username should contains <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['username_too_short']);?>
 charaters at least</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['username_exists']) {?><div class="alert error">The Username is already taken. Please try another Username.</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['password_confirm']) {?><div class="alert error">Please correcty confirm your password</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['password_too_small']) {?><div class="alert error">The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['password_too_small']);?>
 characters!</div><?php }?> 
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_email']) {?><div class="alert error">Please valid email address</div><?php }?> 
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['email_confirm']) {?><div class="alert error">Please correcty confirm your email address</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['email_exists']) {?><div class="alert error">An account with this email is already exist</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_address']) {?><div class="alert error">Please enter your address</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_city']) {?><div class="alert error">Please enter your city</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_state']) {?><div class="alert error">Please enter your state</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_zip']) {?><div class="alert error">Please enter your zip</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_country']) {?><div class="alert error">Please enter your country</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_confirm']) {?><div class="alert error">Please correcty confirm your transaction code</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']) {?><div class="alert error">The transaction code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']);?>
 characters!</div><?php }?> 
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_vs_password']) {?><div class="alert error">The Transaction Code should not be equal to the Password you have defined</div><?php }?>
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

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Account Name:</span>
              <span class="fontSize-m"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</span>
            </div>
            
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Registration date:</span>
              <span class="fontSize-m"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['date_register']);?>
</span>
            </div>
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your Full Name:</span>
              <div>
              <fluent-text-field type="text" class="w-100" name="fullname" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['name'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" required></fluent-text-field>
              </div>
            </div>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your Address:</span>
              <div>
                <fluent-text-field class="w-100" name="address" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['address'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['address'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
"></fluent-text-field>
              </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?>
              
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your City:</span>
              <div>
                <fluent-text-field class="w-100" name="city" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['city'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['city'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
"></fluent-text-field>
              </div>
            </div>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your State:</span>
              <div>
                <fluent-text-field class="w-100" name="state" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['state'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['state'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
"></fluent-text-field>
              </div>
            </div>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your Zip:</span>
              <div>
                <fluent-text-field class="w-100" name="zip" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['zip'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['zip'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
"></fluent-text-field>
              </div>
            </div>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your Country:</span>
              <div>
                <fluent-combobox class="w-100 z-10" name="country" autocomplete="both" placeholder="Select..." position="below">
                <?php
$_from = $_smarty_tpl->tpl_vars['countries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
                <fluent-option value="1" <?php if (($_smarty_tpl->tpl_vars['frm']->value['country'] && $_smarty_tpl->tpl_vars['c']->value['name'] == $_smarty_tpl->tpl_vars['frm']->value['country']) || (!$_smarty_tpl->tpl_vars['frm']->value['country'] && $_smarty_tpl->tpl_vars['c']->value['name'] == $_smarty_tpl->tpl_vars['userinfo']->value['country'])) {?>selected<?php }?>><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</fluent-option>
                <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
                </fluent-combobox>
              </div>
            </div>

            <?php }?>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">New Password:</span>
              <div>
                <fluent-text-field type="password" class="w-100" name="password" value=""></fluent-text-field>
              </div>
            </div>
             <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Retype Password:</span>
              <div>
                <fluent-text-field type="password" class="w-100" name="password2" value=""></fluent-text-field>
              </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
              <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] != 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code'] != '') {?>
                <div class="grid-container grid-column-2 fixed-height">
                  <span class="fontSize-m">Current Transaction Code:</span>
                  <div>
                    <fluent-text-field type="password" class="w-100" name="transaction_code_current" value=""></fluent-text-field>
                  </div>
                </div>
                <?php }?>
              <?php }?>
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">New Transaction Code:</span>
                <div>
                  <fluent-text-field type="password" class="w-100" name="transaction_code" value=""></fluent-text-field>
                </div>
              </div>
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">Retype Transaction Code:</span>
                <div>
                  <fluent-text-field type="password" class="w-100" name="transaction_code2" value=""></fluent-text-field>
                </div>
              </div>
            <?php }?>

            <?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 acc no:</span>
                <div>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['account'] != '') {?>
                <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));?>

                <?php } else { ?>
                <fluent-text-field type="text" class="w-100" name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['ps']->value['id']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ps']->value['account'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" data-validate="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
" data-validate-<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate'][$_smarty_tpl->tpl_vars['ps']->value['validate']['func']]);?>
" data-validate-notice="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['validate']['notification'], ENT_QUOTES, 'UTF-8', true));?>
"></fluent-text-field>
                <?php }?>
                </div>
              </div>
            <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
  
            <?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
              <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
:</span>
                <div>
                  <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['value'] != '') {?>
                  <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));?>

                  <?php } else { ?>
                  <fluent-text-field type="text" class="w-100" name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['p']->value['id']][$_smarty_tpl->tpl_vars['ps']->value['name']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ps']->value['value'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
"></fluent-text-field>
                  <?php }?>
                </div>
              </div>
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">Retype Transaction Code:</span>
                <div>
                  <fluent-text-field type="password" class="w-100" name="transaction_code2" value=""></fluent-text-field>
                </div>
              </div>
              <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
            <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your E-mail address:</span>
              <div>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?>
                <fluent-text-field type="text" class="w-100" name="email" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['email'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" required></fluent-text-field>
                <?php } else { ?>
                <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['email'], ENT_QUOTES, 'UTF-8', true));?>

                <?php }?>
              </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_rcb']) {?>
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your RCB Percent:</span>
              <div>
                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['rcb_lock']) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['rcb']);?>
%
                <?php } else { ?>
                  <fluent-text-field type="text" class="w-100" name="rcb" value="<?php echo smarty_modifier_myescape(number_format((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['rcb'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['rcb'] : $tmp),2));?>
"></fluent-text-field>
                <?php }?>
              </div>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['admin_auto_pay_earning'] == 1) {?>
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Receive earnings directly to e-currency account</span>
              <div>
                <input type="checkbox" name="user_auto_pay_earning" value=1 <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['user_auto_pay_earning'] == 1) {?>checked<?php }?>>
              </div>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] == 1) {?>
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Current Transaction Code:</span>
              <div>
                <fluent-text-field type="password" class="w-100" name="transaction_code_current" value=""></fluent-text-field>
              </div>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['tfa_settings']['edit_account']) {?>
            <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">2FA Code:</span>
              <div>
                <fluent-text-field type="text" class="w-100" name="tfa_code"></fluent-text-field>
                <input type="hidden" name="tfa_time" id="tfa_time">
              </div>
            </div>
            
            <?php echo '<script'; ?>
 language=javascript>
              document.getElementById('tfa_time').value = (new Date()).getTime();
            <?php echo '</script'; ?>
>
            
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"edit_account"), 0);
?>


            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m"></span>
              <div class="action">
                <fluent-button type="submit" appearance="accent" class="sbmt">Save</fluent-button>
              </div>
            </div>

          </form>

          <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>