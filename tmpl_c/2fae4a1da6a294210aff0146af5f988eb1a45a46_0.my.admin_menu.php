<?php /* Smarty version 3.1.27, created on 2023-01-15 10:19:02
         compiled from "my:admin_menu" */ ?>
<?php
/*%%SmartyHeaderCode:35148503763c3c506865fd5_31103267%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fae4a1da6a294210aff0146af5f988eb1a45a46' => 
    array (
      0 => 'my:admin_menu',
      1 => 1673774342,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '35148503763c3c506865fd5_31103267',
  'variables' => 
  array (
    'admin_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63c3c506869305_07168677',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63c3c506869305_07168677')) {
function content_63c3c506869305_07168677 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '35148503763c3c506865fd5_31103267';
?>
 <table cellspacing=0 cellpadding=2 border=0 width="172"> <tr> <th colspan=2><img src=images/q.gif width=1 height=3></th> </tr> <tr> <th colspan=2 class=title>Menu</th> </tr>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['hyip']), 0);
?>
  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['members']), 0);
?>
   <tr> <td class=menutxt>&nbsp;</td> </tr> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['transactions']), 0);
?>
   <tr> <td class=menutxt>&nbsp;</td> </tr>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['settings']), 0);
?>
 <tr> <td class=menutxt>&nbsp;</td> </tr>   <tr> <td class=menutxt>&nbsp;</td> </tr>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_menu_section", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['admin_menu']->value['utils']), 0);
?>
 <tr> <td class=menutxt>&nbsp;</td> </tr> <tr> <td class=menutxt><a href=?a=logout>Logout</a></td> </tr> </table> <?php }
}
?>