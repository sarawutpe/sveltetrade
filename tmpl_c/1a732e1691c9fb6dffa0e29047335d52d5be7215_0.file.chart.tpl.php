<?php /* Smarty version 3.1.27, created on 2023-01-22 10:17:57
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\chart.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28842178863ccff4560f538_05267637%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a732e1691c9fb6dffa0e29047335d52d5be7215' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\chart.tpl',
      1 => 1664292689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28842178863ccff4560f538_05267637',
  'variables' => 
  array (
    'trans' => 0,
    't' => 0,
    'tYear' => 0,
    'nowYear' => 0,
    'tMonth' => 0,
    'initialJan' => 0,
    'initialFeb' => 0,
    'initialMar' => 0,
    'initialApr' => 0,
    'initialMay' => 0,
    'initialJun' => 0,
    'initialJul' => 0,
    'initialAug' => 0,
    'initialSep' => 0,
    'initialOct' => 0,
    'initialNov' => 0,
    'initialDec' => 0,
    'nowMonth' => 0,
    'initialAmount' => 0,
    'initialDate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63ccff4564b653_71567673',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63ccff4564b653_71567673')) {
function content_63ccff4564b653_71567673 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '28842178863ccff4560f538_05267637';
?>
<div id="chart"></div>

<?php echo loaddata_smarty(array('name'=>"transactions",'type'=>"earning",'var'=>"trans"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['nowMonth'] = new Smarty_Variable(smarty_modifier_date_format(time(),"%m"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['nowYear'] = new Smarty_Variable(smarty_modifier_date_format(time(),"%y"), null, 0);?>

<?php
$_from = $_smarty_tpl->tpl_vars['trans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
  <?php $_smarty_tpl->tpl_vars['tMonth'] = new Smarty_Variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['t']->value['date'],"%m"), null, 0);?>
  <?php $_smarty_tpl->tpl_vars['tYear'] = new Smarty_Variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['t']->value['date'],"%y"), null, 0);?>
  <?php if ($_smarty_tpl->tpl_vars['tYear']->value == $_smarty_tpl->tpl_vars['nowYear']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['tMonth']->value == 1) {?>
      <?php $_smarty_tpl->tpl_vars["initialJan"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialJan']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 2) {?>
      <?php $_smarty_tpl->tpl_vars["initialFeb"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialFeb']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 3) {?>
      <?php $_smarty_tpl->tpl_vars["initialMar"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialMar']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 4) {?>
      <?php $_smarty_tpl->tpl_vars["initialApr"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialApr']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 5) {?>
      <?php $_smarty_tpl->tpl_vars["initialMay"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialMay']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 6) {?>
      <?php $_smarty_tpl->tpl_vars["initialJun"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialJun']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 7) {?>
      <?php $_smarty_tpl->tpl_vars["initialJul"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialJul']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 8) {?>
      <?php $_smarty_tpl->tpl_vars["initialAug"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialAug']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 9) {?>
      <?php $_smarty_tpl->tpl_vars["initialSep"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialSep']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 10) {?>
      <?php $_smarty_tpl->tpl_vars["initialOct"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialOct']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 11) {?>
      <?php $_smarty_tpl->tpl_vars["initialNov"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialNov']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tMonth']->value == 12) {?>
      <?php $_smarty_tpl->tpl_vars["initialDec"] = new Smarty_Variable($_smarty_tpl->tpl_vars['initialDec']->value+$_smarty_tpl->tpl_vars['t']->value['amount'], null, 0);?>
    <?php }?>
  <?php }?>
<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
if (!$_smarty_tpl->tpl_vars['t']->_loop) {
?>
  console.log("No transactions found")
<?php
}
?>

<?php if (1 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialJan']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Jan';?>
<?php }?>
<?php if (2 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialFeb']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Feb';?>
<?php }?>
<?php if (3 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialMar']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Apr';?>
<?php }?>
<?php if (4 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialApr']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Apr';?>
<?php }?>
<?php if (5 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialMay']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'May';?>
<?php }?>
<?php if (6 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialJun']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Jun';?>
<?php }?>

<?php if (7 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialJul']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Jul';?>
<?php }?>
<?php if (8 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialAug']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Aug';?>
<?php }?>
<?php if (9 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialSep']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Sep';?>
<?php }?>
<?php if (10 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialOct']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Oct';?>
<?php }?>
<?php if (11 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialNov']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Nov';?>
<?php }?>
<?php if (12 <= $_smarty_tpl->tpl_vars['nowMonth']->value) {?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialAmount', null, 0);
$_smarty_tpl->tpl_vars['initialAmount']->value[] = sprintf("%.2f",(($tmp = @$_smarty_tpl->tpl_vars['initialDec']->value)===null||$tmp==='' ? 0 : $tmp));?>
  <?php $_smarty_tpl->createLocalArrayVariable('initialDate', null, 0);
$_smarty_tpl->tpl_vars['initialDate']->value[] = 'Dec';?>
<?php }?>

<?php echo '<script'; ?>
>
  const amountData = <?php echo smarty_modifier_myescape(json_encode($_smarty_tpl->tpl_vars['initialAmount']->value));?>

  const dateData = <?php echo smarty_modifier_myescape(json_encode($_smarty_tpl->tpl_vars['initialDate']->value));?>

  var options = {
    series: [{
      name: "Earned",
      data: amountData
    }, ],
    chart: {
      height: 300,
      type: "area",
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
    },
    xaxis: {
      type: "category",
      categories: dateData
    },
  };
  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
<?php echo '</script'; ?>
><?php }
}
?>