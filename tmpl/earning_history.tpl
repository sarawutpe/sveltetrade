          {include file="header.tpl" meta_title="History"}
          <span class="fontSize-xl fontWeight-regular mb-3">History</span>
          {literal}
          <script language=javascript>
              function go(p) {
                document.opts.page.value = p;
                document.opts.submit();
              }
          </script>
          {/literal}
          {* Filter *}
          <form class="mb-3" method="post" name="opts">
              <input type="hidden" name="a" value="history">
              <input type="hidden" name="page" value={$current_page}>
              <div class="flex flex-xs-column justify-content-between flex-wrap">
                {* Select Type and Ec *}
                <div class="mb-1">
                    <div class="mb-1">
                      <span class="fontSize-mPlus fontWeight-regular mb-1">Select Type</span>
                      <fluent-select class="select" position="below" name="type" onchange="document.opts.submit();">
                          <fluent-option value="1">All transactions</fluent-option>
                          {section name=opt loop=$options}
                          <fluent-option value="{$options[opt].type}" {if $options[opt].selected}selected{/if}>{$options[opt].type_name}</fluent-option>
                          {/section}
                      </fluent-select>
                    </div>
                    {if $ecs}
                    {* <img src=images/q.gif width="1" height=4> *}
                    <div class="mb-1">
                      <fluent-select class="select" name="ec" position="below" onchange="document.opts.submit();">
                          <fluent-option value="1">All eCurrencies</fluent-option>
                          {section name=ec loop=$ecs}
                          <fluent-option value={$ecs[ec].id} {if $frm.ec eq $ecs[ec].id}selected{/if}>{$ecs[ec].name}</fluent-option>
                          {/section}
                      </fluent-select>
                    </div>
                    {/if}
                </div>
                {* From *}
                <div class="mb-1">
                    <div class="mb-1">
                      <span class="fontSize-mPlus fontWeight-regular mb-1">Select period</span>
                      <span class="fontSize-sPlus is-xs">Form</span>
                      <fluent-select class="select small" position="below" name="month_from" onchange="document.opts.submit();">
                          {section name=month_from loop=$month}
                          <fluent-option value={$smarty.section.month_from.index+1} {if $smarty.section.month_from.index+1 == $frm.month_from}selected{/if}>{$month[month_from]}</fluent-option>
                          {/section}
                      </fluent-select>
                      <fluent-select class="select small" position="below" name="day_from" onchange="document.opts.submit();">
                          {section name=day_from loop=$day}
                          <fluent-option value={$smarty.section.day_from.index+1} {if $smarty.section.day_from.index+1 == $frm.day_from}selected{/if}>{$day[day_from]}</fluent-option>
                          {/section}
                      </fluent-select>
                      <fluent-select class="select small" position="below" name="year_from" onchange="document.opts.submit();">
                          {section name=year_from loop=$year}
                          <fluent-option value={$year[year_from]} {if $year[year_from] == $frm.year_from}selected{/if}>{$year[year_from]}</fluent-option>
                          {/section}
                      </fluent-select>
                      {* <img src=images/q.gif width="1px" height="4px"> *}
                      <br>
                    </div>
                    {* To *}
                    <div class="mb-1">
                      <span class="fontSize-sPlus is-xs">To</span>
                      <fluent-select class="select small" position="below" name="month_to" onchange="document.opts.submit();">
                          {section name=month_to loop=$month}
                          <fluent-option class="option" value={$smarty.section.month_to.index+1} {if $smarty.section.month_to.index+1 == $frm.month_to}selected{/if}>{$month[month_to]}</fluent-option>
                          {/section}
                      </fluent-select>
                      <fluent-select class="select small" position="below" name="day_to" onchange="document.opts.submit();">
                          {section name=day_to loop=$day}
                          <fluent-option class="option" value={$smarty.section.day_to.index+1} {if $smarty.section.day_to.index+1 == $frm.day_to}selected{/if}>{$day[day_to]}</fluent-option>
                          {/section}
                      </fluent-select>
                      <fluent-select class="select small" position="below" name="year_to" onchange="document.opts.submit();">
                          {section name=year_to loop=$year}
                          <fluent-option class="option" value={$year[year_to]} {if $year[year_to] == $frm.year_to}selected{/if}>{$year[year_to]}</fluent-option>
                          {/section}
                      </fluent-select>
                    </div>
                </div>
              </div>
          </form>
          {* Table *}
          <div class="table-responsive">
          <table>
              <thead>
                <tr>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
              </thead>
              {foreach from=$trans item=t}
              <tbody>
                <tr>
                    <td>{$t.transtype}</td>
                    <td>
                      <div class="flex align-items-center">   
                      <span class="mr-1">{$t.amount|fiat:$t.ec}</span>
                      <img class="img-currency" src="images/{$t.ec}.gif">{if $t.type == 'withdraw_pending'}<a href="{"?a=cancelwithdraw&id=`$t.id`&return=`$return`&"|encurl}" onclick="return confirm('Are you sure you want to delete this request?')">[cancel]</a>{/if}
                      </div>
                    </td>
                    <td valign="bottom">{$t.d}</td>
                </tr>
                <tr>
                    <td colspan="3">
                      <span class="fontSize-xs">{if $t.description}{$t.description|escape:html}{else}&nbsp;{/if}</span>
                    </td>
                </tr>
                {foreachelse}
                <tr>
                    <td colspan="3">No transactions found</td>
                </tr>
                {/foreach}
                <tr>
                    <td colspan="3">&nbsp;
                </td>
                {if $totals}
                <tr>
                    <td>
                      <span class="fontWeight-regular">Total for selected options:</span>
                    </td>
                    <td nowrap>
                    {foreach from=$totals item=t}
                      <div class="flex align-items-center">
                      <span class="mr-1">{$t.amount|fiat:$t.ec}</span>
                      <img class="img-currency" src="images/{$t.ec}.gif">
                      </div>
                    <br>{/foreach}
                    </td>
                    <td></td>
                </tr>
                {/if}
              </tbody>
          </table>
          </div>
          {paginator col=$paginator.col cur=$paginator.cur url="javascript:go('%s')"}
          {include file="footer.tpl"}