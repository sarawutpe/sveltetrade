          {include file="header.tpl" meta_title="Deposit"}
          <span class="fontSize-xl fontWeight-regular mb-3">Deposit</span>
          {if $fatal}
            {if $fatal == 'one_per_month'}
              <div class="alert error">
                You can deposit once a month only.
              </div>
            {/if}
          {else}
          {if $frm.say eq 'deposit_success'}
            <div class="alert success">
              The deposit has been successfully saved.
            </div>
          {/if}
          {if $frm.say eq 'deposit_saved'}
            <div class="alert success">
              The deposit has been saved. It will become active when the administrator checks statistics.
            </div>
          {/if}
          {if $errors}
            {if $errors.less_min}
              <div class="alert error">
                Sorry, you can deposit not less than {$currency_sign}{$errors.less_min} with selected processing
              </div>
            {/if}
            {if $errors.greater_max}
              <div class="alert error">
                Sorry, you can deposit not greater than {$currency_sign}{$errors.greater_max} with selected processing
              </div>
            {/if}
            {if $errors.not_enough_funds}
              <div class="alert error">
                You have no enough funds to complete the operation.
              </div>
            {/if}
            {if $errors.ec_forbidden}
              <div class="alert error">
                Sorry, deposit with selected processing is temproary forbidden.
              </div>
            {/if}
            {if $errors.cannot_invest_this_plan_anymore}
              <div class="alert error">
                Sorry, you cannot invest this plan anymore
              </div>
            {/if}
            {if $errors.external_deposits_disabled}
              <div class="alert error">
                Deposit to this plan from external processing is forbidden.
              </div>
            {/if}
            {if $errors.internal_deposits_disabled}
              <div class="alert error">
                Deposit to this plan from balance is forbidden.
              </div>
            {/if}
            {if $errors.no_ps}
              <div class="alert error">
                Please, select funds source.
              </div>
            {/if}
            {if $errors.deposits_amount_exeeded}
              <div class="alert error">
                Your total deposit in &quot;{$errors.deposits_amount_exeeded.plan|escape:html}&quot; should not more than
                {$errors.deposits_amount_exeeded.amount_limit|fiat}
              </div>
            {/if}
          {/if}

              <form method=post name="spendform">
                <div class="grid-container grid-column-2">
                  {* Section 1 *}
                  <div class="form-control">
                    <input type="hidden" name="a" value="deposit">
                    {if $qplans > 1}<span class="fontSize-mPlus fontWeight-regular mb-2">Select a plan</span>{/if}
                    <div class="field">
                      <fluent-radio-group class="card-group" orientation="vertical">
                      {foreach from=$plans item=plan name=fplans}
                            {if $plans|@count > 1}
                              <fluent-radio class="card-plan" name="h_id" value="{$plan.id}" {if (($smarty.foreach.fplans.first == 1) && (!$frm.h_id)) || ($frm.h_id == $plan.id)} checked {/if}>
                                {foreach from=$plan.plans item=o}
                                <fluent-card class="card card-plan-item">
                                  <span id="plan-name" class="fontSize-mPlus fontWeight-semibold mb-2">{$o.name|escape:html}</span>
                                  <div class="flex align-items-center">
                                  <i class="ms-Icon ms-Icon--CheckMark fontSize-m mb-2 mr-1"></i>
                                  <span id="plan-min" class="fontSize-sPlus mb-2">{$plan.name|escape:html}</span>
                                  </div>
                                  <div class="flex align-items-center">
                                    <i class="ms-Icon ms-Icon--CheckMark fontSize-m mb-2 mr-1"></i>
                                    <span id="plan-min" class="fontSize-sPlus mb-2">
                                    Min {$o.min_deposit} Max {if $o.max_deposit == 0}&infin;{else}{$o.max_deposit}{/if}
                                    </span>
                                  </div>
                                </fluent-card>
                              {/foreach}
                              </fluent-radio>
                            {else}
                              <fluent-radio name="h_id" value="{$plan.id}" checked>{$plan.name|escape:html}</fluent-radio>
                            {/if}
                          {/foreach}
                          </fluent-radio-group>
                          {foreach from=$plans item=plan name=fplans}
                      {/foreach}
                    </div>
                    {* eCurrency *}
                    <span class="fontSize-mPlus fontWeight-regular mb-2">Select eCurrency</span>
                    <div class="field mb-3">
                      <fluent-select class="w-100 z-10" name="type" position="below">
                        {foreach from=$dps item=p name=p}
                          <fluent-option value="process_{$p.id}" {if $frm.type == "process_`$p.id`"}selected{/if}>Topup
                            {$p.name}</fluent-option>
                          <fluent-option value="account_{$p.id}" {if $frm.type == "account_`$p.id`"}selected{/if}
                            {if $p.available <= 0}disabled{/if}>Balance {$p.name} {$p.available|fiat:$p.id}</fluent-option>
                        {/foreach}
                      </fluent-select>
                    </div>
                    {* Amount *}
                    <span class="fontSize-mPlus fontWeight-regular mb-2">Amount to Spend {fiat}</span>
                    <div class="field">
                      <fluent-number-field id="input-amount" class="w-100 fontSize-mPlus fontWeight-regular mb-2"
                        name="amount" value="{$frm.amount|default:$min_deposit|amount_format}" required>
                      </fluent-number-field>
                    </div>
                    {* Compounding *}
                    <div class="field">
                      <div id="coumpond_block" style="display:none">
                        <span class="fontSize-mPlus fontWeight-regular mb-2">Compounding(%)</span>
                        <select name="compound" class=inpts id="compound_percents"></select>
                      </div>
                    </div>
                  </div>
                  {* Section 2 *}
                  <div>
                    <div class="flex justify-content-between align-items-center">
                      <span class="fontSize-l fontWeight-regular">Daily</span>
                      <span id="calc-daily" class="fontSize-xlPlus">$0.00</span>
                    </div>
                    <div class="flex justify-content-between align-items-center">
                      <span class="fontSize-l fontWeight-regular">Weekly</span>
                      <span id="calc-weekly" class="fontSize-xlPlus">$0.00</span>
                    </div>
                    <div class="flex justify-content-between align-items-center">
                      <span class="fontSize-l fontWeight-regular">Monthly</span>
                      <span id="calc-monthly" class="fontSize-xlPlus">$0.00</span>
                    </div>
                    <div class="flex justify-content-between align-items-center">
                      <span class="fontSize-l fontWeight-regular">Yearly</span>
                      <span id="calc-yearly" class="fontSize-xlPlus">$0.00</span>
                    </div>
                  </div>
                </div>

                <div class="action">
                  <fluent-button type="submit" appearance="accent" class="sbmt">Spend</fluent-button>
                </div>
              </form>
              
              {/if}
              {include file="footer.tpl"}