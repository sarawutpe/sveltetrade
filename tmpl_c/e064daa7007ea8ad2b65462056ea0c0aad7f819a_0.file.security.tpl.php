<?php /* Smarty version 3.1.27, created on 2023-01-31 18:33:22
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:179034733863d950e21c7542_59603968%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e064daa7007ea8ad2b65462056ea0c0aad7f819a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\security.tpl',
      1 => 1667121599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179034733863d950e21c7542_59603968',
  'variables' => 
  array (
    'security' => 0,
    'settings' => 0,
    'errors' => 0,
    'tfa_enabled' => 0,
    'tfa_settings' => 0,
    'tfa_secret' => 0,
    'tfa_secret_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d950e21f1195_75258228',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d950e21f1195_75258228')) {
function content_63d950e21f1195_75258228 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '179034733863d950e21c7542_59603968';
?>
          <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Security"), 0);
?>

          <span class="fontSize-xl fontWeight-regular mb-3">Security</span>
          <div class="grid-container grid-column-2">
            <section>
              <form method="post">
              <input type="hidden" name="a" value="security">
              <input type="hidden" name="action" value="save">
              <div class="field">
                <span class="fontSize-mPlus fontWeight-regular mb-1">Detect IP Address Change Sensitivity</span>
                <fluent-radio-group class="radio-group" name="ip" aria-labelledby="setting-ip" orientation="vertical">
                  <fluent-radio value="disabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'disabled') {?>checked<?php }?>>Disabled</fluent-radio>
                  <fluent-radio value="medium" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'medium') {?>checked<?php }?>>Medium</fluent-radio>
                  <fluent-radio value="high" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'high') {?>checked<?php }?>>High</fluent-radio>
                  <fluent-radio value="always" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'always') {?>checked<?php }?>>Paranoic</fluent-radio>
                </fluent-radio-group>
              </div>
              <div class="field">
                <span class="fontSize-mPlus fontWeight-regular mb-1">Detect Browser Change</span>
                <fluent-radio-group class="radio-group" name="browser" aria-labelledby="setting-ip" orientation="vertical">
                  <fluent-radio value="disabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'disabled') {?>checked<?php }?>>Disabled</fluent-radio>
                  <fluent-radio value="enabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'enabled') {?>checked<?php }?>>Enabled</fluent-radio>
                </fluent-radio-group>
              </div>
              <div class="action">
                <fluent-button type="submit" appearance="accent">Save</fluent-button>
              </div>
              </form>
            </section>
            <section>
              <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_tfa']) {?>
              <span class="fontSize-mPlus fontWeight-regular mb-1">Two-Factor Authentication (2FA)</span>
              <form method="post" name="mainform">
                <input type="hidden" name="a" value="security">
                <input type="hidden" name="action" value="tfa_save">
                <input type="hidden" name="time">
                <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
                <div class="alert error">Invalid code.</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_secret']) {?>
                <div class="alert error">Invalid Secret.</div>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['tfa_enabled']->value) {?>
                <div class="field">
                  <div class="flex justify-content-between">
                    <span class="fontSize-m">on Login:</span>
                    <fluent-switch name="tfa_on_login" value="1" <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['login']) {?>checked<?php }?>>
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                <div class="field">
                  <div class="flex justify-content-between">
                    <span class="fontSize-m">on Edit Account:</span>
                    <fluent-switch name="tfa_on_edit_account" value="1" <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['edit_account']) {?>checked<?php }?>>
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                <div class="field">
                  <div div class="flex justify-content-between">
                    <span class="fontSize-m">on Withdraw:</span>
                    <fluent-switch name="tfa_on_withdraw" value="1" <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['withdraw']) {?>checked<?php }?>>
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['internal_transfer_enabled']) {?>
                <div class="field">
                  <div div class="flex justify-content-between">
                    <span class="fontSize-m">on Internal Transfer:</span>
                    <fluent-switch name="tfa_on_internal_transfer" value="1" <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['internal_transfer']) {?>checked<?php }?>>
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                <?php }?>
                <div class="field">
                  <div div class="flex justify-content-between">
                    <span class="fontSize-m">Two-Factor Authentication:</span>
                    <fluent-switch name="tfa_disable" value="" checked onchange="handle2faDisable(this.checked)">
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                <div class="field">
                  <fluent-text-field class="w-100" name="code">Enter code:</fluent-text-field>
                </div>
                <div class="action">
                  <fluent-button type="submit" appearance="accent">Save</fluent-button>
                </div>
                <?php } else { ?>
                
                <div class="field">
                  <span class="fontSize-m">Secret key: <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
</b></span>
                  <input type="hidden" name="tfa_secret" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
">
                </div>
                <fluent-card class="card flex flex-column align-items-center">
                  <img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret_url']->value);?>
" width="120px" height="120px" alt="qr-code">
                  <span class="fontSize-m fontWeight-regular uppercase my-1">Scan me</span>
                </fluent-card>
                <div class="field">
                  <fluent-text-field class="w-100" name="code">Enter code:</fluent-text-field>
                </div>
                <div class="action">
                  <fluent-button type="submit" appearance="accent">Enable</fluent-button>
                </div>
                <?php }?>
              </form>
            </section>
          </div>
          
          <?php echo '<script'; ?>
 language=javascript>
          document.mainform.time.value = (new Date()).getTime();
          function checkform() {
            if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
              alert("Please type code!");
              document.mainform.code.focus();
              return false;
            }
            return true;
          }
          function handle2faDisable(e) {
            let element = document.getElementsByName('tfa_disable')[0];
            if (e && element) {
              element.value = ""
            } else {
              element.value = "1";
            }
            return
          }
          <?php echo '</script'; ?>
>
          
          <?php }?> 
          <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>