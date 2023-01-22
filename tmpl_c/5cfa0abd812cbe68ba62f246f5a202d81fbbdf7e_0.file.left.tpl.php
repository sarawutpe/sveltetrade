<?php /* Smarty version 3.1.27, created on 2022-08-07 13:26:52
         compiled from "C:\xampp\htdocs\tmpl\left.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:113111250262efa17c23b2c5_18082518%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cfa0abd812cbe68ba62f246f5a202d81fbbdf7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\left.tpl',
      1 => 1643026499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113111250262efa17c23b2c5_18082518',
  'variables' => 
  array (
    'frm' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62efa17c242233_59919518',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62efa17c242233_59919518')) {
function content_62efa17c242233_59919518 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '113111250262efa17c23b2c5_18082518';
?>
				   <!-- Image Table: Start -->

<?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] != 'login' && $_smarty_tpl->tpl_vars['frm']->value['a'] != 'login_tfa') {?>
<?php echo $_smarty_tpl->getSubTemplate ("login_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
				   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_stats_box']) {?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("stats_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
                                   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box']) {?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("info_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_add_funds.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_deposits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_withdrawals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_top_referrals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_top_investors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


					<!-- Stats Table: End -->

<?php }
}
?>