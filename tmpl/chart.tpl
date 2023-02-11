<div id="chart"></div>

{loaddata name="transactions" user=$userinfo.id type="earning" var="trans"}
{$nowMonth = $smarty.now|date_format:"%m"}
{$nowYear = $smarty.now|date_format:"%y"}

{foreach from=$trans item=t}
  {$tMonth = $t.date|date_format:"%m"}
  {$tYear = $t.date|date_format:"%y"}
  {if $tYear == $nowYear}
    {if $tMonth == 1}
      {assign var="initialJan" value=$initialJan+$t.amount}
    {elseif $tMonth == 2}
      {assign var="initialFeb" value=$initialFeb+$t.amount}
    {elseif $tMonth == 3}
      {assign var="initialMar" value=$initialMar+$t.amount}
    {elseif $tMonth == 4}
      {assign var="initialApr" value=$initialApr+$t.amount}
    {elseif $tMonth == 5}
      {assign var="initialMay" value=$initialMay+$t.amount}
    {elseif $tMonth == 6}
      {assign var="initialJun" value=$initialJun+$t.amount}
    {elseif $tMonth == 7}
      {assign var="initialJul" value=$initialJul+$t.amount}
    {elseif $tMonth == 8}
      {assign var="initialAug" value=$initialAug+$t.amount}
    {elseif $tMonth == 9}
      {assign var="initialSep" value=$initialSep+$t.amount}
    {elseif $tMonth == 10}
      {assign var="initialOct" value=$initialOct+$t.amount}
    {elseif $tMonth == 11}
      {assign var="initialNov" value=$initialNov+$t.amount}
    {elseif $tMonth == 12}
      {assign var="initialDec" value=$initialDec+$t.amount}
    {/if}
  {/if}
{/foreach}

{if 1 <= $nowMonth}
  {append var='initialAmount' value=$initialJan|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Jan'}
{/if}
{if 2 <= $nowMonth}
  {append var='initialAmount' value=$initialFeb|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Feb'}
{/if}
{if 3 <= $nowMonth}
  {append var='initialAmount' value=$initialMar|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Apr'}
{/if}
{if 4 <= $nowMonth}
  {append var='initialAmount' value=$initialApr|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Apr'}
{/if}
{if 5 <= $nowMonth}
  {append var='initialAmount' value=$initialMay|default:0|string_format:"%.2f"}
  {append var='initialDate' value='May'}
{/if}
{if 6 <= $nowMonth}
  {append var='initialAmount' value=$initialJun|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Jun'}
{/if}
{if 7 <= $nowMonth}
  {append var='initialAmount' value=$initialJul|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Jul'}
{/if}
{if 8 <= $nowMonth}
  {append var='initialAmount' value=$initialAug|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Aug'}
{/if}
{if 9 <= $nowMonth}
  {append var='initialAmount' value=$initialSep|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Sep'}
{/if}
{if 10 <= $nowMonth}
  {append var='initialAmount' value=$initialOct|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Oct'}
{/if}
{if 11 <= $nowMonth}
  {append var='initialAmount' value=$initialNov|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Nov'}
{/if}
{if 12 <= $nowMonth}
  {append var='initialAmount' value=$initialDec|default:0|string_format:"%.2f"}
  {append var='initialDate' value='Dec'}
{/if}

<script>
  const amountData = {$initialAmount|json_encode} || []
  const dateData = {$initialDate|json_encode} || []

  var options = {
    series: [{
      name: "Earned",
      data: amountData
    }, ],
    chart: {
      height: 300,
      type: "area",
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
    },
    xaxis: {
      type: "category",
      categories: dateData
    },
  };
  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>