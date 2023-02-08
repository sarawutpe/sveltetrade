{include file="header.tpl" meta_title="Deposit"}
<span class="fontSize-xl fontWeight-regular mb-3">Deposit Status</span>
{if $process eq 'yes' || $frm.m_status eq 'success'}
    <div class="alert success">We have received your deposit. Thank you!</div>
{else}
    <div class="alert error">We have not received your deposit. Please try again.</div>
{/if}
{include file="footer.tpl"}