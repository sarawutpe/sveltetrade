{assign var="allow" value="all"}
{assign var="meta_title" value=""}
{include file="header.tpl"}
<h3>Referrers Top 20</h3><p>{loaddata name="top_referrals" order="refs_add_funds1" start_date=$settings.refs10_start_date limit=20 var="stats"} {if $stats} {foreach from=$stats item=s name=ref} {/foreach} {else} {/if}&nbsp;</p><figure class="table"><table><tbody><tr><td>#</td><td>Username</td><td><strong>Active</strong></td><td><strong>Total</strong></td></tr><tr><td>&nbsp;</td><td><strong>{$s.username|escape:html}</strong></td><td><strong>{$s.active_col}</strong></td><td><strong>{$s.col}</strong></td></tr><tr><td colspan="4">No referrers found</td></tr></tbody></table></figure>
{include file="footer.tpl"}