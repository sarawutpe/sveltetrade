<?php /* Smarty version 3.1.27, created on 2022-09-11 11:22:40
         compiled from "C:\xampp\htdocs\tmpl\after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:559315616631da8e0191767_73218748%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7901fc5a4ed9d1e4241c3462456a00fe71cd621d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\after_registration.tpl',
      1 => 1662821734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '559315616631da8e0191767_73218748',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_631da8e01b5d67_95816807',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_631da8e01b5d67_95816807')) {
function content_631da8e01b5d67_95816807 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '559315616631da8e0191767_73218748';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Redirect"), 0);
?>

<meta http-equiv="refresh" content="3; url=<?php echo smarty_modifier_myescape(encurl("?a=login"));?>
" />
<div class="alert success">Registration completed</div>

<div class="flex">
  <span class="fontSize-mPlus mr-2">Please wait while redirecting...</span>
  <a class="fontSize-m" href="<?php echo smarty_modifier_myescape(encurl("?a=login"));?>
">Login</a>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>