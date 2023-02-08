<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
  <link rel="manifest" href="./assets/site.webmanifest">
  <link rel="mask-icon" href="./assets/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>{$settings.site_name|default:"Svelletrade"} - {$meta_title|default:""}</title>
  <link rel="stylesheet" href="./assets/css/fabric-icons.css" />
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <script type="module" src="./assets/js/web-components.min.js"></script>
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <script type="text/javascript" src="./assets/js/apexcharts.js"></script>
  {literal}
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5SX0SYCQ4W"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-5SX0SYCQ4W');
    </script>
  {/literal}
</head>

<body>
  <div id="loader">
    <fluent-progress-ring></fluent-progress-ring>
  </div>

  <div id="portal" class={if !$userinfo.logged}{"sticky"}{/if}>
    <div class="portal-menu">
      <div class="container">
        <div class="menu">
          <div class="header-nav">
            <div class="portal-logo">
              <a href="{"/"|encurl}">
                <img src="./assets/img/logo.png" width="180px" height="22px" alt="logo" />
              </a>
            </div>
            {if $userinfo.logged === 1}
              <div id="mobile-menu-icon">
                <i class="ms-Icon ms-Icon--WaffleOffice365 fontSize-xl"></i>
              </div>
            </div>
            <div class="profile-group">
              <img class="profile" src="./assets/img/avatar.png" width="64px" height="64px" alt="avatar" />
              <div class="text">
                <span class="fontSize-l">{$userinfo.username}</span>
                <div>
                  <span
                    class="fontSize-l fontWeight-regular">{fiat}{$userinfo.balance_totals.balance|amount_format}</span>
                </div>
              </div>
            {/if}
          </div>
{include file="nav.tpl"}