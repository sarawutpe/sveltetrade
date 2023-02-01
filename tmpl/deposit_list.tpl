          {include file="header.tpl" meta_title="Deposit History"}
          <span class="fontSize-xl fontWeight-regular mb-3">Deposit History</span>
          <span class="fontSize-mPlus fontWeight-semibold mb-3">Total: {$currency_sign}{$total}</span>
          {foreach from=$plans item=p}
            <div class="table-responsive">
              <span class="fontSize-mPlus fontWeight-semibold mt-4 mb-2">{$p.name}</span>
              <table>
                {if !$p.deposits}
                  <tr>
                    <td colspan="4">No deposits for this plan</td>
                  </tr>
                {else}
                  <tr>
                    <td style="min-width: 100px;">Date</td>
                    <td>Amount</td>
                    <td style="min-width: 100px;">Expire in</td>
                    <td>Payment</td>
                    {if $p.use_compound}
                      <td>Compounding Percent</td>
                    {/if}
                    {if $p.withdraw_principal}
                      <td>Release</td>
                    {/if}
                  </tr>
                  {foreach from=$p.deposits item=d}
                    <tr>
                      <td>
                        {$d.date}
                      </td>
                      <td>
                        {$d.deposit|fiat:$d.ec}
                      </td>
                      <td>{if $p.q_days == 0}Working {$d.duration} days {else} Expire in {$d.expire_in}{/if}</td>
                      <td>
                        <div class="flex gap-2">
                          <img src="images/{$d.ec}.gif">
                          <span>
                            {$d.ec_name}
                          </span>
                        </div>
                      </td>
                      {if $p.use_compound}
                        <td>{$d.compound}% <a href="{"?a=change_compound&deposit=`$d.id`"|encurl}">[change]</a>
                        </td>
                      {/if}
                      {if $p.withdraw_principal}
                        <td>
                          {if $d.can_withdraw}
                            <a href="{"?a=withdraw_principal&deposit=`$d.id`"|encurl}">[release]</a>
                          {else}
                            {if $d.pending_duration > 0}
                              {$d.pending_duration} day{if $d.pending_duration > 1}s{/if} left
                            {else}
                              not available
                            {/if}
                          {/if}
                        </td>
                      {/if}
                    </tr>
                  {/foreach}
                {/if}
              </table>
            </div>
            {if $p.total_deposit > 0 || $p.today_profit > 0 || $p.total_profit > 0}
              <table>
                <tr>
                  <td>Deposited Total:</td>
                  <td><b>{$p.total_deposit|fiat}</b></td>
                </tr>
                <tr>
                  <td>Profit Today:</td>
                  <td><b>{$p.today_profit|fiat}</b></td>
                </tr>
                <tr>
                  <td>Total Profit:</td>
                  <td><b>{$p.total_profit|fiat}</b></td>
                </tr>
              </table>
            {/if}

          {/foreach}
{include file="footer.tpl"}