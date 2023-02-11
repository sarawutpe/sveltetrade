{assign var="allow" value="all"}
{assign var="meta_title" value=""}
{include file="header.tpl"}
<p>{loaddata name="last_members" limit=20 var=members}</p><h3>Members Last 10</h3><p><br>{foreach from=$members item=m} {foreachelse} {/foreach}&nbsp;</p><figure class="table"><table><tbody><tr><td>Username</td><td>Reg. Date</td><td>Referrer</td></tr><tr><td><strong>{$m.username|escape:html}</strong></td><td><strong>{$m.date}</strong></td><td><strong>{$m.ref_name|escape:html}</strong></td></tr><tr><td colspan="3">No members found</td></tr></tbody></table></figure>
{include file="footer.tpl"}