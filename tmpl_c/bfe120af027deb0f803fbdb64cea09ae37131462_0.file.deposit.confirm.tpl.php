<?php /* Smarty version 3.1.27, created on 2023-01-29 07:19:20
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\deposit.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:211264701663d60fe8ca58c1_70772098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe120af027deb0f803fbdb64cea09ae37131462' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\deposit.confirm.tpl',
      1 => 1662827986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211264701663d60fe8ca58c1_70772098',
  'variables' => 
  array (
    'false_data' => 0,
    'deposit' => 0,
    't' => 0,
    'payment_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d60fe8ce8ae4_90334445',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d60fe8ce8ae4_90334445')) {
function content_63d60fe8ce8ae4_90334445 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '211264701663d60fe8ca58c1_70772098';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Deposit Confirmation"), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['false_data']->value != 1) {?>
  <span class="fontSize-xl fontWeight-regular mb-3">Deposit Confirmation</span>
  <div class="table-responsive">
    <table>
      <?php if ($_smarty_tpl->tpl_vars['deposit']->value['id'] > 0) {?>
        <tbody>
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
                <?php if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] == 0) {?>lifelong
                <?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>

                  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] != 1) {?>s<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['deposit']->value['work_week']) {?>(mon-fri)<?php }
}
}?>
                </td>
              </tr>
              <tr>
                <td>Principal Return</td>
                <td><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return']) {?>Yes
                    <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'] > 0) {?>, witd
                    <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'],2));?>
% fee<?php }?>
                  <?php } else { ?>
                    No (included in profit)
                  <?php }?>
                </td>
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
              <?php if ($_smarty_tpl->tpl_vars['deposit']->value['use_compound'] == 1) {?>
                <tr>
                  <td>Compound</td>
                  <td><?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['compound']));?>
%</td>
                </tr>
              <?php }?>
            <?php }?> 

            <?php if ($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee']) {?>
              <tr>
                <td>Credit Amount</td>
                <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['user_amount'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
</td>
              </tr>
              <tr>
                <td>Deposit Fee</td>
                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['percent']);?>
% + <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['add_amount'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
 (min.
                  <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_min'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
 max. <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_max'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
)</td>
              </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']) {?>
              <tr>
                <td>Debit Amount</td>
                <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['converted_amount'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
</td>
              </tr>
              <tr>
                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_fiat']);?>
 Debit Amount</td>
                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
              </tr>
            <?php } else { ?>
              <tr>
                <td>Debit Amount</td>
                <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['amount'],$_smarty_tpl->tpl_vars['deposit']->value['ec']));?>
</td>
              </tr>
            </tbody>
          <?php }?>
        </table>
      </div>

      <div class="payment_form">
        <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['payment_form']->value);?>

      </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>