<?php /* Smarty version 3.1.27, created on 2023-01-29 09:35:36
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\deposit.account.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:128464362063d62fd8f12d71_38411417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf16e592fe9da093ffa7e3b0a997162c037e95dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\deposit.account.confirm.tpl',
      1 => 1674981252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128464362063d62fd8f12d71_38411417',
  'variables' => 
  array (
    'errors' => 0,
    'plan_name' => 0,
    'currency_sign' => 0,
    'deposit' => 0,
    't' => 0,
    'type' => 0,
    'h_id' => 0,
    'famount' => 0,
    'compound' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d62fd900e3d8_19186648',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d62fd900e3d8_19186648')) {
function content_63d62fd900e3d8_19186648 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '128464362063d62fd8f12d71_38411417';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Deposit Confirmation"), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_type']) {?>
    <div class="alert error">tde Plan does not exist.</div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_enough_funds']) {?>
    <div class="alert error">You have no enough funds to complete tde operation.</div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['less_min']) {?>
    <div class="alert error">
      tde minimal spend amount for '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
' is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['less_min']);?>
.
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['on_hold']) {?>
    <div class="alert error">
      Sorry, tdis amount on hold now.
    </div>
  <?php }?>
  Click <a href="<?php echo smarty_modifier_myescape(encurl("?a=deposit"));?>
">here</a> and try again.
<?php } else { ?>

  <span class="fontSize-xl fontWeight-regular mb-3">Deposit Confirmation</span>
  <div class="table-responsive">
    <table>
      <tr>
        <td>Plan</td>
        <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['deposit']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
      </tr>
      <tr>
        <td>Profit</td>
        <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['percent']);?>
% <?php if ($_smarty_tpl->tpl_vars['deposit']->value['period'] == 'end' || $_smarty_tpl->tpl_vars['deposit']->value['period'] == 'endh') {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>

            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] != 1) {?>s<?php }
} else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['period_name']);?>
 for
            <?php if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] == 0) {?>lifelong<?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] != 1) {?>s<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['deposit']->value['work_week']) {?>(mon-fri)<?php }
}
}?></td>
        </tr>
        <tr>
          <td>Principal Return</td>
          <td><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return']) {?>Yes
              <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'] > 0) {?>, witd
              <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'],2));?>
% fee<?php }?>
            <?php } else { ?>No (included in profit)
            <?php }?></td>
        </tr>
        <tr>
          <td>Principal Witddraw</td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_witddraw']) {?>Available witd
              <?php
$_from = $_smarty_tpl->tpl_vars['deposit']->value['principal_witddraw_terms'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_wpt'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_wpt']->value['total'];
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['percent']);?>
% fee <?php if ($_smarty_tpl->tpl_vars['t']->value['duration'] > 0) {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['duration']);?>
 days<?php }
if (!(isset($_smarty_tpl->tpl_vars['__foreach_wpt']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] : null)) {?> or <?php }?>
              <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
              <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_witddraw_duration_max']) {?> but before
                <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_witddraw_duration_max']));?>

              days<?php }?>
            <?php } else { ?>Not available
            <?php }?>
          </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['deposit']->value['compound'] != -1) {?>
          <tr>
            <td>Compound</td>
            <td><?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['compound']));?>
%</td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['deposit']->value['fees']['fee']) {?>
          <tr>
            <td>Credit Amount</td>
            <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['user_amount'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
</td>
          </tr>
          <tr>
            <td>Deposit Fee</td>
            <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['fees']['fee'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
 (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['fees']['percent']);?>
%)</td>
          </tr>
          <tr>
            <td>Deposit</td>
            <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['to_deposit'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
</td>
          </tr>
        <?php } else { ?>
          <tr>
            <td>Amount</td>
            <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['user_amount'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
</td>
          </tr>
        <?php }?>
      </table>
    </div>

    <form name="spend" metdod="post">
      <input type="hidden" name="a" value="deposit">
      <input type="hidden" name="action" value="confirm">
      <input type="hidden" name="type" value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value);?>
>
      <input type="hidden" name="h_id" value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['h_id']->value);?>
>
      <input type="hidden" name="amount" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['famount']->value);?>
">
      <input type="hidden" name="compound" value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['compound']->value);?>
>
      <div class="action">
        <fluent-button class="mr-2" type="submit" appearance="accent">Process</fluent-button>
        <fluent-button class="mr-2" type="button" appearance="outline" onclick="document.location='?a=deposit'">Cancel</fluent-button>
      </div>
    </form>

  <?php }?>

  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>