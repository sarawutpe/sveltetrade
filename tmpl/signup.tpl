{include file="header.tpl" meta_title="Signup"}

{if $deny_registration}
  We are closed for new registrations now.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer.id && !$settings.get_rand_ref}
  You do not have a upline. Our system require a upline for each user.
{else}

  {literal}
  {/literal}

  {if $errors}
    {if $errors.turing_image}<div class="alert error">Invalid turing image</div>{/if}
    {* {if $errors.no_fullname}<div class="alert error">Please enter your full name</div>{/if} *}
    {if $errors.ip_exists_in_database}<div class="alert error">Your IP already exists in our database. Sorry, but
        registration
      impossible</div>{/if}
    {if $errors.invalid_username}<div class="alert error">Please enter valid username! It should contains English letters
        and
      digits only.</div>{/if}
    {if $errors.username_too_short}<div class="alert error">Username should contains {$errors.username_too_short} charaters
        at
      least</div>{/if}
    {if $errors.username_exists}<div class="alert error">The Username is already taken. Please try another Username.</div>
    {/if}
    {if $errors.no_password}<div class="alert error">Please define a password</div>{/if}
    {if $errors.password_confirm}<div class="alert error">Please confirm your password correctly</div>{/if}
    {if $errors.password_too_small}<div class="alert error">The password you provided is too small, please enter at least
      {$errors.password_too_small} characters!</div>{/if}
    {if $errors.invalid_email}<div class="alert error">Please valid email address</div>{/if}
    {if $errors.email_confirm}<div class="alert error">Please confirm your email address correctly</div>{/if}
    {if $errors.email_exists}<div class="alert error">An account with this email is already exist</div>{/if}
    {if $errors.no_address}<div class="alert error">Please enter your address</div>{/if}
    {if $errors.no_city}<div class="alert error">Please enter your city</div>{/if}
    {if $errors.no_state}<div class="alert error">Please enter your state</div>{/if}
    {if $errors.no_zip}<div class="alert error">Please enter your zip</div>{/if}
    {if $errors.no_country}<div class="alert error">Please enter your country</div>{/if}
    {if $errors.no_transaction_code}<div class="alert error">Please define a transaction code</div>{/if}
    {if $errors.transaction_code_confirm}<div class="alert error">Please correcty confirm your transaction code</div>{/if}
    {if $errors.transaction_code_too_small}<div class="alert error">The transaction code you provided is too small, please
        enter
      at least {$errors.transaction_code_too_small} characters!</div>{/if}
    {if $errors.transaction_code_vs_password}<div class="alert error">The Transaction Code should not be equal to the
        Password you
      have defined</div>{/if}
    {if $errors.no_agree}<div class="alert error">You have to agree with the Terms and Conditions!</div>{/if}
    {if $errors.invalid_account_format}
      {foreach from=$errors.invalid_account_format item=err}
        <div class="alert error">{$err}</div>
      {/foreach}
    {/if}
  {/if}
  <fluent-card class="card">
    <div class="flex justify-content-center">
      <form onsubmit="return checkform()" method="post" name="regform">
        <div class="form-control">
          <span class="fontSize-xl fontWeight-regular mb-2">Signup</span>
          <input type="hidden" name="a" value="signup">
          <input type="hidden" name="action" value="signup">
          <input type="hidden" name="fullname" value="{$frm.fullname|escape:html}">
          <div class="field">
            <fluent-text-field type="text" class="w-100" name="username" value="{$frm.username|escape:html}"
              appearance="outline" required>Username</fluent-text-field>
          </div>
          <div class="field">
            <fluent-text-field type="text" class="w-100" name="email" value="{$frm.email|escape:html}"
              appearance="outline" required>E-mail Address</fluent-text-field>
          </div>
          <div class="field">
            <fluent-text-field type="password" class="w-100" name="password" value="{$frm.password|escape:html}"
              appearance="outline" required>Password</fluent-text-field>
          </div>
          <div class="field">
            <fluent-text-field type="password" class="w-100" name="password2" value="{$frm.password2|escape:html}"
              appearance="outline" required>Retype Password</fluent-text-field>
          </div>
          <input type="hidden" name="email1" value="{$frm.email1|escape:html}">
          {include file="captcha.tpl" action="signup"}
          <div class="field">
            <fluent-checkbox onchange="hideDialog(false)" name="agree" value=1 {if $frm.agree}checked{/if}>I have read and agree to <b>Terms & Conditions</b></fluent-checkbox>
          </div>
          <div class="action">
            <fluent-button type="submit" appearance="accent">Signup</fluent-button>
          </div>
      </form>
      <!-- Dialog -->
      <fluent-dialog id="defaultDialog" class="dialog" hidden trap-focus modal>
        <div class="flex justify-content-between align-items-center px-3">
          <h2>Terms & Conditions</h2>
          <div onclick="handleAgree(false)" class="close-button">
            <i class="ms-Icon ms-Icon--StatusErrorFull"></i>
          </div>
        </div>
        <fluent-divider></fluent-divider>
        <div class="dialog-content">

          <div style="margin-bottom: 160px;">

            <span class="fontSize-l fontWeight-bold mb-2">General</span>
            <span class="fontSize-l mb-2">Opening accounts are for adults of legal age only.</span>
            <span class="fontSize-l mb-2">A person is allowed to open 1 account only.</span>
            <span class="fontSize-l mb-2">In case of mischievous and/or harmful actions against the service. Your account will be permanently terminated.</span>
          </div>
          <div class="flex justify-content-center px-3 pb-4">
            <fluent-button class="mr-4" onclick="handleAgree(true)" type="button" autofocus="false" appearance="accent" >Accept</fluent-button>
            <fluent-button class="mr-4" onclick="handleAgree(false)" type="button" autofocus="false" appearance="outline" >Decline</fluent-button>
          </div>
        </div>
      </fluent-dialog>
    </div>

  </fluent-card>

  <script>
    const defaultDialog = document.getElementById('defaultDialog')
    const fullname = document.getElementsByName('fullname')
    const username = document.getElementsByName('username')
    const email = document.getElementsByName('email')
    const email1 = document.getElementsByName('email1')

    function hideDialog(value) {
      defaultDialog.hidden = Boolean(value)
    }

    function handleAgree(value) {
      if (Boolean(value)) {
        document.getElementsByName('agree')[0].checked = true
      } else {
        document.getElementsByName('agree')[0].checked = false
      }
      if (defaultDialog) {
        defaultDialog.hidden = true
      }
    }

    if (username && fullname) {
      username[0].addEventListener('input', (e) => {
        fullname[0].value = e.target.value
      })
    }

    if (email && email1) {
      email[0].addEventListener('input', (e) => {
        email1[0].value = e.target.value
      })
    }

  </script>
{/if}
{include file="footer.tpl"}