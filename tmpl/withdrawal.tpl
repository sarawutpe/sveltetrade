        {include file="header.tpl" meta_title="Withdrawal"}
        <script>
          {literal}
            function playSuccessAudio() {
              const audio = new Audio('../assets/utils/effect-success.mp3');
              audio.play().catch(function(error) {});
            }
          {/literal}
        </script>
        <span class="fontSize-xl fontWeight-regular mb-3">Withdrawal</span>
        {if $say eq 'processed'}
          {if $batch eq ''}
            <div class="alert success">Withdrawal request has been successfully saved.</div>
            <script>
              playSuccessAudio()
            </script>
          {else}
            <div class="alert success">Withdrawal has been processed. Batch id: {$batch}</div>
            <script>
              playSuccessAudio()
            </script>
          {/if}
        {/if}
        {if $fatals}
          {if $fatal == 'times_limit' || $fatals.times_limit}
            <div class="alert error">You can withdraw {$settings.limit_withdraw_period_times} per
              {$settings.limit_withdraw_period_date} only.</div>
          {/if}
        {else}
          {if $say eq 'ec_forbidden' || $errors.ec_forbidden}
            <div class="alert error">Sorry, withdraw for this processing is temproary forbidden.</div>
          {/if}
          {if $say eq 'on_hold' || $errors.on_hold}
            <div class="alert error">Sorry, this amount on hold now.</div>
          {/if}
          {if $say eq 'zero' || $errors.zero}
            <div class="alert error">Sorry, you can't request a withdraw smaller than {$currency_sign}0.00 only</div>
        {/if}
        {if $say eq 'less_min' || $errors.less_min}
        <div class="alert error">Sorry, you can request not less than
          {$currency_sign}{*$settings.min_withdrawal_amount*}{$fees.amount_min}</div>
        {/if}
        {if $say eq 'greater_max' || $errors.greater_max}
        <div class="alert error">Sorry, you can request not greater than
          {$currency_sign}{*$settings.max_withdrawal_amount*}{$fees.amount_max}</div>
        {/if}
        {if $say eq 'daily_limit' || $errors.daily_limit}
        <div class="alert error">Sorry, you have exceeded a daily limit</div>
        {/if}
        {if $say eq 'not_enought' || $errors.not_enought}
        <div class="alert error">Sorry, you have requested the amount larger than the one on your balance.</div>
        {/if}
        {if $say eq 'invalid_transaction_code' || $errors.invalid_transaction_code}
        <div class="alert error">You have entered the invalid transaction code.</div>
        {/if}
        {if $say eq 'invalid_tfa_code' || $errors.invalid_tfa_code}
        <div class="alert error">You have entered invalid 2FA code.</div>
        {/if}
        {if $say eq 'no_deposits' || $errors.no_deposits}
        <div class="alert error">You have not done any deposits yet. Withdrawal function will be available after a
          deposit.</div>
        {/if}
        {if $say eq 'no_active_deposits' || $errors.no_active_deposits}
        <div class="alert error">You must have active deposit to withdraw.</div>
        {/if}
        {if $say eq 'no_account' || $errors.no_account}
        <div class="alert error">Please, provide your account to withdraw funds to first <a
            href="{"?a=edit_account"|encurl}">here</a>.</div>
        {/if}
        {if $errors.demo}
        <div class="alert error">Withdraw is not available for demo account.</div>
        {/if}
        {if $errors.turing_image}
        <div class="alert error">Invalid turing image</div>
        {/if}
        {if $errors.account_suspended}
        <div class="alert error">Account is suspended</div>
        {/if}

        {if $preview}
        {* Confirm Withdrawal *}
        <form method="post">
          <input type="hidden" name="a" value="withdraw">
          <input type="hidden" name="action" value="withdraw">
          <input type="hidden" name="amount" value={$amount}>
          <input type="hidden" name="ec" value={$ec}>
          <input type="hidden" name="comment" value="{$comment|escape:html}">
          <div class="table-responsive">
            <table class="form deposit_confirm">
              <tbody>
                <tr>
                  <td>Payment System:</td>
                  <td>{$currency}</td>
                </tr>
                <tr>
                  <td>Account:</td>
                  <td>{$account}</td>
                </tr>
                <tr>
                  <td>Debit Amount:</td>
                  <td>{$amount|fiat:$ec}</td>
                </tr>
                <tr>
                  <td>Withdrawal Fee:</td>
                  <td>
                    {if $fees.fee > 0}
                    {$fees.percent}% + {$fees.add_amount|fiat:$ec} (min. {$fees.fee_min|fiat:$ec} max.
                    {if $fees.fee_max}{$fees.fee_max|fiat:$ec}{else}no{/if})
                    {else}
                    We have no fee for this operation.
                    {/if}
                  </td>
                </tr>
                {if $converted}
                <tr>
                  <td>Credit Amount:</td>
                  <td>{$converted.amount|fiat:$ec}</td>
                </tr>
                <tr>
                  <td>{$converted.fiat} Amount:</td>
                  <td>{$to_withdraw}</td>
                </tr>
                {else}
                <tr>
                  <td>Credit Amount:</td>
                  <td>{$to_withdraw|fiat:$ec}</td>
                </tr>
                {/if}
                {if $comment}
                <tr>
                  <td>Note:</td>
                  <td>{$comment|escape:html}</td>
                </tr>
                {/if}
                {if $settings.use_transaction_code && $userinfo.transaction_code}
                <tr>
                  <th>Transaction Code:</th>
                  <td><input type="password" name="transaction_code" class=inpts size=15></td>
                </tr>
                {/if}
                {include file="captcha.tpl" action="withdrawal"}
                {if $userinfo.tfa_settings.withdraw}
                <tr>
                  <td>2FA Code:</td>
                  <td>
                    <input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time"
                      id="tfa_time">
                  </td>
                </tr>
                {literal}
                <script language=javascript>
                  document.getElementById('tfa_time').value = (new Date()).getTime();
                </script>
                {/literal}
                {/if}
              </tbody>
            </table>
          </div>
          <fluent-button class="mr-2" type="submit" appearance="accent">Confirm</fluent-button>
          <fluent-button class="mr-2" type="button" appearance="outline" onclick="{"?a=withdraw"|encurl}">Cancel
          </fluent-button>
        </form>
        {else}
        <div>
          <form method="post">
            <div class="grid-container grid-column-2">
              {* TAB 1 *}
              <div class="form-control">
                <input type="hidden" name="a" value="withdraw">
                <input type="hidden" name="action" value="preview">
                <input type="hidden" name="say" value="">
                {* Account Info *}
                <div>
                  <fluent-card class="card w-100">
                    <div class="flex justify-content-between mb-1">
                      <span class="fontWeight-regular">Account Balance</span>
                      <span>{fiat}{$ab_formated.total}</span>
                    </div>
                    <div class="flex justify-content-between mb-1">
                      <span class="fontWeight-regular">Pending Withdrawals</span>
                      <span>{fiat}{if $ab_formated.withdraw_pending != 0}{$ab_formated.withdraw_pending|amount_format}{else}0.00{/if}</span>
                    </div>
                  </fluent-card>
                </div>
                {* Processing *}
                <div class="flex align-items-center">
                  <div class="mr-1">
                    <span class="fontSize-mPlus fontWeight-regular mb-2">Select eCurrency</span>
                  </div>
                  <div>
                    <fluent-tooltip id="tooltip" anchor="anchor-default">
                      Show the eCurrency is available
                    </fluent-tooltip>
                    <i id="anchor-default" class="ms-Icon ms-Icon--Info fontSize-m mb-2 mr-1"></i>
                  </div>
                </div>
                <div class="field mb-3">
                  <fluent-select disabled={!$have_available} class="w-100 z-10" name="ec" position="below">
                    {assign var="wfch" value=1}
                    {foreach from=$ps item=p}
                    {if $p.available > 0}
                    <fluent-option value="{$p.id}"
                      {if $frm.ec == $p.id || $wfch}{assign var="wfch" value=0}selected{/if}>
                      {$p.name|escape:html} {$p.available|fiat:$p.ec}
                      {* {$p.name|escape:html} {$p.available|fiat:$p.ec} | {$p.pending|fiat:$p.ec} *}
                    </fluent-option>
                    {/if}
                    {/foreach}
                  </fluent-select>
                </div>
                {* Amount  *}
                {if $have_available}
                <span class="fontSize-mPlus fontWeight-regular mb-2">Withdrawal {fiat}</span>
                <div class="field mb-0">
                  <fluent-number-field class="w-100 fontSize-mPlus fontWeight-regular mb-2" name="amount"
                    value="{$frm.amount|amount_format|default:"10.00"}" required</fluent-number-field>
                </div>
                {* Comment  *}
                <div class="field">
                  <fluent-text-area class="w-100" name="comment" placeholder="Your comment"></fluent-text-area>
                </div>
              </div>
              {* TAB 2 *}
              <div class="">
                <span class="fontSize-mPlus fontWeight-regular mb-2">Wallet Setting</span>
                {* Wallet Setting *}
                <div class="table-responsive">
                  <table cellspacing=0 cellpadding=2 border=0>
                    <thead>
                      <tr>
                        <th>Processing</th>
                        <th>Account</th>
                      </tr>
                    </thead>
                    {assign var="wfch" value=1}
                    {foreach from=$ps item=p}
                    <tbody>
                      <tr>
                        <td>
                          <img src="images/{$p.id}.gif" width=44 height=17 align=absmiddle> {$p.name|escape:html}
                        </td>
                        <td>
                          {if $p.account != ''}
                              <a href="{"?a=edit_account"|encurl}">Edit</a>
                            {else}
                              <a href="{"?a=edit_account"|encurl}">+Add new</a>
                            {/if}
                          </td>
                        </tr>
                      </tbody>
                    {/foreach}
                  </table>
                </div>
              </div>
            </div>
            {* END TAB 1 2 *}
            {* Action *}
            <div class="action">
              <fluent-button type="submit" appearance="accent" class="sbmt">Request</fluent-button>
            </div>
            {else}
            <div class="alert error">You have no funds to withdraw.</div>
            {/if}
          </form>
        </div>
        {/if}
        {/if}

{include file="footer.tpl"}