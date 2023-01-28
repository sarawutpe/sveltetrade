<?php /* Smarty version 3.1.27, created on 2023-01-28 10:19:19
         compiled from "my:rates" */ ?>
<?php
/*%%SmartyHeaderCode:10568053863d4e8974a0687_77138703%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8869a59b558fb0f193a1466df597f043f276a22b' => 
    array (
      0 => 'my:rates',
      1 => 1674897559,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '10568053863d4e8974a0687_77138703',
  'variables' => 
  array (
    'plans' => 0,
    'line' => 0,
    'permits' => 0,
    'demo_version' => 0,
    'line1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d4e8974d9a75_14124536',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d4e8974d9a75_14124536')) {
function content_63d4e8974d9a75_14124536 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '10568053863d4e8974a0687_77138703';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Investment Programs:</h3>  <style> a.arrs { text-decoration: none; color: #000; font-size: 20px; } a.arrs:hover { color: #aaa; } </style>  <table class="list"> <tr> <th>Order</th> <th>Program Name</th> <th>Deposit</th> <th>Profit (%)</th> <th>Action</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['line'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['line']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['total'];
$foreach_line_Sav = $_smarty_tpl->tpl_vars['line'];
?>  <?php if (!$_smarty_tpl->tpl_vars['line']->value['already_printed']) {?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td style="text-align:center"> <?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['first'] : null)) {?> <a href="?a=programs&action=up&id=<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
&#csrf#" class=arrs>&utrif;</a> <?php }?> <br> <?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_rates_foreach']->value['last'] : null)) {?> <a href="?a=programs&action=down&id=<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
&#csrf#" class=arrs>&dtrif;</a> <?php }?> </td> <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</b> <?php if ($_smarty_tpl->tpl_vars['line']->value['status'] == "off") {?><span class="badge badge-danger">(inactive)</span><?php }
if ($_smarty_tpl->tpl_vars['line']->value['closed'] == 1) {?><span class="badge badge-warning">(closed)</span><?php }?></td> <td> <nobr>Limits: <?php echo $_smarty_tpl->tpl_vars['line']->value['deposit'];?>
</nobr><br> Total: &nbsp; <span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['line']->value['total_deposited_cnt'];?>
</span> <span class="badge badge-success"><?php echo amount_smarty_fiat(amount_smarty_format($_smarty_tpl->tpl_vars['line']->value['total_deposited']));?>
</span><br> Active: <span class="badge badge-danger"><?php echo number_format($_smarty_tpl->tpl_vars['line']->value['active_deposited_cnt']);?>
</span> <span class="badge badge-warning"><?php echo amount_smarty_fiat(amount_smarty_format($_smarty_tpl->tpl_vars['line']->value['active_deposited']));?>
</span> </td> <td><?php echo $_smarty_tpl->tpl_vars['line']->value['percent'];?>
</td> <td> <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <a href="?a=programs&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];
echo $_smarty_tpl->tpl_vars['line']->value['line_s'];?>
" class="sbmt btn-sm btn-success" style="margin-bottom:2px;">edit</a><br> <a href="?a=programs&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
&#csrf#" class="sbmt btn-sm btn-danger" style="margin-bottom:2px;" onclick="return confirm(' <?php if ($_smarty_tpl->tpl_vars['demo_version']->value && $_smarty_tpl->tpl_vars['line']->value['id'] < 3) {?> Demo version restriction!\nYou cannot delete this package!\n\n <?php } else { ?> Are you sure delete this package? All users deposits in this package will be lost! <?php }?> ')">delete</a> <?php }?> </td> </tr> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td colspan=5> <table cellspacing=0 cellpadding=2 border=0 width=66% align=right style="padding-bottom:20px;margin-right:60px;"> <?php
$_from = $_smarty_tpl->tpl_vars['line']->value['plans'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['line1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['line1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['line1']->value) {
$_smarty_tpl->tpl_vars['line1']->_loop = true;
$foreach_line1_Sav = $_smarty_tpl->tpl_vars['line1'];
?> <tr onMouseOver="bgColor='#FFECB0';" onMouseOut="bgColor='';"> <td nowrap width=120><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line1']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td align=right nowrap><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo amount_smarty_format($_smarty_tpl->tpl_vars['line1']->value['min_deposit']);?>
 - <?php if ($_smarty_tpl->tpl_vars['line1']->value['max_deposit'] == 0) {?>&infin;<?php } else {
echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo amount_smarty_format($_smarty_tpl->tpl_vars['line1']->value['max_deposit']);
}?> &nbsp; &nbsp; </td> <td align=right nowrap width=60><?php echo $_smarty_tpl->tpl_vars['line1']->value['percent'];?>
%</td> </tr> </tr> <?php
$_smarty_tpl->tpl_vars['line1'] = $foreach_line1_Sav;
}
?> </table> </td> </tr> <tr style="background:#fff"><td coslpan=5><br></td></tr> <?php }?> <?php
$_smarty_tpl->tpl_vars['line'] = $foreach_line_Sav;
}
if (!$_smarty_tpl->tpl_vars['line']->_loop) {
?> <tr> <td bgcolor=FFF9B3 colspan=4>No Packages available</td> </tr> <?php
}
?> </table> <br> <table cellspacing=0 cellpadding=0 border=0 width=100<?php echo '%>';?> <tr><td> <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <form method=get> <input type=hidden name=a value="programs"> <input type=hidden name=action value="edit"> <input type=submit value="Add a new Investment Package" class=sbmt size=15> </form> <?php }?> <?php }
}
?>