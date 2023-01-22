<?php /* Smarty version 3.1.27, created on 2023-01-22 05:49:35
         compiled from "C:\xampp\htdocs\sveltetrade\tmpl\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:103732262363ccc05f3cf4c9_55985586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81852a0e3a9272a3d4906adb19b9cae3f935636b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sveltetrade\\tmpl\\login.tpl',
      1 => 1673671420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103732262363ccc05f3cf4c9_55985586',
  'variables' => 
  array (
    'frm' => 0,
    'bf_tries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63ccc05f40f432_23569064',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63ccc05f40f432_23569064')) {
function content_63ccc05f40f432_23569064 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\sveltetrade\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '103732262363ccc05f3cf4c9_55985586';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"Login"), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'invalid_login') {?>
  <div class="alert error">Your login or password or turing number is wrong. Please check this information.</div>
  <?php if ($_smarty_tpl->tpl_vars['bf_tries']->value['status']) {?>
    <?php if ($_smarty_tpl->tpl_vars['bf_tries']->value['left'] == 0) {?>
      <div class="alert error">You have already maximum times entered incorrectly login info. Your account is blocked. Check
        your
        email to active.</div>
    <?php } else { ?>
      <div class="alert error">You have <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['bf_tries']->value['left']);?>
</b> tries to entered correctly login information befor blocking.
      </div>
    <?php }?>
  <?php }?>
<?php }?>
<fluent-card class="card">
  <div class="flex justify-content-around flex-wrap">
    <form id="formRef" method="post" name="mainform">
      <input type="hidden" name="a" value="do_login">
      <input type="hidden" name="follow" value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
      <input type="hidden" name="follow_id" value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>
      <section>
        <div class="form-control">
          <span class="fontSize-xl fontWeight-regular mb-2">Login</span>
          <div class="field">
            <fluent-text-field class="w-100" id="username" type="text" name="username"
              value='<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
' appearance="outline" autofocus required>Username</fluent-text-field>
          </div>
          <div class="field">
            <fluent-text-field class="w-100" id="password" type="password" name="password" appearance="outline"
              required>Password
            </fluent-text-field>
          </div>

          <?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"login"), 0);
?>


          <div class="action">
            <fluent-button class="mb-2" type="submit" appearance="accent">Sign in</fluent-button>
            <div>
              <a class="fontSize-m" href="<?php echo smarty_modifier_myescape(encurl("?a=forgot_password"));?>
">Forgot password?</a>
            </div>
          </div>
        </div>
      </section>
    </form>
    <section>
      
      <div id="keyboard">
        <ul class="key-group">
          <li class="key symbol">
            <span class="on" style="display: block">`</span><span class="hide">~</span>
          </li>
          <li class="key symbol"><span class="on" style>1</span><span class="hide">!</span></li>
          <li class="key symbol"><span class="on" style>2</span><span class="hide">@</span></li>
          <li class="key symbol"><span class="on" style>3</span><span class="hide">#</span></li>
          <li class="key symbol"><span class="on" style>4</span><span class="hide">$</span></li>
          <li class="key symbol"><span class="on" style>5</span><span class="hide">%</span></li>
          <li class="key symbol"><span class="on" style>6</span><span class="hide">^</span></li>
          <li class="key symbol"><span class="on" style>7</span><span class="hide">&amp;</span></li>
          <li class="key symbol"><span class="on" style>8</span><span class="hide">*</span></li>
          <li class="key symbol"><span class="on" style>9</span><span class="hide"><?php echo smarty_modifier_myescape('(');?>
</span></li>
          <li class="key symbol"><span class="on" style>0</span><span class="hide"><?php echo smarty_modifier_myescape(')');?>
</span></li>
          <li class="key symbol"><span class="on" style>-</span><span class="hide">_</span></li>
          <li class="key symbol"><span class="on" style>=</span><span class="hide">+</span></li>
          <li id="delete" style="width: 53px">Delete</li>
          <li id="tab" style="width: 53px; clear: left">Tab</li>
          <li class="key letter">q</li>
          <li class="key letter">w</li>
          <li class="key letter">e</li>
          <li class="key letter">r</li>
          <li class="key letter">t</li>
          <li class="key letter">y</li>
          <li class="key letter">u</li>
          <li class="key letter">i</li>
          <li class="key letter">o</li>
          <li class="key letter">p</li>
          <li class="key symbol"><span class="on" style><?php echo smarty_modifier_myescape('[');?>
</span><span class="hide"><?php echo smarty_modifier_myescape('{');?>
</span></li>
          <li class="key symbol"><span class="on" style><?php echo smarty_modifier_myescape(']');?>
</span><span class="hide"><?php echo smarty_modifier_myescape('}');?>
</span></li>
          <li class="key symbol"><span class="on" style>\</span><span class="hide">|</span></li>
          <li id="caps" style="width: 66px; clear: left">Caps</li>
          <li class="key letter">a</li>
          <li class="key letter">s</li>
          <li class="key letter">d</li>
          <li class="key letter">f</li>
          <li class="key letter">g</li>
          <li class="key letter">h</li>
          <li class="key letter">j</li>
          <li class="key letter">k</li>
          <li class="key letter">l</li>
          <li class="key symbol"><span class="on" style>;</span><span class="hide">:</span></li>
<li class="key symbol"><span class="on" style>'</span><span class="hide">"</span></li>
          <li id="enter" style="width: 35px">Enter</li>
          <li id="l-shift" style="width: 82px; clear: left">Shift</li>
          <li class="key letter">z</li>
          <li class="key letter">x</li>
          <li class="key letter">c</li>
          <li class="key letter">v</li>
          <li class="key letter">b</li>
          <li class="key letter">n</li>
          <li class="key letter">m</li>
          <li class="key symbol"><span class="on" style>,</span><span class="hide">&lt;</span></li>
          <li class="key symbol"><span class="on" style>.</span><span class="hide">&gt;</span></li>
          <li class="key symbol"><span class="on" style>/</span><span class="hide">?</span></li>
          <li id="r-shift" style="width: 45px">Shift</li>
          <br />
          <li id="space" style="width: 99%">&nbsp;</li>
        </ul>
      </div>
      <!-- end keyboard -->
    </section>
  </div>

</fluent-card>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>