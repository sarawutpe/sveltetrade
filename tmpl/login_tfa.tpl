{include file="header.tpl" meta_title="2FA"}

{if $say == 'invalid_code'}
  <div class="alert error">You have entered invalid code.</div>
{/if}

<fluent-card class="card">
  <div class="flex justify-content-center">
    <form method="post" name="tfaform">
      <input type="hidden" name="a" value='do_login_tfa'>
      <input type="hidden" name="follow" value='{$frm.follow}'>
      <input type="hidden" name="follow_id" value='{$frm.follow_id}'>
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
          <a href="{"?a=logout"|encurl}">
            <fluent-button class="mr-2" type="button" appearance="outline">Cancel
          </a>
          </fluent-button>
        </div>
    </form>
  </div>
</fluent-card>

{literal}
  <script>
    document.tfaform.time.value = (new Date()).getTime();
  </script>
{/literal}

{include file="footer.tpl"}