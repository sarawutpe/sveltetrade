{include file="header.tpl" meta_title="Login"}

{if $frm.say eq 'invalid_login'}
  <div class="alert error">Your login or password or turing number is wrong. Please check this information.</div>
  {if $bf_tries.status}
    {if $bf_tries.left == 0}
      <div class="alert error">You have already maximum times entered incorrectly login info. Your account is blocked. Check
        your
        email to active.</div>
    {else}
      <div class="alert error">You have <b>{$bf_tries.left}</b> tries to entered correctly login information befor blocking.
      </div>
    {/if}
  {/if}
{/if}
<fluent-card class="card">
  <div class="flex justify-content-around flex-wrap">
    <form id="formRef" method="post" name="mainform">
      <input type="hidden" name="a" value="do_login">
      <input type="hidden" name="follow" value='{$frm.follow}'>
      <input type="hidden" name="follow_id" value='{$frm.follow_id}'>
      <section>
        <div class="form-control">
          <span class="fontSize-xl fontWeight-regular mb-2">Login</span>
          <div class="field">
            <fluent-text-field class="w-100" id="username" type="text" name="username"
              value='{$frm.username|escape:"html"}' appearance="outline" autofocus required>Username</fluent-text-field>
          </div>
          <div class="field">
            <fluent-text-field class="w-100" id="password" type="password" name="password" appearance="outline"
              required>Password
            </fluent-text-field>
          </div>

          {include file="captcha.tpl" action="login"}

          <div class="action">
            <fluent-button class="mb-2" type="submit" appearance="accent">Sign in</fluent-button>
            <div>
              <a class="fontSize-m" href="{"?a=forgot_password"|encurl}">Forgot password?</a>
            </div>
          </div>
        </div>
      </section>
    </form>
    <section>
      {* Keyboard *}
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
          <li class="key symbol"><span class="on" style>9</span><span class="hide">{'('}</span></li>
          <li class="key symbol"><span class="on" style>0</span><span class="hide">{')'}</span></li>
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
          <li class="key symbol"><span class="on" style>{'['}</span><span class="hide">{'{'}</span></li>
          <li class="key symbol"><span class="on" style>{']'}</span><span class="hide">{'}'}</span></li>
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

{include file="footer.tpl"}