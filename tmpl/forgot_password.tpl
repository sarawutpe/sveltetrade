{include file="header.tpl" meta_title="Forgot Password"}

{if $errors.turing_image}
  <div class="alert error">Invalid turing image</div>
{/if}
{if $found_records == 2}
  <div class="alert success">Your account was found. Please check your e-mail address and follow the confirmation URL to
    reset your password.</div>
{else}
  {if $found_records == 0}
    <div class="alert error">No accounts found for provided info.</div>
  {elseif $found_records == 1}
    <div class="alert success">Request was confirmed. Login and password was sent to your email address.</div>
  {/if}

  <fluent-card class="card">
    <div class="flex justify-content-center">
      <form method="post" name="regform">
        <div class="form-control">
          <span class="fontSize-xl fontWeight-regular mb-2">Forgot Password</span>
          <input type="hidden" name="a" value="forgot_password">
          <input type="hidden" name="action" value="forgot_password">
          <div class="field">
            <fluent-text-field type="text" class="w-100" name="email" value="{$frm.email|escape:htmlall}"
              appearance="outline" required>Username or E-mail Address</fluent-text-field>
          </div>
          <input type="hidden" name="email1" value="{$frm.email1|escape:html}">
          {include file="captcha.tpl" action="signup"}
          <input type="hidden" name="agree" value="1">
          <div class="action">
            <fluent-button type="submit" appearance="accent">Forgot</fluent-button>
          </div>
      </form>
    </div>
  </fluent-card>
{/if}

{include file="footer.tpl"}