<?php /* Smarty version 3.1.27, created on 2023-01-12 18:03:13
         compiled from "my:tell_friend" */ ?>
<?php
/*%%SmartyHeaderCode:130107289163c03d51b08ef0_65863158%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '095d6cd2bf21fc863b60c75dc4314c50401e8a0a' => 
    array (
      0 => 'my:tell_friend',
      1 => 1673542993,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '130107289163c03d51b08ef0_65863158',
  'variables' => 
  array (
    'frm' => 0,
    'setts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63c03d51b27dc8_51557618',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63c03d51b27dc8_51557618')) {
function content_63c03d51b27dc8_51557618 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '130107289163c03d51b08ef0_65863158';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Tell A Friend:</h3> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "saved") {?> <div class="alert alert-success">Settings have been updated.</div> <?php }?> <form method=post> <input type=hidden name=a value="tell_friend"> <input type=hidden name=action value="save"> <table class=form> <tr> <th>Enabled:</th> <td> <select name="enabled" class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['setts']->value['enabled'] == 0) {?>selected<?php }?>>No</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['setts']->value['enabled'] == 1) {?>selected<?php }?>>Yes</option> </select> </td> </tr> </table> <center> <button type=submit class="sbmt btn-sm btn-primary">update</button> </center> </form> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>