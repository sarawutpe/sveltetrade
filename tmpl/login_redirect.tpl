<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="refresh" content="2; url={"?a=account"|encurl}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {* Favicon *}
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
  <link rel="manifest" href="./assets/site.webmanifest">
  <link rel="mask-icon" href="./assets/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>{$settings.site_name|default:""}</title>
  <script type="module" src="./assets/js/web-components.min.js"></script>
  <link rel="stylesheet" href="./assets/css/styles.css" />
</head>

<body style="background-color: #000000">
  <div id="loader">
    <fluent-progress-ring></fluent-progress-ring>
    <span style="margin-top: 40px" class="fontSize-xl fontWeight-semilight">Loading...</span>
  </div>
</body>

</html>