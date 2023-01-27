<?php /* Smarty version 3.1.27, created on 2023-01-27 23:06:42
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\deposit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:62335679463d44af22eb517_94859758%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd58dfafb3c5f9353a2cccc9d5a06b9fd53227c49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\deposit.tpl',
      1 => 1667122342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62335679463d44af22eb517_94859758',
  'variables' => 
  array (
    'fatal' => 0,
    'frm' => 0,
    'errors' => 0,
    'currency_sign' => 0,
    'qplans' => 0,
    'plans' => 0,
    'plan' => 0,
    'o' => 0,
    'dps' => 0,
    'p' => 0,
    'min_deposit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d44af232b028_34620029',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d44af232b028_34620029')) {
function content_63d44af232b028_34620029 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '62335679463d44af22eb517_94859758';
?>

        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Deposit"), 0);
?>

        <span class="fontSize-xl fontWeight-regular mb-3">Deposit</span>
        <?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'one_per_month') {?>
        <div class="alert error">
        You can deposit once a month only.
        </div>
        <?php }?>
        <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_success') {?>
        <div class="alert success">
        The deposit has been successfully saved.
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_saved') {?>
        <div class="alert success">
        The deposit has been saved. It will become active when the administrator checks statistics.
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['less_min']) {?>
        <div class="alert error">
        Sorry, you can deposit not less than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['less_min']);?>
 with selected processing
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['greater_max']) {?>
        <div class="alert error">
        Sorry, you can deposit not greater than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['greater_max']);?>
 with selected processing
        </div>  
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_enough_funds']) {?>
        <div class="alert error">
        You have no enough funds to complete the operation.
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['ec_forbidden']) {?>
        <div class="alert error">
        Sorry, deposit with selected processing is temproary forbidden.
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['cannot_invest_this_plan_anymore']) {?>
        <div class="alert error">
        Sorry, you cannot invest this plan anymore
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['external_deposits_disabled']) {?>
        <div class="alert error">
        Deposit to this plan from external processing is forbidden.
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['internal_deposits_disabled']) {?>
        <div class="alert error">
        Deposit to this plan from balance is forbidden.
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_ps']) {?>
        <div class="alert error">
        Please, select funds source.
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['deposits_amount_exeeded']) {?>
        <div class="alert error">
        Your total deposit in &quot;<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['errors']->value['deposits_amount_exeeded']['plan'], ENT_QUOTES, 'UTF-8', true));?>
&quot; should not more than <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['errors']->value['deposits_amount_exeeded']['amount_limit']));?>

        </div>
        <?php }?>
        <?php }?>
        <div>

            <form method="post" name="spendform">
            <div class="grid-container grid-column-2">
              
              <div class="form-control">
                <input type="hidden" name="a" value="deposit">
                
                <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>
                <span class="fontSize-mPlus fontWeight-regular mb-2">Select a plan</span>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['plans']->value) < 1) {?>
                <input type="hidden" name="h_id" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan']->value['id']);?>
">
                <?php }?>
                <div class="field">
                  <fluent-radio-group orientation="vertical">
                  <?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['plan']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_fplans'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_fplans']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_fplans']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_fplans']->value['iteration'] == 1;
$foreach_plan_Sav = $_smarty_tpl->tpl_vars['plan'];
?>
                  <fluent-radio name="h_id" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan']->value['id']);?>
" <?php if ((((isset($_smarty_tpl->tpl_vars['__foreach_fplans']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_fplans']->value['first'] : null) == 1) && (!$_smarty_tpl->tpl_vars['frm']->value['h_id'])) || ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == $_smarty_tpl->tpl_vars['plan']->value['id'])) {?>checked<?php }?>><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</fluent-radio>
                  <?php
$_smarty_tpl->tpl_vars['plan'] = $foreach_plan_Sav;
}
?>
                  </fluent-radio-group>
                </div>
                
                <?php
$_from = $_smarty_tpl->tpl_vars['plan']->value['plans'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
                  <div>
                    <fluent-card class="card">
                      <span id="plan-name" class="fontSize-mPlus fontWeight-regular mb-2"><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</span>
                      <div class="flex align-items-center">
                        <i class="ms-Icon ms-Icon--CheckMark fontSize-m mb-2 mr-1"></i>
                        <span id="plan-min" class="fontSize-sPlus mb-2">Min <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['o']->value['min_deposit']));?>
</span>
                      </div>
                      <div class="flex align-items-center">
                        <i class="ms-Icon ms-Icon--CheckMark fontSize-m mb-2 mr-1"></i>
                        <span id="plan-max" class="fontSize-sPlus mb-2">Max <?php if ($_smarty_tpl->tpl_vars['o']->value['max_deposit'] == 0) {?>&infin;<?php } else {
echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['o']->value['max_deposit']));
}?></span>
                      </div>
                    </fluent-card>
                  </div>
                <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                
                <span class="fontSize-mPlus fontWeight-regular mb-2">Select eCurrency</span>
                <div class="field mb-3">
                  <fluent-select class="w-100 z-10" name="type" position="below">
                  <?php
$_from = $_smarty_tpl->tpl_vars['dps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                  <fluent-option value="process_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" <?php if ($_smarty_tpl->tpl_vars['frm']->value['type'] == "process_".((string)$_smarty_tpl->tpl_vars['p']->value['id'])) {?>selected<?php }?>>Topup <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</fluent-option>
                  <fluent-option value="account_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" <?php if ($_smarty_tpl->tpl_vars['frm']->value['type'] == "account_".((string)$_smarty_tpl->tpl_vars['p']->value['id'])) {?>selected<?php }?> <?php if ($_smarty_tpl->tpl_vars['p']->value['available'] <= 0) {?>disabled<?php }?>>Balance <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['available'],$_smarty_tpl->tpl_vars['p']->value['id']));?>
</fluent-option>
                  <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
                  </fluent-select>
                </div>
                
                <span class="fontSize-mPlus fontWeight-regular mb-2">Amount to Spend <?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
</span>
                <div class="field">
                  <fluent-number-field id="input-amount" class="w-100 fontSize-mPlus fontWeight-regular mb-2" name="amount" value="<?php echo smarty_modifier_myescape(amount_smarty_format((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['amount'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min_deposit']->value : $tmp)));?>
" required></fluent-number-field>
                </div>
                
                <div class="field">
                  <div id="coumpond_block" style="display:none">
                    <span class="fontSize-mPlus fontWeight-regular mb-2">Compounding(%)</span>
                    <select name="compound" class=inpts id="compound_percents"></select>
                  </div>
                </div>
              </div>
              
              <div class="">
                <div class="flex justify-content-between align-items-center">
                  <span class="fontSize-l fontWeight-regular">Daily</span>
                  <span id="calc-daily" class="fontSize-xlPlus">$0.00</span>
                </div>
                <div class="flex justify-content-between align-items-center">
                  <span class="fontSize-l fontWeight-regular">Weekly</span>
                  <span id="calc-weekly" class="fontSize-xlPlus">$0.00</span>
                </div>
                <div class="flex justify-content-between align-items-center">
                  <span class="fontSize-l fontWeight-regular">Monthly</span>
                  <span id="calc-monthly" class="fontSize-xlPlus">$0.00</span>
                </div>
                <div class="flex justify-content-between align-items-center">
                  <span class="fontSize-l fontWeight-regular">Yearly</span>
                  <span id="calc-yearly" class="fontSize-xlPlus">$0.00</span>
                </div>
              </div>
            </div>
            
            <div class="action">
              <fluent-button type="submit" appearance="accent" class="sbmt">Spend</fluent-button>
            </div>
            </form>
            <div>
            </div>
        </div>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>