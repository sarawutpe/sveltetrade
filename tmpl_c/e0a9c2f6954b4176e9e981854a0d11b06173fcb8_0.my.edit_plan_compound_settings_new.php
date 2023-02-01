<?php /* Smarty version 3.1.27, created on 2023-02-01 09:42:02
         compiled from "my:edit_plan_compound_settings_new" */ ?>
<?php
/*%%SmartyHeaderCode:41231590063da25dadc8044_79493603%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0a9c2f6954b4176e9e981854a0d11b06173fcb8' => 
    array (
      0 => 'my:edit_plan_compound_settings_new',
      1 => 1675240922,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '41231590063da25dadc8044_79493603',
  'variables' => 
  array (
    'type' => 0,
    'hide_Return_compounded_amount_on_deposit_end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63da25dadcd798_34299317',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63da25dadcd798_34299317')) {
function content_63da25dadcd798_34299317 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '41231590063da25dadc8044_79493603';
?>
 <tr id=tr_compouding0> <th class=title colspan=2>Compounding Settings</th> </tr> <tr id=tr_compouding1> <th><a data-hlp="Compounding is the ability of an asset to generate earnings, which are then reinvested or remain invested with the goal of generating their own earnings. In other words, compounding refers to generating earnings from previous earnings." class=hlp>Compounding:</a></th> <td> <select name=use_compound class=inpts onchange="CheckCompound();"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['type']->value['use_compound'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['use_compound'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr> <tr id=tr_compouding2> <th><a data-hlp="Allow compounding for deposits in this limits only. If deposit amount is too high coumpound will grouw dpeosit too fast." class=hlp>Compounding Deposit Amount Limits:</a></th> <td><nobr>min: <?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
<input type=input name=compound_min_deposit value="<?php echo amount_smarty_format($_smarty_tpl->tpl_vars['type']->value['compound_min_deposit']);?>
" class="inpts nosize" size=6> max: <?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
<input type=input name=compound_max_deposit value="<?php echo amount_smarty_format($_smarty_tpl->tpl_vars['type']->value['compound_max_deposit']);?>
" class="inpts nosize" size=6> <small>set 0 to skip</small></td> </tr> <tr id=tr_compouding3> <th><a data-hlp="You can limit available earning reinvestment percents to limit deposit amount grows too fast." class=hlp>Compounding Percent Limits:</a></th> <td><input type=input name=compound_percents value="<?php echo $_smarty_tpl->tpl_vars['type']->value['compound_percents'];?>
" class="inpts nosize" size=10> <small>ex: 0-50,70,100</small></td> </tr> <?php if (!$_smarty_tpl->tpl_vars['hide_Return_compounded_amount_on_deposit_end']->value) {?> <tr id=tr_compouding4> <th><a data-hlp="If plan does not return principal you can allow return compounded earnings" class=hlp>Return Compounded Amount on Deposit End:</a></th> <td> <select name=compound_return class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['type']->value['compound_return'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['compound_return'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr> <?php }?>  <?php echo '<script'; ?>
> function CheckCompound() { var e = document.getElementById("hperiod"); var period_str = e.options[e.selectedIndex].value; var show_compound = 0; if (document.nform.use_compound.selectedIndex == 1) { show_compound = 1; } if ((period_str == "end")||(period_str == "endh")) { show_compound = 0; document.getElementById("tr_compouding0").style.display = "none"; document.getElementById("tr_compouding1").style.display = "none"; document.getElementById("tr_delay_earnigs").style.display = "none"; } else { document.getElementById("tr_compouding0").style.display = "table-row"; document.getElementById("tr_compouding1").style.display = "table-row"; document.getElementById("tr_delay_earnigs").style.display = "table-row"; } if (!show_compound) { // document.nform.use_compound.disabled = true; 
 document.getElementById("tr_compouding2").style.display = "none"; document.getElementById("tr_compouding3").style.display = "none";  <?php if (!$_smarty_tpl->tpl_vars['hide_Return_compounded_amount_on_deposit_end']->value) {?> document.nform.compound_return.disabled = true; document.getElementById("tr_compouding4").style.display = "none"; <?php }?>  document.getElementById("calc_compound1").style.display = "none"; document.getElementById("calc_compound2").style.display = "none"; } else { // document.nform.use_compound.disabled = false; 
 document.getElementById("tr_compouding2").style.display = "table-row"; document.getElementById("tr_compouding3").style.display = "table-row";  <?php if (!$_smarty_tpl->tpl_vars['hide_Return_compounded_amount_on_deposit_end']->value) {?> document.nform.compound_return.disabled = false; if (document.nform.hreturn_profit.selectedIndex == 1) { document.getElementById("tr_compouding4").style.display = "none"; } else { document.getElementById("tr_compouding4").style.display = "table-row"; } <?php }?>  document.getElementById("calc_compound1").style.display = ""; document.getElementById("calc_compound2").style.display = ""; } CheckDailyPlan(); } //CheckCompound(); 
<?php echo '</script'; ?>
> <?php }
}
?>