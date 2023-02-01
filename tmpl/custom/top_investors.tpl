{assign var="allow" value="none"}
{assign var="meta_title" value=""}
{include file="header.tpl"}
<p>{loaddata name="top_investors" limit=20 page=$frm.p var="top_investors" active=1 pages_var=paginator} {foreach from=$top_investors item=s} {/foreach}&nbsp;</p><figure class="table"><table><tbody><tr><td>{$s.username}</td><td>{$currency_sign}{$s.amount}</td></tr></tbody></table></figure><p>{paginator col=$paginator.col cur=$paginator.cur url="?a=top_investors&amp;p=%s"}</p>
{include file="footer.tpl"}