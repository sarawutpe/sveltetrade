<?php /* Smarty version 3.1.27, created on 2022-08-07 13:26:52
         compiled from "C:\xampp\htdocs\tmpl\index_last_withdrawals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:78240940062efa17c6a4576_41546622%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5776fdab0991b4b7c4ec7223f773d69951c37be2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\index_last_withdrawals.tpl',
      1 => 1643026499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78240940062efa17c6a4576_41546622',
  'variables' => 
  array (
    'settings' => 0,
    'last_withdrawals' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efa17c6aabe0_85813228',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efa17c6aabe0_85813228')) {
function content_62efa17c6aabe0_85813228 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '78240940062efa17c6a4576_41546622';
if ($_smarty_tpl->tpl_vars['settings']->value['index_last_withdrawals']) {?>
<?php echo loaddata_smarty(array('name'=>"transactions",'limit'=>$_smarty_tpl->tpl_vars['settings']->value['index_last_withdrawals'],'type'=>"withdrawal",'var'=>"last_withdrawals"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['last_withdrawals']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=4 class=title>Last Withdrawals</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['last_withdrawals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<tr>
 <td class=menutxt><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.gif"></td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['date']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 </td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
</table>
<?php }

}
}
?>