<?php /* Smarty version 3.1.27, created on 2023-01-24 17:20:40
         compiled from "my:edit_hyip_bottom" */ ?>
<?php
/*%%SmartyHeaderCode:155061719063d00558567736_84384256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad998acc6f8b0b41039c1469c1fff2bd6e13c0e' => 
    array (
      0 => 'my:edit_hyip_bottom',
      1 => 1674577240,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '155061719063d00558567736_84384256',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d0055856a789_58198620',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d0055856a789_58198620')) {
function content_63d0055856a789_58198620 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '155061719063d00558567736_84384256';
?>
 <br> <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.7/highcharts.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
> var currencyPow = 2; var chart_options = { chart: { type: "line" }, title: { text: "Earnings Preview" }, subtitle: { text: "" }, legend: { enabled: false }, xAxis: { type: "datetime", labels: { format: "{value:%b %e}" } }, yAxis: { min: 0, title: { text: "Amount" } }, tooltip: { headerFormat: "<span style=font-size:10px>{point.key}</span><table>", pointFormat: "<tr><td style=color:{series.color};padding:0>{series.name}: </td>" + "<td style=padding:0 nowrap><b>{point.y}</b></td></tr>", footerFormat: "</table>", xDateFormat: "%b %e", shared: true, useHTML: true }, plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } } };  chart_options.tooltip.valuePrefix = "<?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
";  $(document).ready( function() { drawGraph(); }); function drawGraph() { var data = CalculateProfit(); if (!data) { data = {}; data.profit = []; data.reinv = []; data.earn = []; } var series = [ {"name":"Profit","color":"#ffbb00","data":data.profit}, {"name":"Principal","color":"#00c292","data":data.reinv}, {"name":"Earning","color":"#92c200","data":data.earn}, ]; chart_options.series = series; $("#chart_earnings").highcharts(chart_options); } function CalculateProfit() { var error = ""; var calc_amount = parseFloat(document.getElementById("calc_deposit").value); if (isNaN(calc_amount)) error = "Invalid Deposit Amount"; if (error) { showError(error); return; } var parCompound = parseInt(document.getElementById("calc_compound").value); if (isNaN(parCompound)) error = "Invalid Compound Value"; if (error) { showError(error); return; } var parPercent = 0; var percs = document.nform.elements["rate_percent[]"]; var mins = document.getElementsByClassName("rate_min_amount"); var maxs = document.getElementsByClassName("rate_max_amount"); for (i = 0; i < percs.length; i++) { var max = parseFloat(maxs[i].value); if (isNaN(max)) max = 0; var min = parseFloat(mins[i].value); if (isNaN(min)) min = 0; var pers = parseFloat(percs[i].value); if (isNaN(pers)) pers = 0; if (min <= calc_amount && (max == 0 || max >= calc_amount)) { parPercent = pers; break; } } if (parPercent == 0) error = "Percent not found for entered Deposit"; if (error) { showError(error); return; } var durScale = "d"; var periodMul = 1; var periodScale = document.nform.hperiod.value; var matches = periodScale.match(/^(\d+)(\w)/); if (matches) { periodMul = matches[1]; periodScale = matches[2]; } if (periodMul < 1) { periodMul = 1; } if (periodScale == "b-w") { periodMul = 2; periodScale = "w"; } if (periodScale == "h" || periodScale == "endh") { durScale = "h"; } if (periodScale == "d" && document.nform.work_week.checked) { periodScale = "wd"; } var durNum = parseInt(document.nform.hq_days.value); if (isNaN(durNum)) error = "Package Duration is not set"; if (error) { showError(error); return; } if (document.nform.hq_days_nolimit.checked) { durNum = 365; } var principalBack = 0; if (document.nform.hreturn_profit.selectedIndex == 1) { var principalBack = 100; var hold_percent = parseFloat(document.nform.hreturn_profit_percent.value); if (isNaN(hold_percent)) hold_percent = 0; principalBack -= hold_percent; } var compoundBack = 0; if (document.nform.compound_return.selectedIndex == 1) { var compoundBack = 100; } showError(""); error = null; var todayDate = new Date(); todayDate.setHours(0); todayDate.setMinutes(0); todayDate.setSeconds(0); todayDate.setMilliseconds(0); var today = todayDate.getTime(); var endDate = new Date(); endDate.setHours(0); endDate.setMinutes(0); endDate.setSeconds(0); endDate.setMilliseconds(0); switch (durScale) { case "h": endDate.setTime(today + durNum * 60 * 60 * 1000); break; case "d": endDate.setTime(today + durNum * 24 * 60 * 60 * 1000); break; } var principal = reinv = calc_amount; var profit = principal * (principalBack / 100); creinv = []; cprofit = []; cearn = []; var curDate = new Date(); curDate.setHours(0); curDate.setMinutes(0); curDate.setSeconds(0); curDate.setMilliseconds(0); creinv.push([curDate.getTime(), reinv.toFixed(currencyPow)*1]); cprofit.push([curDate.getTime(), profit.toFixed(currencyPow)*1]); cearn.push([curDate.getTime(), 0]); var earnDay = true; while (curDate.getTime() < endDate.getTime()) { switch (periodScale) { case "end": case "endh": curDate = endDate; parCompound = 0; break; case "h": curDate.setTime(curDate.getTime() + periodMul * 60 * 60 * 1000); break; case "d": curDate.setTime(curDate.getTime() + periodMul * 24 * 60 * 60 * 1000); break; case "wd": curDate.setTime(curDate.getTime() + periodMul * 24 * 60 * 60 * 1000); earnDay = (curDate.getDay() == 0 || curDate.getDay() == 6) ? false : true; break; case "w": curDate.setTime(curDate.getTime() + periodMul * 7 * 24 * 60 * 60 * 1000); break; case "m": var years = Math.floor(periodMul / 12); var months = periodMul - years*12; curDate.setFullYear(curDate.getFullYear()+years, curDate.getMonth()+months, curDate.getDate()); break; case "y": curDate.setFullYear(curDate.getFullYear()+periodMul, curDate.getMonth(), curDate.getDate()); break; } if (earnDay) { var earn = reinv * (parPercent/100); var comp = earn * (parCompound/100); var prof = earn - comp; reinv += comp; profit += prof + comp * (principalBack / 100); } creinv.push([curDate.getTime(), reinv.toFixed(currencyPow)*1]); cprofit.push([curDate.getTime(), profit.toFixed(currencyPow)*1]); cearn.push([curDate.getTime(), prof.toFixed(currencyPow)*1]); } if (principalBack == 0 && compoundBack > 0) { profit += reinv-calc_amount; } document.getElementById("chart_principal").innerHTML = numberFormat(principal, currencyPow); document.getElementById("chart_percent").innerHTML = numberFormat(parPercent, 2); document.getElementById("chart_profit").innerHTML = numberFormat(profit, currencyPow); var totalROI = (profit/principal)*100; document.getElementById("chart_profit_percent").innerHTML = numberFormat(totalROI, 2); document.getElementById("chart_profit_percent").style.color = (totalROI <= 100) ? "red" : "green"; data = {}; data.reinv = creinv; data.profit = cprofit; data.earn = cearn; return data; } function showError(error) { var err = document.getElementById("calc_error"); err.innerHTML = error; err.style.display = ""; if (error == "") err.style.display = "none"; } function numberFormat (number, decimals, dec_point, thousands_sep) { number = (number + "").replace(/[^0-9+\-Ee.]/g, ""); var n = !isFinite(+number) ? 0 : +number, prec = !isFinite(+decimals) ? 0 : Math.abs(decimals), sep = (typeof thousands_sep === "undefined") ? "," : thousands_sep, dec = (typeof dec_point === "undefined") ? "." : dec_point, s = "", toFixedFix = function (n, prec) { var k = Math.pow(10, prec); return "" + Math.round(n * k) / k; }; s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split("."); if (s[0].length > 3) { s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep); } if ((s[1] || "").length < prec) { s[1] = s[1] || ""; s[1] += new Array(prec - s[1].length + 1).join("0"); } return s.join(dec); } <?php echo '</script'; ?>
>  <div id="chart_earnings" style="width:100%;height:300px;"></div> <table class="form nosize"> <tr> <th>Principal:</th><td><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
<b id="chart_principal"></b></td> <th>Profit:</th><td><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
<b id="chart_profit"></b></td> </tr> <tr> <th>Plan Percent:</th><td><b id="chart_percent"></b>%</td> <th>Total ROI:</th><td><b id="chart_profit_percent"></b>%</td> </tr> </table> <div class=error id="calc_error" style="display:none"></div> <table class="form nosize"> <tr> <th>Deposit:</th><td><input type=text id="calc_deposit" value=1000 class=inpts></td> <th id="calc_compound1">Compound:</th><td id="calc_compound2"><input type="range" min="0" max="100" value="0" step=1 class=inpts id="calc_compound"></td> <td><input type="button" value="Update Chart" class="sbmt btn" onclick="drawGraph()"></td> </tr> </table> <?php echo '<script'; ?>
 language=javascript> OF(); CheckCompound(); checkb(1); checkc(); checkrd(); <?php echo '</script'; ?>
> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Edit your package here.<br> <br> Set a name, a package duration and rates. Select a payment period.<br> <br> Earnings only on mon-fri:<br> Allow earnings only on working days.<br> <br> Allow depositing only after the user has deposited to the following package:<br> Administrator can select a 'parent' package. Then users should deposit to the parent package before depositing to the current one.<br> <br> Compounding:<br> Users can set a compounding percent while depositing. For example if one sets the 40% compounding, then the system will add 40% of earnings to the deposit, and 60% of earnings to the user's account.<br> <br> Compounding deposit amount limits:<br> Here you can limit the deposit amount for which compounding is possible.<br> <br> Compounding percents limits:<br> You can limit the compounding percent here. The range or solid values are possible to specify.<br> <br> Hold earnings at account:<br> Use this feature if you like user can withdraw earning after several days only.<br><br> Delay earnings:<br> You can set initial delay. Then user's deposits start work after specified days only <br><br> Example 1.<br> Creating a package for unlimited period with 1.2% daily:<br> Set the name, the rates, check 'no limit' in the duration field, select the 'daily' payment period, set the 'active' status.<br> Users will receive 1.2% daily for the unlimited period.<br> <br> Example 2.<br> Creating a package for 30 days with 1.3% daily:<br> Set the name, the rates, type 30 in the duration field, select the 'daily' payment period, set the 'active' status and check 'return principal'.<br> Users will receive 1.3% daily for 30 days and get their deposit back after 30 days. If they deposit $100, they will receive $100*0.013*30 + $100 (return principal) = $139.<br> <br> Example 3.<br> Creating a package for 1 year with 1.3% daily:<br> Set the name, the rates, type 365 in the package duration field, select 'daily' payment period, set 'active' status, do not check 'return principal'<br> Users will receive 1.3% daily for 1 year and will not receive his deposit after 365 days. If they deposit $100, they will receive $100*0.013*365 = $474.5.<br> <br> Example 4.<br> Creating a package for 1 month with rate 125%<br> Set the name, the rates, type 31 in the package duration field, select 'after the specified period' in the payment period field, set status 'active' and do not check 'return principal'.<br> Users will receive 125% in a month. If one deposits $100, he will receive $100*1.25 = $125.<br> <br> Example 5.<br> Creating a package for 1 month with 30% weekly rate:<br> Set the name, the rates, type 31 in the package duration field, select 'weekly' payment period, set 'active' status, do not check 'return principal'.<br> Users will receive 30% weekly. If one deposits $100, he will receive $100*0.30*4 = $120.<br> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>