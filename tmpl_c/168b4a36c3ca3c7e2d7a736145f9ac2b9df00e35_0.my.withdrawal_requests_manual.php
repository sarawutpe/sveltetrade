<?php /* Smarty version 3.1.27, created on 2022-08-12 07:10:19
         compiled from "my:withdrawal_requests_manual" */ ?>
<?php
/*%%SmartyHeaderCode:207613564962f5e0bbced726_29870014%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '168b4a36c3ca3c7e2d7a736145f9ac2b9df00e35' => 
    array (
      0 => 'my:withdrawal_requests_manual',
      1 => 1660281019,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '207613564962f5e0bbced726_29870014',
  'variables' => 
  array (
    'fatals' => 0,
    'trans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f5e0bbd18210_16785134',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f5e0bbd18210_16785134')) {
function content_62f5e0bbd18210_16785134 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '207613564962f5e0bbced726_29870014';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Manual Process Withdrawal:</h3> <?php if ($_smarty_tpl->tpl_vars['fatals']->value) {?> <?php if ($_smarty_tpl->tpl_vars['fatals']->value['done']) {?> <div class="alert alert-success">Withdrawal has been processed.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['fatals']->value['not_found']) {?> <div class="alert alert-warning">Transaction not found. Probably withdrawal was already processed.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['fatals']->value['user_not_found']) {?> <div class="alert alert-danger">User not found</div> <?php }?> <br> <center> <input type=button class=sbmt value="Close" onclick="window.close();"> </center> <?php }?> <?php if (!$_smarty_tpl->tpl_vars['fatals']->value) {?> <form name=spend method=post> <table class="form"> <?php echo $_smarty_tpl->getSubTemplate ("my:withdraw_details_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <tr> <th></th> <td>  <?php echo '<script'; ?>
> function submit_perfectmoney() { document.getElementById("perfectmoney_form").submit(); } <?php echo '</script'; ?>
>  <a class="sbmt" onclick="submit_perfectmoney()">Go to PerfectMoney</a> </td> </tr>  <tr> <th>Payment ID:</th> <td><input type=input name=batch value="" class=inpts></td> </tr> <tr> <th>Payee Account:</th> <td><input type=input name=payee value="<?php if (!$_smarty_tpl->tpl_vars['trans']->value['account_array']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['account'], ENT_QUOTES, 'UTF-8', true);
}?>" class=inpts></td> </tr> <tr> <th></th> <td> <input type=hidden name=a value="withdrawal_requests"> <input type=hidden name=action2 value="pay_manual"> <input type=hidden name=do value="confirm"> <input type=hidden name=id value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['id'];?>
"> <input type=submit value="Confirm Transaction has been Paid" class="sbmt btn-success"> &nbsp; <input type=button class="sbmt btn-danger" value="Cancel" onclick="window.close();"> </td> </tr> </table> </form>  <form method=post action="https://perfectmoney.com/api/step1.asp" id="perfectmoney_form"> 
 <input type=hidden name="PAYEE_ACCOUNT" value=""> <input type=hidden name="PAYEE_NAME" value="Investor"> <input type=hidden name="PAYMENT_ID" value=""> <input type=hidden name="PAYMENT_AMOUNT" value="10.00"> <input type=hidden name="PAYMENT_UNITS" value="USD"> <INPUT type=hidden name="PAYMENT_URL" value="http://bitfonix.com/index.php/pay_withdraw/postback/18/withdraw/21-b66a0693655c88490aeb8ce0e259f7bb/"> <INPUT type=hidden name="NOPAYMENT_URL" value="http://bitfonix.com/admin.php?a=pay_withdraw_return&say=no"> <input type=hidden name="PAYMENT_URL_METHOD" value="GET"> <input type=hidden name="NOPAYMENT_URL_METHOD" value="GET"> <INPUT type=hidden name=SUGGESTED_MEMO value="Withdraw to demo from Bitfonix"> <input type=hidden name="BAGGAGE_FIELDS" value="a withdraw"> </form>  <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>