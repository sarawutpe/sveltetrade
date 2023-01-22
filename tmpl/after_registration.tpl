{include file="header.tpl" meta_title="Redirect"}
<meta http-equiv="refresh" content="3; url={"?a=login"|encurl}" />
<div class="alert success">Registration completed</div>

<div class="flex">
  <span class="fontSize-mPlus mr-2">Please wait while redirecting...</span>
  <a class="fontSize-m" href="{"?a=login"|encurl}">Login</a>
</div>

{include file="footer.tpl"}