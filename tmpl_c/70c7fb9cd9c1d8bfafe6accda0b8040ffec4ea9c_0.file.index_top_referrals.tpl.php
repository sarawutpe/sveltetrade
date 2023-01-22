<?php /* Smarty version 3.1.27, created on 2022-08-07 13:26:52
         compiled from "C:\xampp\htdocs\tmpl\index_top_referrals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53010235262efa17c71fc66_75116546%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70c7fb9cd9c1d8bfafe6accda0b8040ffec4ea9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\index_top_referrals.tpl',
      1 => 1643026499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53010235262efa17c71fc66_75116546',
  'variables' => 
  array (
    'settings' => 0,
    'top_referrals' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efa17c724f73_94028220',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efa17c724f73_94028220')) {
function content_62efa17c724f73_94028220 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '53010235262efa17c71fc66_75116546';
echo loaddata_smarty(array('name'=>"top_referrals",'limit'=>$_smarty_tpl->tpl_vars['settings']->value['index_top_referrals'],'var'=>"top_referrals"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['top_referrals']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=2 class=title>Top Referrals</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['top_referrals']->value;
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
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
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