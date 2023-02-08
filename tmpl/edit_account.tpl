          {include file="header.tpl" meta_title="Edit Account"}
          <span class="fontSize-xl fontWeight-regular mb-3">Settings</span>

          <form method="post" name="editform">
            <input type="hidden" name="a" value="edit_account">
            <input type="hidden" name="action" value="edit_account">
            <input type="hidden" name="say" value="">

            {if $frm.say eq 'changed'}
            <div class="alert success">Your account data has been updated successfully.</div>
            {/if}

            {if $errors}
            {if $errors.turing_image}<div class="alert error">Invalid turing image</div>{/if}
            {if $errors.invalid_transaction_code}<div class="alert error">You have provided invalid Current Transaction Code</div>{/if}
            {if $errors.tfa_code}<div class="alert error">Invalid 2FA code</div>{/if}
            {if $errors.no_fullname}<div class="alert error">Please enter your full name</div>{/if}
            {if $errors.ip_exists_in_database}<div class="alert error">Your IP already exists in our database. Sorry, but registration impossible</div>{/if}
            {if $errors.invalid_username}<div class="alert error">Please enter valid username! It should contains English letters and digits only.</div>{/if}
            {if $errors.username_too_short}<div class="alert error">Username should contains {$errors.username_too_short} charaters at least</div>{/if}
            {if $errors.username_exists}<div class="alert error">The Username is already taken. Please try another Username.</div>{/if}
            {if $errors.password_confirm}<div class="alert error">Please correcty confirm your password</div>{/if}
            {if $errors.password_too_small}<div class="alert error">The password you provided is too small, please enter at least {$errors.password_too_small} characters!</div>{/if} 
            {if $errors.invalid_email}<div class="alert error">Please valid email address</div>{/if} 
            {if $errors.email_confirm}<div class="alert error">Please correcty confirm your email address</div>{/if}
            {if $errors.email_exists}<div class="alert error">An account with this email is already exist</div>{/if}
            {if $errors.no_address}<div class="alert error">Please enter your address</div>{/if}
            {if $errors.no_city}<div class="alert error">Please enter your city</div>{/if}
            {if $errors.no_state}<div class="alert error">Please enter your state</div>{/if}
            {if $errors.no_zip}<div class="alert error">Please enter your zip</div>{/if}
            {if $errors.no_country}<div class="alert error">Please enter your country</div>{/if}
            {if $errors.transaction_code_confirm}<div class="alert error">Please correcty confirm your transaction code</div>{/if}
            {if $errors.transaction_code_too_small}<div class="alert error">The transaction code you provided is too small, please enter at least {$errors.transaction_code_too_small} characters!</div>{/if} 
            {if $errors.transaction_code_vs_password}<div class="alert error">The Transaction Code should not be equal to the Password you have defined</div>{/if}
            {if $errors.invalid_account_format}
            {foreach from=$errors.invalid_account_format item=err}
            <div class="alert error">{$err}</div>
            {/foreach}
            {/if}
            {/if}

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Account Name:</span>
              <span class="fontSize-m">{$userinfo.username}</span>
            </div>
            
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Registration date:</span>
              <span class="fontSize-m">{$userinfo.date_register}</span>
            </div>
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your Full Name:</span>
              <div>
              <fluent-text-field type="text" class="w-100" name="fullname" value="{$frm.fullname|default:$userinfo.name|escape:html}" required></fluent-text-field>
              </div>
            </div>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your Address:</span>
              <div>
                <fluent-text-field class="w-100" name="address" value="{$frm.address|default:$userinfo.address|escape:html}"></fluent-text-field>
              </div>
            </div>

            {if $settings.use_user_location}
              
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your City:</span>
              <div>
                <fluent-text-field class="w-100" name="city" value="{$frm.city|default:$userinfo.city|escape:html}"></fluent-text-field>
              </div>
            </div>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your State:</span>
              <div>
                <fluent-text-field class="w-100" name="state" value="{$frm.state|default:$userinfo.state|escape:html}"></fluent-text-field>
              </div>
            </div>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your Zip:</span>
              <div>
                <fluent-text-field class="w-100" name="zip" value="{$frm.zip|default:$userinfo.zip|escape:html}"></fluent-text-field>
              </div>
            </div>

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your Country:</span>
              <div>
                <fluent-combobox class="w-100 z-10" name="country" autocomplete="both" placeholder="Select..." position="below">
                {foreach from=$countries item=c}
                <fluent-option value="1" {if ($frm.country && $c.name == $frm.country) || (!$frm.country && $c.name == $userinfo.country)}selected{/if}>{$c.name|escape:html}</fluent-option>
                {/foreach}
                </fluent-combobox>
              </div>
            </div>

            {/if}

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">New Password:</span>
              <div>
                <fluent-text-field type="password" class="w-100" name="password" value=""></fluent-text-field>
              </div>
            </div>
             <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Retype Password:</span>
              <div>
                <fluent-text-field type="password" class="w-100" name="password2" value=""></fluent-text-field>
              </div>
            </div>

            {if $settings.use_transaction_code}
              {if $settings.use_transaction_code_edit_account != 1}
                {if $userinfo.transaction_code != ''}
                <div class="grid-container grid-column-2 fixed-height">
                  <span class="fontSize-m">Current Transaction Code:</span>
                  <div>
                    <fluent-text-field type="password" class="w-100" name="transaction_code_current" value=""></fluent-text-field>
                  </div>
                </div>
                {/if}
              {/if}
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">New Transaction Code:</span>
                <div>
                  <fluent-text-field type="password" class="w-100" name="transaction_code" value=""></fluent-text-field>
                </div>
              </div>
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">Retype Transaction Code:</span>
                <div>
                  <fluent-text-field type="password" class="w-100" name="transaction_code2" value=""></fluent-text-field>
                </div>
              </div>
            {/if}

            {foreach item=ps from=$pay_accounts}
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">Your {$ps.name} acc no:</span>
                <div>
                {if $settings.usercanchangeegoldacc == 0 && $ps.account != ''}
                {$ps.account|escape:html}
                {else}
                <fluent-text-field type="text" class="w-100" name="pay_account[{$ps.id}]" value="{$frm.pay_account[$ps.id]|default:$ps.account|escape:html}" data-validate="{$ps.validate.func}" data-validate-{$ps.validate.func}="{$ps.validate[$ps.validate.func]}" data-validate-notice="{$ps.validate.notification|escape:html}"></fluent-text-field>
                {/if}
                </div>
              </div>
            {/foreach}
  
            {foreach item=p from=$mpay_accounts}
              {foreach item=ps from=$p.accounts}
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">Your {$p.name} {$ps.name}:</span>
                <div>
                  {if $settings.usercanchangeegoldacc == 0 && $ps.value != ''}
                  {$ps.value|escape:html}
                  {else}
                  <fluent-text-field type="text" class="w-100" name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$frm.pay_account[$p.id][$ps.name]|default:$ps.value|escape:html}"></fluent-text-field>
                  {/if}
                </div>
              </div>
              <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">Retype Transaction Code:</span>
                <div>
                  <fluent-text-field type="password" class="w-100" name="transaction_code2" value=""></fluent-text-field>
                </div>
              </div>
              {/foreach}
            {/foreach}

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your E-mail address:</span>
              <div>
                {if $settings.usercanchangeemail == 1}
                <fluent-text-field type="text" class="w-100" name="email" value="{$frm.email|default:$userinfo.email|escape:html}" required></fluent-text-field>
                {else}
                {$userinfo.email|escape:html}
                {/if}
              </div>
            </div>

            {if $settings.use_rcb}
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Your RCB Percent:</span>
              <div>
                {if $userinfo.rcb_lock}{$userinfo.rcb}%
                {else}
                  <fluent-text-field type="text" class="w-100" name="rcb" value="{$frm.rcb|default:$userinfo.rcb|number_format:2}"></fluent-text-field>
                {/if}
              </div>
            </div>
            {/if}

            {if $userinfo.admin_auto_pay_earning == 1}
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Receive earnings directly to e-currency account</span>
              <div>
                <input type="checkbox" name="user_auto_pay_earning" value=1 {if $userinfo.user_auto_pay_earning == 1}checked{/if}>
              </div>
            </div>
            {/if}

            {if $settings.use_transaction_code_edit_account == 1}
            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m">Current Transaction Code:</span>
              <div>
                <fluent-text-field type="password" class="w-100" name="transaction_code_current" value=""></fluent-text-field>
              </div>
            </div>
            {/if}

            {if $userinfo.tfa_settings.edit_account}
            <div class="grid-container grid-column-2 fixed-height">
                <span class="fontSize-m">2FA Code:</span>
              <div>
                <fluent-text-field type="text" class="w-100" name="tfa_code"></fluent-text-field>
                <input type="hidden" name="tfa_time" id="tfa_time">
              </div>
            </div>
            {literal}
            <script language=javascript>
              document.getElementById('tfa_time').value = (new Date()).getTime();
            </script>
            {/literal}
            {/if}

            {include file="captcha.tpl" action="edit_account"}

            <div class="grid-container grid-column-2 fixed-height">
              <span class="fontSize-m"></span>
              <div class="action">
                <fluent-button type="submit" appearance="accent" class="sbmt">Save</fluent-button>
              </div>
            </div>

          </form>

          {include file="footer.tpl"}