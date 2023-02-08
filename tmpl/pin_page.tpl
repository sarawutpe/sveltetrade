{include file="header.tpl" meta_title="Security"}

<fluent-card class="card">
  <div class="flex justify-content-center">
    <form method="post">
      <input type="hidden" name="a" value="enter_pin">
      <div class="form-control">
        <div class="field">
          <span class="fontSize-xl fontWeight-regular mb-2">Security</span>
          <span class="fontSize-l">Your ip or browser is different from ip or browser you use when login last time.
            Please
            check your e-mail
            account and find pin code. Then enter pin code in form bellow</span>
        </div>
        <div class="field">
          <fluent-text-field id="pin" class="w-100" type="text" name="pin" value="" autofocus required>
            Enter pin
          </fluent-text-field>
        </div>
        <div class="action">
          <fluent-button class="mr-2" type="submit" appearance="accent">Submit</fluent-button>
          <a href="{"?a=logout"|encurl}">
            <fluent-button class="mr-2" type="button" appearance="outline">Cancel
          </a>
          </fluent-button>
        </div>
      </div>
    </form>
  </div>
</fluent-card>

{include file="footer.tpl"}