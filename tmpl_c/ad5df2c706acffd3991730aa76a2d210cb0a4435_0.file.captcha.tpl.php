<?php /* Smarty version 3.1.27, created on 2023-01-22 05:41:58
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\captcha.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:173714732963ccbe96dea907_39049878%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5df2c706acffd3991730aa76a2d210cb0a4435' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\captcha.tpl',
      1 => 1673671390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173714732963ccbe96dea907_39049878',
  'variables' => 
  array (
    'action' => 0,
    'ti' => 0,
    'inpt_size' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63ccbe96df3968_24370405',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63ccbe96df3968_24370405')) {
function content_63ccbe96df3968_24370405 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '173714732963ccbe96dea907_39049878';
if ($_smarty_tpl->tpl_vars['ti']->value['check'][$_smarty_tpl->tpl_vars['action']->value]) {?>

  <?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'image') {?>
    <div class="field">
      <fluent-text-field class="w-100" id="validation_number" type="text" name="validation_number"
        size=<?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['inpt_size']->value)===null||$tmp==='' ? 30 : $tmp));?>
 required>
        <div class="flex justify-content-between">
          <div>Turing number</div>
          <div>
            <img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
">
          </div>
        </div>
      </fluent-text-field>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'recaptcha_v2') {?>
    <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
    <tr>
      <td class=menutxt colspan=2>
        <div class="g-recaptcha" data-sitekey="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
"></div>
      </td>
    </tr>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'recaptcha_v3') {?>
    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
"><?php echo '</script'; ?>
>
    
      <?php echo '<script'; ?>
>
        grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
', {action: '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['action']->value);?>
'}).then(function (token) {
        var rinput = document.getElementById('g-recaptcha');
        rinput.value = token;
        });
        });
      <?php echo '</script'; ?>
>
    
    <tr>
      <td class=menutxt colspan=2>
        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha">
      </td>
    </tr>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'solvemedia') {?>
    <tr>
      <td class=menutxt colspan=2>
        <!--script type="text/javascript" src="http://api.solvemedia.com/papi/challenge.script?k=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['solvemedia_recaptcha_c_key']);?>
"><?php echo '</script'; ?>
-->

        <?php echo '<script'; ?>
 type="text/javascript">
          var ACPuzzleOptions = {
            lang: 'en',
            size: '300x150'
          };
        <?php echo '</script'; ?>
>
        <ins class="acprecheck" id="acprecheck"></ins>
        <?php echo '<script'; ?>
 type="text/javascript"
          src="http://api.solvemedia.com/papi/challenge.precheck?k=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['solvemedia_recaptcha_c_key']);?>
"><?php echo '</script'; ?>
>
      </td>
    </tr>
  <?php }?>


<?php }
}
}
?>