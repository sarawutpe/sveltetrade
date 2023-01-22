<?php /* Smarty version 3.1.27, created on 2022-09-11 11:44:58
         compiled from "C:\xampp\htdocs\tmpl\deposit.egold.status.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:725059690631dae1a628281_86508984%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b402c5ed0c3be7014ed75b26cd3fbe314eec367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\deposit.egold.status.tpl',
      1 => 1662827767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '725059690631dae1a628281_86508984',
  'variables' => 
  array (
    'process' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_631dae1a6453a2_10125075',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_631dae1a6453a2_10125075')) {
function content_631dae1a6453a2_10125075 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '725059690631dae1a628281_86508984';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<span class="fontSize-xl fontWeight-regular mb-3">Deposit Status</span>
<?php if ($_smarty_tpl->tpl_vars['process']->value == 'yes' || $_smarty_tpl->tpl_vars['frm']->value['m_status'] == 'success') {?>
<div class="alert success">We have received your deposit. Thank you!</div>
<?php } else { ?>
<div class="alert error">We have not received your deposit. Please try again.</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>