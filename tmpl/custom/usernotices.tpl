{assign var="allow" value="all"}
{assign var="meta_title" value=""}
{include file="header.tpl"}
<p>{loaddata name="user_notices" limit=1 page=$frm.p var="notices" all=1 pages_var=paginator} {foreach from=$notices item=n} {/foreach}&nbsp;</p><figure class="table"><table><tbody><tr><td>{$n.title}</td><td>{$n.text}</td><td>{$n.date}</td></tr></tbody></table></figure><p>{paginator col=$paginator.col cur=$paginator.cur url="?a=usernotices&amp;p=%s"}</p>
{include file="footer.tpl"}