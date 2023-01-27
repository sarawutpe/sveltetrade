<?php /* Smarty version 3.1.27, created on 2023-01-24 17:20:39
         compiled from "my:edit_hyip" */ ?>
<?php
/*%%SmartyHeaderCode:167725889563d00557d69715_32507778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '699120cf6b26e5108dd053f2a7ee6390464eca57' => 
    array (
      0 => 'my:edit_hyip',
      1 => 1674577239,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '167725889563d00557d69715_32507778',
  'variables' => 
  array (
    'frm' => 0,
    'type' => 0,
    'fiats' => 0,
    'use_deposit_bonus' => 0,
    'use_pereodic_earning_bonus' => 0,
    'rates' => 0,
    'rate' => 0,
    'f' => 0,
    'i' => 0,
    'fiat_limits' => 0,
    'rates_colspan' => 0,
    'withdraw_principal_range' => 0,
    'wpr' => 0,
    'other_packages' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d00557dbea30_30881967',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d00557dbea30_30881967')) {
function content_63d00557dbea30_30881967 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '167725889563d00557d69715_32507778';
echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo '<script'; ?>
 language=javascript>  function OF() { change_days_hours_label(); var period = document.nform.hperiod[document.nform.hperiod.selectedIndex].value; if (period == "d") { document.getElementById("tr_work_week").style.display = ""; } else if (period == "h" && document.nform.hq_days.value >= 24*7) { document.getElementById("tr_work_week").style.display = ""; } else { document.getElementById("tr_work_week").style.display = "none"; } if (period == "end" || period == "endh") { document.getElementById("duration_without_limit").style.display = "none"; document.getElementById("duration_divider").style.display = "none"; } else { document.getElementById("duration_without_limit").style.display = ""; document.getElementById("duration_divider").style.display = ""; } }   function change_days_hours_label() { var frm = document.nform; if (frm.hperiod[frm.hperiod.selectedIndex].value.match(/^\d*h$/) || frm.hperiod[frm.hperiod.selectedIndex].value == "endh") { document.getElementById("duration_in_days_label").style.display = "none"; document.getElementById("duration_in_hours_label").style.display = "inline"; } else { document.getElementById("duration_in_days_label").style.display = "inline"; document.getElementById("duration_in_hours_label").style.display = "none"; } if (document.getElementById("tr_periodic_bonus")) { if (frm.hperiod[frm.hperiod.selectedIndex].value.substr(0,3) == "end") { document.getElementById("tr_periodic_bonus").style.display = "none"; } else { document.getElementById("tr_periodic_bonus").style.display = ""; } } } function checkform() { if (document.nform.hname.value=="") { alert("Please anter a HYIP name!"); document.nform.hname.focus(); return false; } return true; }  <?php echo '</script'; ?>
>  <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "saved") {?> <div class="alert alert-success">Investment Package has been updated.</div> <?php }?> <h3><?php if ($_smarty_tpl->tpl_vars['type']->value['id'] > 0) {?>Edit &#39;<?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
&#39;<?php } else { ?>Add<?php }?> Investment Package:</h3> <form method=post name=nform onsubmit="return checkform();"> <input type=hidden name=id value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"> <table class="form nosize"> <tr> <th><a data-hlp="Enter your package name here." class=hlp>Package Name:</a></th> <td><input type=text name=hname class=inpts size=30 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></td> </tr> <tr> <th><a data-hlp="If Closed no users can deposit in the package but all current deposits are working as usual. If Public the package is opened for deposits." class=hlp>Closed Package:</a></th> <td> <select name=closed class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['type']->value['closed'] == 0) {?>selected<?php }?>>Public</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['closed'] == 1) {?>selected<?php }?>>Closed</option> </select> </td> </tr> <tr> <th><a data-hlp="Users will receive earnings if the package status is active." class=hlp>Status:</th> <td> <select name=hstatus class=inpts> <option value="on" <?php if ($_smarty_tpl->tpl_vars['type']->value['status'] == "on") {?>selected<?php }?>>Active</option> <option value="off" <?php if ($_smarty_tpl->tpl_vars['type']->value['status'] == "off") {?>selected<?php }?>>Inactive</option> </select> </td> </tr> <tr> <th><a data-hlp="Specify here when user will get earning from deposit at this package" class=hlp>Payment period:</a></th> <td> <select name=hperiod id=hperiod class=inpts onchange="OF();CheckCompound();"> <option value="d" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "d") {?>selected<?php }?>>Daily</option>  <option value="w" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "w") {?>selected<?php }?>>Weekly</option> <option value="b-w" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "b-w") {?>selected<?php }?>>Bi-weekly</option> <option value="m" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "m") {?>selected<?php }?>>Monthly</option> <option value="2m" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "2m") {?>selected<?php }?>>Every 2 months</option> <option value="3m" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "3m") {?>selected<?php }?>>Every 3 months</option> <option value="6m" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "6m") {?>selected<?php }?>>Every 6 months</option> <option value="y" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "y") {?>selected<?php }?>>Yearly</option> <option value="h" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "h") {?>selected<?php }?>>Hourly</option>  <option value="endh" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "endh") {?>selected<?php }?>>After the specified Hours</option> <option value="end" <?php if ($_smarty_tpl->tpl_vars['type']->value['period'] == "end") {?>selected<?php }?>>After the specified Days</option> </select> </td> </tr> <tr> <th><a data-hlp="Specify your package duration here. For example 30 days, 365 days, or no limit." class=hlp>Package Duration:</a></th> <td> <span id="duration_with_end"> <input type=text name=hq_days class="inpts nosize" size=5 value="<?php echo $_smarty_tpl->tpl_vars['type']->value['q_days'];?>
" oninput="OF();">&nbsp; <span id="duration_in_days_label">days</span> <span id="duration_in_hours_label"><a data-hlp="If `Payment period` is set to `Hourly`, plan duration counts in hours" class=hlp>hours</a></span> </span> <span id="duration_divider"> | </span> <span id="duration_without_limit"><input type=checkbox name=hq_days_nolimit value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['q_days'] == 0 && $_smarty_tpl->tpl_vars['type']->value['id'] != 0) {?>checked<?php }?> onclick="checkb()"> without time limit</span> </td> </tr> <tr><td style="background: #fff" colspan=2>&nbsp;</t></tr> <tr> <th class=title colspan=2><a class=hlp data-hlp="Type 0 in the max amount field if you do not want to limit your users' maximal deposit amount.">Specify the Investment Package Earning Rates:</a> <?php if ($_smarty_tpl->tpl_vars['fiats']->value) {?><input type=button class="sbmt hlp" onclick="fiat_rates()" data-hlp="asd" value="Set Auto Rates"><?php }?> </th> </tr> <tr> <td colspan=2>  <style> #hyip_rates input.num[type=text] {text-align:right !important;} #hyip_rates td {text-align:center !important;} #hyip_rates td {border-bottom:solid 1px #FFC982;} .fiat_rate {margin: 1px 0;} .fiat_rates {text-align: right;} </style>  <?php if ($_smarty_tpl->tpl_vars['fiats']->value) {?>  <style> .rate_percent, .rate_name {font-weight: bold;font-size:13px;} </style>  <?php }?> <table class="list" id="hyip_rates"> <tr> <th></th> <th>Name</th> <th>Min Amount (<?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
)</th> <th>Max Amount (<?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
)</th> <th>Percent</th> <?php if ($_smarty_tpl->tpl_vars['use_deposit_bonus']->value) {?> <th>Bonus (%)</th> <?php } elseif ($_smarty_tpl->tpl_vars['use_pereodic_earning_bonus']->value) {?> <th>Pereodic Bonus (%)</th> <?php }?> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['rates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->value) {
$_smarty_tpl->tpl_vars['rate']->_loop = true;
$foreach_rate_Sav = $_smarty_tpl->tpl_vars['rate'];
?> <tr> <td><input type=button value="-" onclick="fieldRemove(this);" class="btn-sm sbmt"></td> <td><input type=text name="rate_amount_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="inpts rate_name" size=10></td> <td> <?php if ($_smarty_tpl->tpl_vars['fiats']->value) {?> <div class="fiat_rates"> <?php
$_from = $_smarty_tpl->tpl_vars['fiats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <div class=fiat_rate> <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?><b><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</b><?php } else {
echo $_smarty_tpl->tpl_vars['i']->value;
}?>: <input type=text name="rate_min_amount_fiat[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][]" data-rate="<?php echo $_smarty_tpl->tpl_vars['f']->value['srate'];?>
" <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?>data-main=1<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['fiat_limits']->value[$_smarty_tpl->tpl_vars['rate']->value['ext_id']][$_smarty_tpl->tpl_vars['i']->value]['min'];?>
" class="inpts nosize num <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?>rate_min_amount<?php }?>" size=10> <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?> <a href="javascript:" onclick="fiat_rate_block_btn(this);" class="btn-sm sbmt fiat_rate_block_btn">&dtrif;</a> <?php } else { ?> <a href="javascript:" onclick="fiat_rate_field(this);" class="btn-sm sbmt fiat_rate_field_btn">&ltrif;</a> <?php }?> </div> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> </div> <?php } else { ?> <input type=text name="rate_min_amount[]" value="<?php echo $_smarty_tpl->tpl_vars['rate']->value['min_deposit'];?>
" class="inpts num rate_min_amount" size=5> <?php }?> </td> <td> <?php if ($_smarty_tpl->tpl_vars['fiats']->value) {?> <div class="fiat_rates"> <?php
$_from = $_smarty_tpl->tpl_vars['fiats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <div class=fiat_rate> <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?><b><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</b><?php } else {
echo $_smarty_tpl->tpl_vars['i']->value;
}?>: <input type=text name="rate_max_amount_fiat[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][]" data-rate="<?php echo $_smarty_tpl->tpl_vars['f']->value['srate'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fiat_limits']->value[$_smarty_tpl->tpl_vars['rate']->value['ext_id']][$_smarty_tpl->tpl_vars['i']->value]['max'];?>
" class="inpts nosize num <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?>rate_max_amount<?php }?>" size=10> <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?> <a href="javascript:" onclick="fiat_rate_block_btn(this);" class="btn-sm sbmt fiat_rate_block_btn">&dtrif;</a> <?php } else { ?> <a href="javascript:" onclick="fiat_rate_field(this);" class="btn-sm sbmt fiat_rate_field_btn">&ltrif;</a> <?php }?> </div> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> </div> <?php } else { ?> <input type=text name="rate_max_amount[]" value="<?php if ($_smarty_tpl->tpl_vars['rate']->value['max_deposit'] == 0) {
} else {
echo $_smarty_tpl->tpl_vars['rate']->value['max_deposit'];
}?>" class="inpts num rate_max_amount"> <?php }?> </td> <td><input type=text name="rate_percent[]" value="<?php echo $_smarty_tpl->tpl_vars['rate']->value['percent'];?>
" class="inpts rate_percent num" size=5></td> <?php if ($_smarty_tpl->tpl_vars['use_deposit_bonus']->value) {?> <td><input type=text name="rate_bonus_percent[]" value="<?php echo $_smarty_tpl->tpl_vars['rate']->value['bonus_percent'];?>
" class="inpts num" size=5></td> <?php } elseif ($_smarty_tpl->tpl_vars['use_pereodic_earning_bonus']->value) {?> <td><input type=text name="rate_periodic_bonus_percent[]" value="<?php echo $_smarty_tpl->tpl_vars['rate']->value['bonus_percent'];?>
" class="inpts num" size=5></td> <?php }?> </tr> <?php
$_smarty_tpl->tpl_vars['rate'] = $foreach_rate_Sav;
}
?> <tr id="rfield_last"> <?php $_smarty_tpl->tpl_vars['rates_colspan'] = new Smarty_Variable(5, null, 0);?> <?php if ($_smarty_tpl->tpl_vars['use_deposit_bonus']->value) {
$_smarty_tpl->tpl_vars['rates_colspan'] = new Smarty_Variable($_smarty_tpl->tpl_vars['rates_colspan']->value+1, null, 0);?> <?php } elseif ($_smarty_tpl->tpl_vars['use_pereodic_earning_bonus']->value) {
$_smarty_tpl->tpl_vars['rates_cs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['rates_colspan']->value+1, null, 0);?> <?php }?> <th colspan=<?php echo $_smarty_tpl->tpl_vars['rates_colspan']->value;?>
><input type=button value="+" style="width:100px;font-weight:bold;" onclick="fieldAdd()" class="btn-sm sbmt"></th> </tr> <tr id="rfield_tpl" style="display:none"> <td><input type=button value="-" onclick="fieldRemove(this);" class="btn-sm sbmt"></td> <td><input type=text name="rate_amount_name[]" value="" class="inpts rate_name" size=10></td> <td> <?php if ($_smarty_tpl->tpl_vars['fiats']->value) {?> <div class="fiat_rates"> <?php
$_from = $_smarty_tpl->tpl_vars['fiats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <div class=fiat_rate> <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?><b><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</b><?php } else {
echo $_smarty_tpl->tpl_vars['i']->value;
}?>: <input type=text name="rate_min_amount_fiat[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][]" data-rate="<?php echo $_smarty_tpl->tpl_vars['f']->value['srate'];?>
" value="" class="inpts nosize num <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?>rate_min_amount<?php }?>" size=10> <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?> <a href="javascript:" onclick="fiat_rate_block_btn(this);" class="btn-sm sbmt fiat_rate_block_btn">&dtrif;</a> <?php } else { ?> <a href="javascript:" onclick="fiat_rate_field(this);" class="btn-sm sbmt fiat_rate_field_btn">&ltrif;</a> <?php }?> </div> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> </div> <?php } else { ?> <input type=text name="rate_min_amount[]" value="" class="inpts num rate_min_amount"> <?php }?> </td> <td> <?php if ($_smarty_tpl->tpl_vars['fiats']->value) {?> <div class="fiat_rates"> <?php
$_from = $_smarty_tpl->tpl_vars['fiats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <div class=fiat_rate> <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?><b><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</b><?php } else {
echo $_smarty_tpl->tpl_vars['i']->value;
}?>: <input type=text name="rate_max_amount_fiat[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][]" data-rate="<?php echo $_smarty_tpl->tpl_vars['f']->value['srate'];?>
" value="" class="inpts nosize num <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?>rate_max_amount<?php }?>" size=10> <?php if ($_smarty_tpl->tpl_vars['f']->value['main']) {?> <a href="javascript:" onclick="fiat_rate_block_btn(this);" class="btn-sm sbmt fiat_rate_block_btn">&dtrif;</a> <?php } else { ?> <a href="javascript:" onclick="fiat_rate_field(this);" class="btn-sm sbmt fiat_rate_field_btn">&ltrif;</a> <?php }?> </div> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> </div> <?php } else { ?> <input type=text name="rate_max_amount[]" value="" class="inpts num rate_max_amount"> <?php }?> </td> <td><input type=text name="rate_percent[]" value="" class="inpts rate_percent num" size=5></td> <?php if ($_smarty_tpl->tpl_vars['use_deposit_bonus']->value) {?> <td><input type=text name="rate_bonus_percent[]" value="" class="inpts num" size=5></td> <?php } elseif ($_smarty_tpl->tpl_vars['use_pereodic_earning_bonus']->value) {?> <td><input type=text name="rate_periodic_bonus_percent[]" value="" class="inpts num" size=5></td> <?php }?> </tr>  <?php echo '<script'; ?>
> function fieldAdd() { var hr = document.getElementById("hyip_rates"); var rn = hr.getElementsByClassName("rate_name"); var tpl1 = document.getElementById("rfield_tpl"); tpl = tpl1.cloneNode(true); tpl.getElementsByClassName("rate_name")[0].value = "Plan " + (rn.length); var lst = document.getElementById("rfield_last"); var prt = lst.parentNode; tpl.style.display = "table-row"; tpl.id = ""; prt.insertBefore(tpl, lst); } function fieldRemove(o) { var tr = o.parentNode.parentNode; var bd = tr.parentNode; bd.removeChild(tr); } <?php echo '</script'; ?>
>  </table> </td> </tr> <tr><td style="background:#fff;" colspan=2>&nbsp;</td></tr>  <tr> <th><a data-hlp="Define wether return the principal to user balance once the package is finished or not" class=hlp>Return Principal:</a></th> <td> <select name=hreturn_profit class="inpts nosize" onchange="checkrd();"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['type']->value['return_profit'] == 0) {?>selected<?php }?>>Do not Return Pricipal</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['return_profit'] == 1) {?>selected<?php }?>>Return Pricipal</option> </select> <span id="return_profit_percent">and <a data-hlp="Hold some percent of deposit princial and return principal partially" class=hlp>hold</a> <input type=text name="hreturn_profit_percent" value="<?php echo $_smarty_tpl->tpl_vars['type']->value['return_profit_percent'];?>
" class="inpts nosize" size=3>%</span>  </td> </tr> <tr> <th>Description:</th> <td><textarea cols=80 rows=10 name=plan_description class=inpts><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['dsc'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th><a data-hlp="Edit earining history description from standard description (Ex: Earning from deposit $100.00 - 2 %) to your own" class=hlp>Earnings History Memo:</a></th> <td> <input type=text name=earning_decription value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['type']->value['earning_decription'])===null||$tmp==='' ? "Earning from deposit #deposit_amount# - #percent# %" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" maxsize=255 class=inpts> <small>Available variables: #deposit_amount#, #percent#, #package_name#</small> </td> </tr>  <?php echo $_smarty_tpl->getSubTemplate ("my:edit_plan_compound_settings_new", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <tr id=tr_release0><th class=title colspan=2>Principal Release Settings</th></tr> <tr id=tr_release1> <th><a data-hlp="Allow users to release deposit principal to user account and withdraw it. You can define a fee for this transaction and minimal deposit duration" class=hlp>Principal Release:</a></th> <td> <select name=withdraw_principal onchange="checkc()" class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['type']->value['withdraw_principal'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['withdraw_principal'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr> <tr id=tr_release2> <th><a data-hlp="Toggle wether user able to release deposit partially or full amount only" class=hlp>Principal Release Full Amount only:</a></th> <td> <select name=withdraw_principal_full class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['type']->value['data']['withdraw_principal_full'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['data']['withdraw_principal_full'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr>  <tr id=tr_release3> <th><a data-hlp="Start duration is 0. To deny principal withdraw set 100% fee for duration." class=hlp>Principal Release Fees:</a></th> <td> <table class=form> <tr> <th>Deposit Duration (days):</th> <td> <?php
$_from = $_smarty_tpl->tpl_vars['withdraw_principal_range']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['wpr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['wpr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['wpr']->value) {
$_smarty_tpl->tpl_vars['wpr']->_loop = true;
$foreach_wpr_Sav = $_smarty_tpl->tpl_vars['wpr'];
?> <input type=input name=withdraw_principal_duration<?php echo $_smarty_tpl->tpl_vars['wpr']->value['i'];?>
 value="<?php echo $_smarty_tpl->tpl_vars['wpr']->value['duration'];?>
" class="inpts nosize" size=4> <?php
$_smarty_tpl->tpl_vars['wpr'] = $foreach_wpr_Sav;
}
?> </td> </tr> <tr> <th>Principal Release Fee (%):</td> <td> <?php
$_from = $_smarty_tpl->tpl_vars['withdraw_principal_range']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['wpr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['wpr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['wpr']->value) {
$_smarty_tpl->tpl_vars['wpr']->_loop = true;
$foreach_wpr_Sav = $_smarty_tpl->tpl_vars['wpr'];
?> <input type=input name=withdraw_principal_percent<?php echo $_smarty_tpl->tpl_vars['wpr']->value['i'];?>
 value="<?php echo $_smarty_tpl->tpl_vars['wpr']->value['percent'];?>
" class="inpts nosize" size=4> <?php
$_smarty_tpl->tpl_vars['wpr'] = $foreach_wpr_Sav;
}
?> </td> </tr>  </table> <small>Start duration is 0. To deny principal withdraw set 100% fee for duration.</small> </td> </tr>  <tr id=tr_release4> <th>Maximal Principal Release Period:</th> <td><input type=input name=withdraw_principal_duration_max value="<?php echo $_smarty_tpl->tpl_vars['type']->value['withdraw_principal_duration_max'];?>
" class="inpts nosize"> days from deposit start <small>(set 0 to skip limit)</small></td> </tr> <tr><td colspan=2></td></tr>  <tr id="tr_work_week"> <th><a data-hlp="Earnings will crdit on user accounts on work days (Mon-Fri) only" class=hlp>Work days earnings only<br>(Mon-Fri):</a></th> <td colspan=2> <select name=work_week class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['type']->value['work_week'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['work_week'] == 1) {?>selected<?php }?>>Enable</option> </select>  </td> </tr> <?php if ($_smarty_tpl->tpl_vars['other_packages']->value) {?> <tr> <th><a data-hlp="Administrator can select a parent package. Then users should deposit to parent package before depositing to this one" class=hlp>Require "parent" Package Deposit:</a></th> <td> <!--input type=checkbox name=parentch value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['parent'] != 0) {?>checked<?php }?>><br--> 
 <select name=parent class=inpts> <option value=0>Disable</option> <?php
$_from = $_smarty_tpl->tpl_vars['other_packages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?> <option value="<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value['parent'] == $_smarty_tpl->tpl_vars['package']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
 <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?> </select> </td> </tr> <?php }?>  <tr id="tr_hold_earnigs"> <th>Hold earnings on account some days after payout:</th> <td> <input type=text name=hold value="<?php echo $_smarty_tpl->tpl_vars['type']->value['hold'];?>
" class="inpts nosize" size=5> days <small>(set 0 to disable this feature)</small> </td> </tr> <tr id="tr_delay_earnigs"> <th>Delay earning for some days since deposit:</th> <td> <input type=text name=delay value="<?php echo $_smarty_tpl->tpl_vars['type']->value['delay'];?>
" class="inpts nosize" size=5 onchange="CheckCompound();"> days <small>(set 0 to disable this feature)</small> </td> </tr> <tr> <th>Limit User Active Deposits Number:</th> <td colspan=2> <input type=text name=deposits_limit_num value="<?php echo $_smarty_tpl->tpl_vars['type']->value['deposits_limit_num'];?>
" class="inpts nosize" size=5> deposits (per user) <small>(set 0 to skip)</small> </td> </tr> <tr> <th>Limit User Active Deposits Amount:</th> <td> <?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
<input type=text name=active_deposits_limit_amount value="<?php echo amount_smarty_format($_smarty_tpl->tpl_vars['type']->value['data']['active_deposits_limit_amount']);?>
" class="inpts nosize" size=10> (per user) <small>(set 0 to skip)</small> </td> </tr>  <tr> <th>Deposit Source Limits:</th> <td> <input type=checkbox name=allow_internal_deps value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['allow_internal_deps'] == 1 || $_smarty_tpl->tpl_vars['type']->value['id'] == 0) {?>checked<?php }?>> Accept deposits from account balance<br> <input type=checkbox name=allow_external_deps value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['allow_external_deps'] == 1 || $_smarty_tpl->tpl_vars['type']->value['id'] == 0) {?>checked<?php }?>> Accept deposits from payment processings </td> </tr> </table> <br>  <?php echo '<script'; ?>
 language=javascript> function CheckDailyPlan() { if (document.nform.hperiod[document.nform.hperiod.selectedIndex].value == "d") { document.nform.work_week.disabled = false; } else if (document.nform.hperiod[document.nform.hperiod.selectedIndex].value == "h" && document.nform.hq_days.value >= 24*7) { document.nform.work_week.disabled = false; } else { document.nform.work_week.disabled = true; } } function checkb(flag) { var frm = document.nform; var flg = frm.hq_days_nolimit.checked; frm.hq_days.disabled = flg; frm.hreturn_profit.disabled = flg; frm.hreturn_profit_percent.disabled = flg; if (flg) { document.getElementById("duration_with_end").style.display = "none"; document.getElementById("duration_divider").style.display = "none"; for (i = 0;i<frm.hperiod.options.length;i++) { if (frm.hperiod.options[i].value.substr(0,3) == "end") { if (frm.hperiod.selectedIndex == i) frm.hperiod.selectedIndex = 0; frm.hperiod.options[i] = null; i--; } } } else { document.getElementById("duration_with_end").style.display = ""; document.getElementById("duration_divider").style.display = ""; i = frm.hperiod.options.length; if (frm.hperiod.options[i-1].value != "end") { frm.hperiod.options[i] = new Option("After the specifeid Hours", "endh"); frm.hperiod.options[i+1] = new Option("After the specifeid Days", "end"); } } change_days_hours_label(); // if (!flag) { }
 } function checkc() { var show_release = 0; var display_type = "none"; if (document.nform.withdraw_principal.selectedIndex == 1) { show_release = 1; display_type = "table-row"; } document.getElementById("tr_release2").style.display = display_type; document.getElementById("tr_release3").style.display = display_type; document.getElementById("tr_release4").style.display = display_type; for (i = 0; i < 4; i++) { document.nform["withdraw_principal_percent"+i].disabled = (show_release) ? false : true; document.nform["withdraw_principal_duration"+i].disabled = (show_release) ? false : true; } document.nform.withdraw_principal_duration_max.disabled = (show_release) ? false : true; document.nform.withdraw_principal_full.disabled = (show_release) ? false : true; } function checkrd() { var sts = document.nform.hreturn_profit.selectedIndex == 1 ? false : true; document.getElementById("return_profit_percent").style.display = sts ? "none" : ""; document.nform.hreturn_profit_percent.disabled = sts; if (document.nform.compound_return) { if (document.nform.use_compound.selectedIndex == 0) { sts = false; } document.getElementById("tr_compouding4").style.display = sts ? "" : "none"; }  } checkrd();  <?php echo '</script'; ?>
> <br> <input type=hidden name=a value="programs"> <input type=hidden name=action value="edit"> <input type=hidden name=do value="save"> <center> <input type=submit value="Save" class="sbmt btn btn-success"> </center> </form> <?php }
}
?>