<?php /* Smarty version 3.1.27, created on 2023-01-29 06:23:48
         compiled from "my:news_edit" */ ?>
<?php
/*%%SmartyHeaderCode:120745061563d602e4b9e483_07903119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7797130eab0897d18b5ea170d9f79f79d34d792e' => 
    array (
      0 => 'my:news_edit',
      1 => 1674969828,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '120745061563d602e4b9e483_07903119',
  'variables' => 
  array (
    'new' => 0,
    'frm' => 0,
    'languages' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d602e4bcb090_88781281',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d602e4bcb090_88781281')) {
function content_63d602e4bcb090_88781281 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '120745061563d602e4b9e483_07903119';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3><?php if ($_smarty_tpl->tpl_vars['new']->value['id']) {?>Edit<?php } else { ?>Add<?php }?> News:</h3> <form method=post> <input type=hidden name=a value=news> <input type=hidden name=action value=edit> <input type=hidden name=save value=1> <input type=hidden name=id value=<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
> <input type=hidden name=p value=<?php echo intval($_smarty_tpl->tpl_vars['frm']->value['p']);?>
> <table class="form"> <tr> <th>Select Language:</th> <td> <select name="lang" class=inpts> <?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?> <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['l']->value == $_smarty_tpl->tpl_vars['new']->value['lang']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value, ENT_QUOTES, 'UTF-8', true);?>
</option> <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?> </select> </td> </tr> <tr> <th>Title:</th> <td><input type="text" name="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=100></td> </tr> <tr> <th>Date:</th> <td><input type="text" name="date" value="<?php echo $_smarty_tpl->tpl_vars['new']->value['date'];?>
" class=inpts size=100></td> </tr> <tr> <th>Image URL:</th> <td><input type="text" name="image_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new']->value['image_url'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=100></td> </tr> <tr> <th>Small Text:</th> <td><textarea name=small_text class=inpts cols=100 rows=3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new']->value['small_text'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th>Full Text:</th> <td><textarea name=full_text class=inpts cols=100 rows=5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new']->value['full_text'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th></th> <td><input type=submit value="<?php if ($_smarty_tpl->tpl_vars['new']->value['id']) {?>Edit<?php } else { ?>Add<?php }?>" class=sbmt></td> </tr> </table> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>