          {include file="header.tpl" meta_title="Security"}
          <span class="fontSize-xl fontWeight-regular mb-3">Security</span>
          <div class="grid-container grid-column-2">
            <section>
              <form method="post">
              <input type="hidden" name="a" value="security">
              <input type="hidden" name="action" value="save">
              <div class="field">
                <span class="fontSize-mPlus fontWeight-regular mb-1">Detect IP Address Change Sensitivity</span>
                <fluent-radio-group class="radio-group" name="ip" aria-labelledby="setting-ip" orientation="vertical">
                  <fluent-radio value="disabled" {if $security.detect_ip == 'disabled'}checked{/if}>Disabled</fluent-radio>
                  <fluent-radio value="medium" {if $security.detect_ip == 'medium'}checked{/if}>Medium</fluent-radio>
                  <fluent-radio value="high" {if $security.detect_ip == 'high'}checked{/if}>High</fluent-radio>
                  <fluent-radio value="always" {if $security.detect_ip == 'always'}checked{/if}>Paranoic</fluent-radio>
                </fluent-radio-group>
              </div>
              <div class="field">
                <span class="fontSize-mPlus fontWeight-regular mb-1">Detect Browser Change</span>
                <fluent-radio-group class="radio-group" name="browser" aria-labelledby="setting-ip" orientation="vertical">
                  <fluent-radio value="disabled" {if $security.detect_browser == 'disabled'}checked{/if}>Disabled</fluent-radio>
                  <fluent-radio value="enabled" {if $security.detect_browser == 'enabled'}checked{/if}>Enabled</fluent-radio>
                </fluent-radio-group>
              </div>
              <div class="action">
                <fluent-button type="submit" appearance="accent">Save</fluent-button>
              </div>
              </form>
            </section>
            <section>
              {if $settings.use_tfa}
              <span class="fontSize-mPlus fontWeight-regular mb-1">Two-Factor Authentication (2FA)</span>
              <form method="post" name="mainform">
                <input type="hidden" name="a" value="security">
                <input type="hidden" name="action" value="tfa_save">
                <input type="hidden" name="time">
                {if $errors.invalid_tfa_code}
                <div class="alert error">Invalid code.</div>
                {/if}
                {if $errors.invalid_tfa_secret}
                <div class="alert error">Invalid Secret.</div>
                {/if}
                {* 2fa enabled *}
                {if $tfa_enabled}
                <div class="field">
                  <div class="flex justify-content-between">
                    <span class="fontSize-m">on Login:</span>
                    <fluent-switch name="tfa_on_login" value="1" {if $tfa_settings.login}checked{/if}>
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                <div class="field">
                  <div class="flex justify-content-between">
                    <span class="fontSize-m">on Edit Account:</span>
                    <fluent-switch name="tfa_on_edit_account" value="1" {if $tfa_settings.edit_account}checked{/if}>
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                <div class="field">
                  <div div class="flex justify-content-between">
                    <span class="fontSize-m">on Withdraw:</span>
                    <fluent-switch name="tfa_on_withdraw" value="1" {if $tfa_settings.withdraw}checked{/if}>
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                {if $settings.internal_transfer_enabled}
                <div class="field">
                  <div div class="flex justify-content-between">
                    <span class="fontSize-m">on Internal Transfer:</span>
                    <fluent-switch name="tfa_on_internal_transfer" value="1" {if $tfa_settings.internal_transfer}checked{/if}>
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                {/if}
                <div class="field">
                  <div div class="flex justify-content-between">
                    <span class="fontSize-m">Two-Factor Authentication:</span>
                    <fluent-switch name="tfa_disable" value="" checked onchange="handle2faDisable(this.checked)">
                      <span slot="checked-message">On</span>
                      <span slot="unchecked-message">Off</span>
                    </fluent-switch>
                  </div>
                </div>
                <div class="field">
                  <fluent-text-field class="w-100" name="code">Enter code:</fluent-text-field>
                </div>
                <div class="action">
                  <fluent-button type="submit" appearance="accent">Save</fluent-button>
                </div>
                {else}
                {* 2fa not enabled *}
                <div class="field">
                  <span class="fontSize-m">Secret key: <b>{$tfa_secret}</b></span>
                  <input type="hidden" name="tfa_secret" value="{$tfa_secret}">
                </div>
                <fluent-card class="card flex flex-column align-items-center">
                  <img src="{$tfa_secret_url}" width="120px" height="120px" alt="qr-code">
                  <span class="fontSize-m fontWeight-regular uppercase my-1">Scan me</span>
                </fluent-card>
                <div class="field">
                  <fluent-text-field class="w-100" name="code">Enter code:</fluent-text-field>
                </div>
                <div class="action">
                  <fluent-button type="submit" appearance="accent">Enable</fluent-button>
                </div>
                {/if}
              </form>
            </section>
          </div>
          {literal}
          <script language=javascript>
          document.mainform.time.value = (new Date()).getTime();
          function checkform() {
            if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
              alert("Please type code!");
              document.mainform.code.focus();
              return false;
            }
            return true;
          }
          function handle2faDisable(e) {
            let element = document.getElementsByName('tfa_disable')[0];
            if (e && element) {
              element.value = ""
            } else {
              element.value = "1";
            }
            return
          }
          </script>
          {/literal}
          {/if} {* use_tfa *}
          {include file="footer.tpl"}
