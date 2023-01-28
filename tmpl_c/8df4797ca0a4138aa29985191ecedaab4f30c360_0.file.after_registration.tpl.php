<?php /* Smarty version 3.1.27, created on 2023-01-28 16:27:01
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:102896826263d53ec5f40bc7_22781491%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df4797ca0a4138aa29985191ecedaab4f30c360' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\after_registration.tpl',
      1 => 1674919187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102896826263d53ec5f40bc7_22781491',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d53ec6020a42_83004405',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d53ec6020a42_83004405')) {
function content_63d53ec6020a42_83004405 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '102896826263d53ec5f40bc7_22781491';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Redirect"), 0);
?>

<meta http-equiv="refresh" content="2; url=<?php echo smarty_modifier_myescape(encurl("?a=login"));?>
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