<?php /* Smarty version 3.1.27, created on 2022-08-07 13:04:43
         compiled from "C:\xampp\htdocs\tmpl\top10.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143065099162ef9c4b1a2942_98086578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2ed0d3c719cfa3d70121d3a0f376b09f49ac4a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\top10.tpl',
      1 => 1643026499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143065099162ef9c4b1a2942_98086578',
  'variables' => 
  array (
    'members' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62ef9c4b1d7051_30746004',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ef9c4b1d7051_30746004')) {
function content_62ef9c4b1d7051_30746004 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '143065099162ef9c4b1a2942_98086578';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo loaddata_smarty(array('name'=>"top_investors",'limit'=>10,'var'=>'members'),$_smarty_tpl);?>


<h3>Investors Top 10</h3><br>

<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td class=inheader>Username</td>
 <td class=inheader width=200>Reg. Date</td>
 <td class=inheader width=170>Deposit</td>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['members']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
<tr>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['m']->value['username']);?>
</b></td>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['m']->value['reg_date']);?>
</b></td>
 <td align=right><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['m']->value['amount']));?>
</b></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
if (!$_smarty_tpl->tpl_vars['m']->_loop) {
?>
<tr>
 <td colspan=3 align=center>No investors found</td>
</tr>
<?php
}
?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>