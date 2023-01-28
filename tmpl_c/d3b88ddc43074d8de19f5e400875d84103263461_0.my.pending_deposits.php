<?php /* Smarty version 3.1.27, created on 2023-01-28 17:23:32
         compiled from "my:pending_deposits" */ ?>
<?php
/*%%SmartyHeaderCode:46122573563d54c044ccdb0_83918582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b88ddc43074d8de19f5e400875d84103263461' => 
    array (
      0 => 'my:pending_deposits',
      1 => 1674923012,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '46122573563d54c044ccdb0_83918582',
  'variables' => 
  array (
    'frm' => 0,
    'deposits' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d54c044fb841_88605417',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d54c044fb841_88605417')) {
function content_63d54c044fb841_88605417 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '46122573563d54c044ccdb0_83918582';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Pending Deposits:</h3> <form method=post name=nform> <input type=hidden name=a value=pending_deposits> <table class=form> <tr> <td>Search: <input type="text" name=q value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['q'], ENT_QUOTES, 'UTF-8', true);?>
" class="inpts nosize" style="width:300px"></td> <td style="text-align:right"> <select name=type class="inpts nosize" onchange="document.nform.submit()"> <option value="new">New</option> <option value="problem" <?php if ($_smarty_tpl->tpl_vars['frm']->value['type'] == "problem") {?>selected<?php }?>>Problem</option> <option value="processed" <?php if ($_smarty_tpl->tpl_vars['frm']->value['type'] == "processed") {?>selected<?php }?>>Processed</option> </select> <input type=submit value="Go" class=sbmt> </td> </tr> </table> </form> <br> <table class=list> <tr> <th>User</th> <th>Date</th> <th>Plan</th> <th>Amount</th> <th>Fields</th> <th>P.S.</th> <th>-</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['deposits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</b><br><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['nameofuser'], ENT_QUOTES, 'UTF-8', true);?>
</small></td> <td align=center><?php echo $_smarty_tpl->tpl_vars['d']->value['fdate'];?>
</td> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['type_name'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td align=center><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['amount'],$_smarty_tpl->tpl_vars['d']->value['ec']);?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['d']->value['fields'];?>
</td> <td align=center><img src="images/<?php echo $_smarty_tpl->tpl_vars['d']->value['ec'];?>
.gif" height=17 hspace=1 vspace=1></td> <td align=center><a href=?a=pending_deposits&action=details&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 class="sbmt btn-sm btn-success">details</a></td> </tr> <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
if (!$_smarty_tpl->tpl_vars['d']->_loop) {
?> <tr><td colspan=7>No records found</td></tr> <?php
}
?> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>