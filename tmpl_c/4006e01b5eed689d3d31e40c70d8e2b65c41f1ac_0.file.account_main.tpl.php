<?php /* Smarty version 3.1.27, created on 2023-01-29 17:53:35
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:174398308663d6a48f2dda80_36318451%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4006e01b5eed689d3d31e40c70d8e2b65c41f1ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\account_main.tpl',
      1 => 1668229375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174398308663d6a48f2dda80_36318451',
  'variables' => 
  array (
    'ab_formated' => 0,
    'last_deposit' => 0,
    'last_deposit_ec' => 0,
    'last_deposit_date' => 0,
    'last_withdrawal' => 0,
    'last_withdrawal_ec' => 0,
    'last_withdrawal_date' => 0,
    'userinfo' => 0,
    'last_access' => 0,
    'ps' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d6a48f30dc11_88692844',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d6a48f30dc11_88692844')) {
function content_63d6a48f30dc11_88692844 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '174398308663d6a48f2dda80_36318451';
?>
          <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Home"), 0);
?>

          <span class="fontSize-xl fontWeight-regular mb-3">Account Overview</span>
          <div class="grid-container grid-column-4 mb-2">
            <fluent-card class="card flex mb-0">
                <div class="line-rounded color1">
                  <span class="ml-2">Account Balance</span>
                  <span class="ml-2"><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</span>
                </div>
            </fluent-card>
            <fluent-card class="card flex mb-0">
                <div class="line-rounded color2">
                  <span class="ml-2">Earned Total</span>
                  <span class="ml-2"><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
</span>
                </div>
            </fluent-card>
            <fluent-card class="card flex mb-0">
                <div class="line-rounded color3">
                  <span class="ml-2">Withdrew Total</span>
                  <span class="ml-2"><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</span>
                </div>
            </fluent-card>
            <fluent-card class="card flex mb-0">
                <div class="line-rounded color4">
                  <span class="ml-2">Active Deposit</span>
                  <span class="ml-2"><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</span>
                </div>
            </fluent-card>
          </div>
          
          <fluent-tabs class="mb-3" activeid="transactions">
            <fluent-tab id="transactions">Transactions</fluent-tab>
            <fluent-tab id="accountInfo">Account Info</fluent-tab>
            <fluent-tab-panel id="transactionsPanel">
                <ul>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Pending Withdrawal</div>
                        <div><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
</div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Last Deposit</div>
                        <div><?php if ($_smarty_tpl->tpl_vars['last_deposit']->value) {
echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['last_deposit']->value,$_smarty_tpl->tpl_vars['last_deposit_ec']->value));?>

                            <?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_deposit_date']->value)===null||$tmp==='' ? "n/a" : $tmp));
} else { ?>
                              <?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
0.00
                            <?php }?></div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Total Deposit</div>
                        <div><?php if ($_smarty_tpl->tpl_vars['ab_formated']->value['deposit'] != 0) {
echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']));
} else {
echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
0.00<?php }?></div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Last Withdrawal</div>
                        <div><?php if ($_smarty_tpl->tpl_vars['last_withdrawal']->value) {
echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['last_withdrawal']->value,$_smarty_tpl->tpl_vars['last_withdrawal_ec']->value));?>

                            <?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_withdrawal_date']->value)===null||$tmp==='' ? "n/a" : $tmp));
} else { ?>
                              <?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
0.00
                            <?php }?></div>
                      </div>
                  </li>
                </ul>
            </fluent-tab-panel>
            <fluent-tab-panel id="accountInfoPanel">
                <ul>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>User</div>
                        <div><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Registration Date:</div>
                        <div><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date']);?>
</div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Last Access:</div>
                        <div><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_access']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</div>
                      </div>
                  </li>
                </ul>
            </fluent-tab-panel>
          </fluent-tabs>

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
            <?php if ($_smarty_tpl->tpl_vars['p']->value['pending_col'] > 0) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['pending_col']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 deposit<?php if ($_smarty_tpl->tpl_vars['p']->value['pending_col'] > 1) {?>s<?php }?> of
          <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['pending_amount']));?>
 total pending<br><?php }?>
          <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

          
          <span class="fontSize-mPlus fontWeight-regular mb-2">Statistics</span>

          <?php echo $_smarty_tpl->getSubTemplate ("chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

          <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>