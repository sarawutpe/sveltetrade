{include file="header.tpl"}

<span class="fontSize-xl fontWeight-regular mb-3">News</span>

{if $frm.id}
  {loaddata name="news_item" id=$frm.id var=new}
  {if $new}
    <fluent-card class="card flexflex-column mb-4">
      <span class="fontSize-xl fontWeight-regular mb-3">{$new.title}</span>
      {$new.full_text}
    </fluent-card>
  {else}
    <fluent-card class="card flexflex-column mb-4">
      <span class="fontSize-xl fontWeight-regular mb-3">Not Found</span>
    </fluent-card>
  {/if}
{else}

  {loaddata name="news" var=news page=$frm.p limit=20 pages_var=pages}
  {foreach from=$news item=n}
    <fluent-card class="card flexflex-column mb-4">
      <a name="{$n.id}"></a>
      <a href="{"?a=news&id=`$n.id`"|encurl}">{$n.title}</a>
      <div>
        {$n.full_text}<br>
        <small><i>{$n.date}</i></small>
      </div>
    </fluent-card>
  {foreachelse}
    <span class="fontSize-mPlus fontWeight-semibold mb-3">No news found</span>
  {/foreach}

  {paginator col=$pages.col cur=$pages.cur url="?a=news&p=%s"|encurl}

{/if}

{include file="footer.tpl"}