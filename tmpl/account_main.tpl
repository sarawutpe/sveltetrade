          {include file="header.tpl" meta_title="Home"}
          <span class="fontSize-xl fontWeight-regular mb-3">Account Overview</span>
          <div class="grid-container grid-column-4 mb-2">
            <fluent-card class="card flex mb-0">
                <div class="line-rounded color1">
                  <span class="ml-2">Account Balance</span>
                  <span class="ml-2">{fiat}{$ab_formated.total}</span>
                </div>
            </fluent-card>
            <fluent-card class="card flex mb-0">
                <div class="line-rounded color2">
                  <span class="ml-2">Earned Total</span>
                  <span class="ml-2">{fiat}{$ab_formated.earning}</span>
                </div>
            </fluent-card>
            <fluent-card class="card flex mb-0">
                <div class="line-rounded color3">
                  <span class="ml-2">Withdrew Total</span>
                  <span class="ml-2">{fiat}{$ab_formated.withdrawal}</span>
                </div>
            </fluent-card>
            <fluent-card class="card flex mb-0">
                <div class="line-rounded color4">
                  <span class="ml-2">Active Deposit</span>
                  <span class="ml-2">{fiat}{$ab_formated.active_deposit}</span>
                </div>
            </fluent-card>
          </div>
          {* More *}
          <fluent-tabs class="mb-3" activeid="transactions">
            <fluent-tab id="transactions">Transactions</fluent-tab>
            <fluent-tab id="accountInfo">Account Info</fluent-tab>
            <fluent-tab-panel id="transactionsPanel">
                <ul>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Pending Withdrawal</div>
                        <div>{fiat}{$ab_formated.withdraw_pending}</div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Last Deposit</div>
                        <div>{if $last_deposit}{$last_deposit|fiat:$last_deposit_ec}
                            {$last_deposit_date|default:"n/a"}{else}
                              {fiat}0.00
                            {/if}</div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Total Deposit</div>
                        <div>{if $ab_formated.deposit != 0}{$ab_formated.deposit|fiat}{else}{fiat}0.00{/if}</div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Last Withdrawal</div>
                        <div>{if $last_withdrawal}{$last_withdrawal|fiat:$last_withdrawal_ec}
                            {$last_withdrawal_date|default:"n/a"}{else}
                              {fiat}0.00
                            {/if}</div>
                      </div>
                  </li>
                </ul>
            </fluent-tab-panel>
            <fluent-tab-panel id="accountInfoPanel">
                <ul>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>User</div>
                        <div>{$userinfo.username}</div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Registration Date:</div>
                        <div>{$userinfo.create_account_date}</div>
                      </div>
                  </li>
                  <li>
                      <div style="display: flex; justify-content: space-between">
                        <div>Last Access:</div>
                        <div>{$last_access|default:"n/a"}</div>
                      </div>
                  </li>
                </ul>
            </fluent-tab-panel>
          </fluent-tabs>

          {foreach from=$ps item=p}
            {if $p.pending_col > 0}{$p.pending_col} {$p.name} deposit{if $p.pending_col > 1}s{/if} of
          {$p.pending_amount|fiat} total pending<br>{/if}
          {/foreach}

          {* Statistics *}
          <span class="fontSize-mPlus fontWeight-regular mb-2">Statistics</span>

          {include file="chart.tpl"}
          {include file="footer.tpl"}
