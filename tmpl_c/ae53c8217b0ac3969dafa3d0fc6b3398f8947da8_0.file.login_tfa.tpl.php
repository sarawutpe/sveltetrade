<?php /* Smarty version 3.1.27, created on 2022-09-17 16:45:42
         compiled from "C:\xampp\htdocs\tmpl\login_tfa.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4749192586325dd96221f81_21548231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae53c8217b0ac3969dafa3d0fc6b3398f8947da8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tmpl\\login_tfa.tpl',
      1 => 1662897699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4749192586325dd96221f81_21548231',
  'variables' => 
  array (
    'say' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6325dd96262414_82814779',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6325dd96262414_82814779')) {
function content_6325dd96262414_82814779 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '4749192586325dd96221f81_21548231';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"2FA"), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_code') {?>
  <div class="alert error">You have entered invalid code.</div>
<?php }?>

<fluent-card class="card">
  <div class="flex justify-content-center">
    <form method="post" name="tfaform">
      <input type="hidden" name="a" value='do_login_tfa'>
      <input type="hidden" name="follow" value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
      <input type="hidden" name="follow_id" value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>
      <input type="hidden" name="time" value="">
      <div class="form-control">
        <span class="fontSize-xl fontWeight-regular mb-2">Two-Factor Authentication (2FA)</span>
        <div class="field">
          <fluent-text-field id="code" class="w-100" type="text" name="code" autofocus required>
            Enter code
          </fluent-text-field>
        </div>
        <div class="action">
          <fluent-button class="mr-2" type="submit" appearance="accent">Submit</fluent-button>
          <a href="<?php echo smarty_modifier_myescape(encurl("?a=logout"));?>
">
            <fluent-button class="mr-2" type="button" appearance="outline">Cancel
          </a>
          </fluent-button>
        </div>
    </form>
  </div>
</fluent-card>


  <?php echo '<script'; ?>
>
    document.tfaform.time.value = (new Date()).getTime();
  <?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>