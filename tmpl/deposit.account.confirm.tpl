{include file="header.tpl" meta_title="Deposit Confirmation"}

{if $errors}
  {if $errors.invalid_type}
    <div class="alert error">tde Plan does not exist.</div>
  {/if}
  {if $errors.not_enough_funds}
    <div class="alert error">You have no enough funds to complete tde operation.</div>
  {/if}
  {if $errors.less_min}
    <div class="alert error">
      tde minimal spend amount for '{$plan_name}' is {$currency_sign}{$errors.less_min}.
    </div>
  {/if}
  {if $errors.on_hold}
    <div class="alert error">
      Sorry, tdis amount on hold now.
    </div>
  {/if}
  Click <a href="{"?a=deposit"|encurl}">here</a> and try again.
{else}

  <span class="fontSize-xl fontWeight-regular mb-3">Deposit Confirmation</span>
  <div class="table-responsive">
    <table>
      <tr>
        <td>Plan</td>
        <td>{$deposit.name|escape:html}</td>
      </tr>
      <tr>
        <td>Profit</td>
        <td>{$deposit.percent}% {if $deposit.period == 'end' || $deposit.period == 'endh'}after {$deposit.periods}
            {$deposit.time_units}{if $deposit.periods != 1}s{/if}{else}{$deposit.period_name} for
            {if $deposit.periods == 0}lifelong{else}{$deposit.periods} {$deposit.time_units}{if $deposit.periods != 1}s{/if}
            {if $deposit.work_week}(mon-fri){/if}{/if}{/if}</td>
        </tr>
        <tr>
          <td>Principal Return</td>
          <td>{if $deposit.principal_return}Yes
              {if $deposit.principal_return_hold_percent > 0}, witd
              {$deposit.principal_return_hold_percent|number_format:2}% fee{/if}
            {else}No (included in profit)
            {/if}</td>
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
        {if $deposit.compound != -1}
          <tr>
            <td>Compound</td>
            <td>{$deposit.compound|number_format}%</td>
          </tr>
        {/if}
        {if $deposit.fees.fee}
          <tr>
            <td>Credit Amount</td>
            <td>{$deposit.user_amount|fiat:$deposit.ec}</td>
          </tr>
          <tr>
            <td>Deposit Fee</td>
            <td>{$deposit.fees.fee|fiat:$deposit.ec} ({$deposit.fees.percent}%)</td>
          </tr>
          <tr>
            <td>Deposit</td>
            <td>{$deposit.to_deposit|fiat:$deposit.ec}</td>
          </tr>
        {else}
          <tr>
            <td>Amount</td>
            <td>{$deposit.user_amount|fiat:$deposit.ec}</td>
          </tr>
        {/if}
      </table>
    </div>

    <form name="spend" metdod="post">
      <input type="hidden" name="a" value="deposit">
      <input type="hidden" name="action" value="confirm">
      <input type="hidden" name="type" value={$type}>
      <input type="hidden" name="h_id" value={$h_id}>
      <input type="hidden" name="amount" value="{$famount}">
      <input type="hidden" name="compound" value={$compound}>
      <div class="action">
        <fluent-button class="mr-2" type="submit" appearance="accent">Process</fluent-button>
        <fluent-button class="mr-2" type="button" appearance="outline" onclick="document.location='?a=deposit'">Cancel</fluent-button>
      </div>
    </form>

  {/if}

  {include file="footer.tpl"}