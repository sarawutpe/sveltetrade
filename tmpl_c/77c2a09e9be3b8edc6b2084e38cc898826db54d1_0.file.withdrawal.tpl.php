<?php /* Smarty version 3.1.27, created on 2023-01-21 18:57:04
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\withdrawal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:43966124263cc27703a10e4_64241333%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77c2a09e9be3b8edc6b2084e38cc898826db54d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\withdrawal.tpl',
      1 => 1673759736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43966124263cc27703a10e4_64241333',
  'variables' => 
  array (
    'say' => 0,
    'batch' => 0,
    'fatals' => 0,
    'fatal' => 0,
    'settings' => 0,
    'errors' => 0,
    'currency_sign' => 0,
    'fees' => 0,
    'preview' => 0,
    'amount' => 0,
    'ec' => 0,
    'comment' => 0,
    'currency' => 0,
    'account' => 0,
    'converted' => 0,
    'to_withdraw' => 0,
    'userinfo' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'p' => 0,
    'frm' => 0,
    'wfch' => 0,
    'have_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63cc2770411a04_75234953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63cc2770411a04_75234953')) {
function content_63cc2770411a04_75234953 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '43966124263cc27703a10e4_64241333';
?>
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Withdrawal"), 0);
?>

        <?php echo '<script'; ?>
>
          
            function playSuccessAudio() {
              const audio = new Audio('../assets/utils/effect-success.mp3');
              audio.play();
            }
          
        <?php echo '</script'; ?>
>
        <span class="fontSize-xl fontWeight-regular mb-3">Withdrawal</span>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'processed') {?>
          <?php if ($_smarty_tpl->tpl_vars['batch']->value == '') {?>
            <div class="alert success">Withdrawal request has been successfully saved.</div>
            <?php echo '<script'; ?>
>
              playSuccessAudio()
            <?php echo '</script'; ?>
>
          <?php } else { ?>
            <div class="alert success">Withdrawal has been processed. Batch id: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['batch']->value);?>
</div>
            <?php echo '<script'; ?>
>
              playSuccessAudio()
            <?php echo '</script'; ?>
>
          <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['fatals']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'times_limit' || $_smarty_tpl->tpl_vars['fatals']->value['times_limit']) {?>
            <div class="alert error">You can withdraw <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_times']);?>
 per
              <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_date']);?>
 only.</div>
          <?php }?>
        <?php } else { ?>
          <?php if ($_smarty_tpl->tpl_vars['say']->value == 'ec_forbidden' || $_smarty_tpl->tpl_vars['errors']->value['ec_forbidden']) {?>
            <div class="alert error">Sorry, withdraw for this processing is temproary forbidden.</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['say']->value == 'on_hold' || $_smarty_tpl->tpl_vars['errors']->value['on_hold']) {?>
            <div class="alert error">Sorry, this amount on hold now.</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['say']->value == 'zero' || $_smarty_tpl->tpl_vars['errors']->value['zero']) {?>
            <div class="alert error">Sorry, you can't request a withdraw smaller than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
0.00 only</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'less_min' || $_smarty_tpl->tpl_vars['errors']->value['less_min']) {?>
        <div class="alert error">Sorry, you can request not less than
          <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['amount_min']);?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'greater_max' || $_smarty_tpl->tpl_vars['errors']->value['greater_max']) {?>
        <div class="alert error">Sorry, you can request not greater than
          <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['amount_max']);?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'daily_limit' || $_smarty_tpl->tpl_vars['errors']->value['daily_limit']) {?>
        <div class="alert error">Sorry, you have exceeded a daily limit</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'not_enought' || $_smarty_tpl->tpl_vars['errors']->value['not_enought']) {?>
        <div class="alert error">Sorry, you have requested the amount larger than the one on your balance.</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_transaction_code' || $_smarty_tpl->tpl_vars['errors']->value['invalid_transaction_code']) {?>
        <div class="alert error">You have entered the invalid transaction code.</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_tfa_code' || $_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
        <div class="alert error">You have entered invalid 2FA code.</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_deposits' || $_smarty_tpl->tpl_vars['errors']->value['no_deposits']) {?>
        <div class="alert error">You have not done any deposits yet. Withdrawal function will be available after a
          deposit.</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_active_deposits' || $_smarty_tpl->tpl_vars['errors']->value['no_active_deposits']) {?>
        <div class="alert error">You must have active deposit to withdraw.</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_account' || $_smarty_tpl->tpl_vars['errors']->value['no_account']) {?>
        <div class="alert error">Please, provide your account to withdraw funds to first <a
            href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
">here</a>.</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['demo']) {?>
        <div class="alert error">Withdraw is not available for demo account.</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>
        <div class="alert error">Invalid turing image</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['account_suspended']) {?>
        <div class="alert error">Account is suspended</div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
        
        <form method="post">
          <input type="hidden" name="a" value="withdraw">
          <input type="hidden" name="action" value="withdraw">
          <input type="hidden" name="amount" value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
>
          <input type="hidden" name="ec" value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ec']->value);?>
>
          <input type="hidden" name="comment" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
">
          <div class="table-responsive">
            <table class="form deposit_confirm">
              <tbody>
                <tr>
                  <td>Payment System:</td>
                  <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency']->value);?>
</td>
                </tr>
                <tr>
                  <td>Account:</td>
                  <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['account']->value);?>
</td>
                </tr>
                <tr>
                  <td>Debit Amount:</td>
                  <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['amount']->value,$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
                </tr>
                <tr>
                  <td>Withdrawal Fee:</td>
                  <td>
                    <?php if ($_smarty_tpl->tpl_vars['fees']->value['fee'] > 0) {?>
                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['percent']);?>
% + <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['add_amount'],$_smarty_tpl->tpl_vars['ec']->value));?>
 (min. <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['fee_min'],$_smarty_tpl->tpl_vars['ec']->value));?>
 max.
                    <?php if ($_smarty_tpl->tpl_vars['fees']->value['fee_max']) {
echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['fee_max'],$_smarty_tpl->tpl_vars['ec']->value));
} else { ?>no<?php }?>)
                    <?php } else { ?>
                    We have no fee for this operation.
                    <?php }?>
                  </td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['converted']->value) {?>
                <tr>
                  <td>Credit Amount:</td>
                  <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['converted']->value['amount'],$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
                </tr>
                <tr>
                  <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['converted']->value['fiat']);?>
 Amount:</td>
                  <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['to_withdraw']->value);?>
</td>
                </tr>
                <?php } else { ?>
                <tr>
                  <td>Credit Amount:</td>
                  <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['to_withdraw']->value,$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['comment']->value) {?>
                <tr>
                  <td>Note:</td>
                  <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
</td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code'] && $_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']) {?>
                <tr>
                  <th>Transaction Code:</th>
                  <td><input type="password" name="transaction_code" class=inpts size=15></td>
                </tr>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"withdrawal"), 0);
?>

                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['tfa_settings']['withdraw']) {?>
                <tr>
                  <td>2FA Code:</td>
                  <td>
                    <input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time"
                      id="tfa_time">
                  </td>
                </tr>
                
                <?php echo '<script'; ?>
 language=javascript>
                  document.getElementById('tfa_time').value = (new Date()).getTime();
                <?php echo '</script'; ?>
>
                
                <?php }?>
              </tbody>
            </table>
          </div>
          <fluent-button class="mr-2" type="submit" appearance="accent">Confirm</fluent-button>
          <fluent-button class="mr-2" type="button" appearance="outline" onclick="<?php echo smarty_modifier_myescape(encurl("?a=withdraw"));?>
">Cancel
          </fluent-button>
        </form>
        <?php } else { ?>
        <div>
          <form method="post">
            <div class="grid-container grid-column-2">
              
              <div class="form-control">
                <input type="hidden" name="a" value="withdraw">
                <input type="hidden" name="action" value="preview">
                <input type="hidden" name="say" value="">
                
                <div>
                  <fluent-card class="card w-100">
                    <div class="flex justify-content-between mb-1">
                      <span class="fontWeight-regular">Account Balance</span>
                      <span><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</span>
                    </div>
                    <div class="flex justify-content-between mb-1">
                      <span class="fontWeight-regular">Pending Withdrawals</span>
                      <span><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending'] != 0) {
echo smarty_modifier_myescape(amount_smarty_format($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']));
} else { ?>0.00<?php }?></span>
                    </div>
                  </fluent-card>
                </div>
                
                <div class="flex align-items-center">
                  <div class="mr-1">
                    <span class="fontSize-mPlus fontWeight-regular mb-2">Select eCurrency</span>
                  </div>
                  <div>
                    <fluent-tooltip id="tooltip" anchor="anchor-default">
                      Show the eCurrency Available and Pending
                    </fluent-tooltip>
                    <i id="anchor-default" class="ms-Icon ms-Icon--Info fontSize-m mb-2 mr-1"></i>
                  </div>
                </div>
                <div class="field mb-3">
                  <fluent-select class="w-100 z-10" name="ec" position="below">
                    <?php $_smarty_tpl->tpl_vars["wfch"] = new Smarty_Variable(1, null, 0);?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['available'] > 0) {?>
                    <fluent-option value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"
                      <?php if ($_smarty_tpl->tpl_vars['frm']->value['ec'] == $_smarty_tpl->tpl_vars['p']->value['id'] || $_smarty_tpl->tpl_vars['wfch']->value) {
$_smarty_tpl->tpl_vars["wfch"] = new Smarty_Variable(0, null, 0);?>selected<?php }?>>
                      <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
 <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['available'],$_smarty_tpl->tpl_vars['p']->value['ec']));?>
 | <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['pending'],$_smarty_tpl->tpl_vars['p']->value['ec']));?>

                    </fluent-option>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
                  </fluent-select>
                </div>
                
                <?php if ($_smarty_tpl->tpl_vars['have_available']->value) {?>
                <span class="fontSize-mPlus fontWeight-regular mb-2">Withdrawal <?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
</span>
                <div class="field mb-0">
                  <fluent-number-field class="w-100 fontSize-mPlus fontWeight-regular mb-2" name="amount"
                    value="<?php echo smarty_modifier_myescape((($tmp = @amount_smarty_format($_smarty_tpl->tpl_vars['frm']->value['amount']))===null||$tmp==='' ? "10.00" : $tmp));?>
" required</fluent-number-field>
                </div>
                
                <div class="field">
                  <fluent-text-area class="w-100" name="comment" placeholder="Your comment"></fluent-text-area>
                </div>
              </div>
              
              <div class="">
                <span class="fontSize-mPlus fontWeight-regular mb-2">Wallet Setting</span>
                
                <div class="table-responsive">
                  <table cellspacing=0 cellpadding=2 border=0>
                    <thead>
                      <tr>
                        <th>Processing</th>
                        <th>Account</th>
                      </tr>
                    </thead>
                    <?php $_smarty_tpl->tpl_vars["wfch"] = new Smarty_Variable(1, null, 0);?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                    <tbody>
                      <tr>
                        <td>
                          <img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
.gif" width=44 height=17 align=absmiddle> <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>

                        </td>
                        <td>
                          <?php if ($_smarty_tpl->tpl_vars['p']->value['account'] != '') {?>
                              <a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
">Edit</a>
                            <?php } else { ?>
                              <a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
">+Add new</a>
                            <?php }?>
                          </td>
                        </tr>
                      </tbody>
                    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
                  </table>
                </div>
              </div>
            </div>
            
            
            <div class="action">
              <fluent-button type="submit" appearance="accent" class="sbmt">Request</fluent-button>
            </div>
            <?php } else { ?>
            <div class="alert error">You have no funds to withdraw.</div>
            <?php }?>
          </form>
        </div>
        <?php }?>
        <?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>