{include file="header.tpl" meta_title="Deposit Confirmation"}

{if $false_data != 1}
  <span class="fontSize-xl fontWeight-regular mb-3">Deposit Confirmation</span>
  <div class="table-responsive">
    <table>
      {if $deposit.id > 0}
        <tbody>
          <tr>
            <td>Plan</td>
            <td>{$deposit.name|escape:html}</td>
          </tr>
          <tr>
            <td>Profit</td>
            <td>{$deposit.percent}% {if $deposit.period == 'end' || $deposit.period == 'endh'}after {$deposit.periods}
                {$deposit.time_units}{if $deposit.periods != 1}s{/if}{else}{$deposit.period_name} for
                {if $deposit.periods == 0}lifelong
                {else}{$deposit.periods}
                  {$deposit.time_units}{if $deposit.periods != 1}s{/if}
                  {if $deposit.work_week}(mon-fri){/if}{/if}{/if}
                </td>
              </tr>
              <tr>
                <td>Principal Return</td>
                <td>{if $deposit.principal_return}Yes
                    {if $deposit.principal_return_hold_percent > 0}, witd
                    {$deposit.principal_return_hold_percent|number_format:2}% fee{/if}
                  {else}
                    No (included in profit)
                  {/if}
                </td>
              </tr>
              <tr>
                <td>Principal Witddraw</td>
                <td>
                  {if $deposit.principal_witddraw}Available witd
                    {foreach from=$deposit.principal_witddraw_terms item=t name=wpt}
                      {$t.percent}% fee {if $t.duration > 0}after {$t.duration} days{/if}{if !$smarty.foreach.wpt.last} or {/if}
                    {/foreach}
                    {if $deposit.principal_witddraw_duration_max} but before
                      {$deposit.principal_witddraw_duration_max|number_format}
                    days{/if}
                  {else}Not available
                  {/if}
                </td>
              </tr>
              {if $deposit.use_compound == 1}
                <tr>
                  <td>Compound</td>
                  <td>{$deposit.compound|number_format}%</td>
                </tr>
              {/if}
            {/if} {* $deposit.id *}

            {if $deposit.ec_fees.fee}
              <tr>
                <td>Credit Amount</td>
                <td>{$deposit.user_amount|fiat:$deposit.ec}</td>
              </tr>
              <tr>
                <td>Deposit Fee</td>
                <td>{$deposit.ec_fees.percent}% + {$deposit.ec_fees.add_amount|fiat:$deposit.ec} (min.
                  {$deposit.ec_fees.fee_min|fiat:$deposit.ec} max. {$deposit.ec_fees.fee_max|fiat:$deposit.ec})</td>
              </tr>
            {/if}
            {if $deposit.converted_amount}
              <tr>
                <td>Debit Amount</td>
                <td>{$deposit.converted_amount|fiat:$deposit.ec}</td>
              </tr>
              <tr>
                <td>{$deposit.converted_fiat} Debit Amount</td>
                <td>{$deposit.amount}</td>
              </tr>
            {else}
              <tr>
                <td>Debit Amount</td>
                <td>{$deposit.amount|fiat:$deposit.ec}</td>
              </tr>
            </tbody>
          {/if}
        </table>
      </div>

      <div class="payment-form">
        {$payment_form}
      </div>
    {/if}
    {include file="footer.tpl"}