{if $ti.check[$action]}

  {if $ti.type == 'image'}
    <div class="field">
      <fluent-text-field class="w-100" id="validation_number" type="text" name="validation_number"
        size={$inpt_size|default:30} required>
        <div class="flex justify-content-between">
          <div>Turing number</div>
          <div>
            <img src="{"?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}">
          </div>
        </div>
      </fluent-text-field>
    </div>
  {/if}

  {if $ti.type == 'recaptcha_v2'}
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <tr>
      <td class=menutxt colspan=2>
        <div class="g-recaptcha" data-sitekey="{$settings.recaptcha_site_key}"></div>
      </td>
    </tr>
  {/if}

  {if $ti.type == 'recaptcha_v3'}
    <script src="https://www.google.com/recaptcha/api.js?render={$settings.recaptcha_site_key}"></script>
    {literal}
      <script>
        grecaptcha.ready(function() {
        grecaptcha.execute('{/literal}{$settings.recaptcha_site_key}{literal}', {action: '{/literal}{$action}{literal}'}).then(function (token) {
        var rinput = document.getElementById('g-recaptcha');
        rinput.value = token;
        });
        });
      </script>
    {/literal}
    <tr>
      <td class=menutxt colspan=2>
        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha">
      </td>
    </tr>
  {/if}

  {if $ti.type == 'solvemedia'}
    <tr>
      <td class=menutxt colspan=2>
        <!--script type="text/javascript" src="http://api.solvemedia.com/papi/challenge.script?k={$settings.solvemedia_recaptcha_c_key}"></script-->

        <script type="text/javascript">
          var ACPuzzleOptions = {
            lang: 'en',
            size: '300x150'
          };
        </script>
        <ins class="acprecheck" id="acprecheck"></ins>
        <script type="text/javascript"
          src="http://api.solvemedia.com/papi/challenge.precheck?k={$settings.solvemedia_recaptcha_c_key}"></script>
      </td>
    </tr>
  {/if}


{/if}