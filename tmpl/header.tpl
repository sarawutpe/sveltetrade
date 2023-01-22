<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {* Favicon *}
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
  <link rel="manifest" href="./assets/site.webmanifest">
  <link rel="mask-icon" href="./assets/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>{$settings.site_name|default:""} - {$meta_title|default:""}</title>
  <link rel="stylesheet" href="./assets/css/fabric-icons.css" />
  <script type="module" src="./assets/js/web-components.min.js"></script>
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <script type="text/javascript" src="./assets/js/script.min.js"></script>
  <script type="text/javascript" src="./assets/js/apexcharts.js"></script>
</head>

<body>
  <div id="loader">
    <fluent-progress-ring></fluent-progress-ring>
  </div>
  <div id="portal" class={if $userinfo.logged === 0}{"sticky"}{/if}>
    <div class="portal-menu">
      <div class="container">
        <div class="menu">
          <div class="header-nav">
            <div class="portal-logo">
              <a href="{"/"|encurl}">
                <img src="./assets/img/logo.png" width="200px" height="25px" alt="logo" />
              </a>
            </div>
            {if $userinfo.logged === 1}
              <div id="mobile-menu-icon">
                <i class="ms-Icon ms-Icon--WaffleOffice365 fontSize-xl"></i>
              </div>
            {/if}
          </div>
          {if $userinfo.logged === 1}
            {* If cookie is empty *}
            {if !$smarty.cookies.profile}
              {$url = "http://bitfonix.com:3000/api/profile/`$userinfo.id`"}
              {$fetch = file_get_contents($url)}
              {$res = $fetch|json_decode}
              {$new_profile = $res->data->profile}
              {$set_cookie = setcookie("profile", $res->data->profile|default:"default")}
            {/if}
            {* Assign profile val from cookie or fetch new *}
            {$cookies = $smarty.cookies.profile}
            {if $cookies == "default"}
              {$profile = ""}
            {else if $cookies}
              {$profile = $cookies}
            {else}
              {$profile = $new_profile}
            {/if}
            {* Concat string or set default from base64 image *}
            {$profile_src = ""}
            {if $profile}
              {$profile_src = "http://bitfonix.com:3000/public/`$profile`"}
            {else}
              {$profile_src = "data:image/webp;base64,UklGRnYIAABXRUJQVlA4IGoIAADwiACdASqAAoACPpFIoUwlpKMiIrUIELASCWlu4XaVEZNzcH5C/oPnQwB2G11Nof2H/xGXoEPZIn6ExhHq//rwfgZVWB9a6I+tdEfWuiPrXRH1rolhm8fWuiPrXRH1roj610R9a6I+tdEfWuiPrXRH1roj610R9a6I+tdEfWuiPrXRH1roj610R9a6I+tdEfWuiPrXRH1roj610R9a6I+tdEfWuiPrXRH1roj610R9a6I+tdEfWuiPrXRH1roj610R9a6I+tdEfWuiPrXRH1roj610R9a6I+syWJdTcmCX8ZyC6LuERUY/3MdTk2mh35WhISPrXRH1roj610R9ZjwZfP4MJFHEYP62RJViZCDNPa9a6I+tdEfWuiPrMMIWI0xSH0+JdTVeCmy+YFRqafI/wot0R9a6ItEnoqs5EIcP7uQp5MDrhRM/u44f3ccP7uOH9Yofgyr3RH1roWK2tPYwIr610R9a6I+tdEenPSz06Zkboj61lUI/5d1roj610R9a6I+szqSQvV0R9a6I9NeyS+uiPrXRH1roj61mEKIDNmnyP8ItM4ZTdEfWuiPrXRH1mpd7RMcP7uMDkprXqLdEfWuiPrXQtVFsSpJeot0R9ZmHgNeot0R9a6I+tdC36U6cGl0R9a6ItaDXC8cvUW6I+tdEfWuhbtsaBHD+7jh/WIx2lqLtTT5H+FFuiPrNmoSHIamN3Ci3RHpowdwVeJKtdEfWuiPrXRH1rKXU0hA8xjx/wot0LH5rR6kcL9qafI/wot0R9a5go4TBD+oBMW/dxw3JMeBCwkme1NPkf4UW6I+tdEpPO6LaS6slxt+7dYAUYKCBNemmeR/hRboj610R9a6I+lGak2wF3phRNHacsopDzqXYcD2uy3ldU2Mu1NPkf4UW6I+tdEemlwC3WeCqYkxv/TvEqCDZe7xFqKS0SHCZIhrhiD610R9a6I+tdEemrdxKbcYIvYRLcjxwrECFnj7qNogrP6C8MPKf3ccP7uOH925wnsbDX7Zo5Xeuisot0R9tXkra7Gc5bzZid0R9a6I+tdC1ewmE/CHR6OTCi3RH1roX+SthFMUzyqASEj610R9K2uxnFsGWR/hRboj610ZZ41m5nGepVvdxw/u3NkxRWTiCi3RH1roj610R6ckayS310B1s0+R7IAMg1MXqRY26I+tdEfWuiPrMFkqWerBiM5j/Ci3MGDG9kWN6Y5YW6I+tdEfWuiPrXiAemvvP8IiPrWcAN9fk5uOH93HD+7jh/dxvekxz/q1t2pp4zDVln56LdEfWuiPrXRH1roi0TS6cdMcP60r7c3iTT5H+FFuiPrXRH1rL1XNPnRMb3luM+acfRGgCNAEaAaarA9WB+s9Yp6xUtn0RoAjcFHmMU9bLkFyNNYZeot0SwvctuwVl7lt2CsvctuwVl2pp8j/Ci3RH1roj610R9a6I+tdEfWuiPrXRH1roj610R9a6IsAA/v9kAK+79tNBQLHEZ56t2CZAgAAAAAAAAAAAC3H8Yz0yVb72NMfzGZCCxPUhXMxlwxDeWPs+YZrlRtFPkQY7G44+GHYD/N2E7Cu3XgQZAPY2wVeWP/yPJNJd3tf+ogRFWIwdTcezWySpL8cULzz2/EaOMsfE0K0urgySqSHgki6XMPuf9rAP4PmOVwyytL1iyI6FgFuQJJT1NwwiMUSl7EMMRFLlVZFOWduI0QFsoJinTfF0fEngPiZatmbekpkPLUn0+qga/OlL+sTnvGcvWQ4TpS2rsn7K3EqN+HnEQJOpLPDMhLjhRVq6AfG17BvN7okq66UrT3lf7+zItiBaJvaQaqYGGWmaKwJeZ70qX8Dabfg/qRIIB+Yc1alSPvrREsVuNVJo0M7LB0PwSyon+U/Yqfm1mgHSWbQ26U09/x7/sLXjd6Ar5kFGcyV2r4X+1babFx6XA6MyvL+fJILEjafOJWDDa/WBcXFMJvGHtMUikWoOeA4dnBfckIUC8+RmRx1AfMMVEjGAGzrtH/It2WG6Zn+ie+qVkUMnUCvQGBq6aFInai0Ec3kfZyP/Yg9KYxMrznMX273ODOAda9Fncz2Q466n8i0Cq+IP9k4E2EUn8KwqAhn8kExswo5NOzv87OEahZNxDjqlKosvVZMKHC3Xqg2CZo+i05qOBLBsGeAaPaolP9tn6FXMkvs8Y69R4OfRMGQSRpEVQO8bxiH32xvB0QJGBU2R/q7lUnQOUxAoQqRW9idKigjvzWUEAWSVIdacPEekzxFnd3XjCBYhh+u+ctTdL4yUnBRO9wDDx63+oAGOo/dO5OU5vLVsGQA/woAm03e9lCNvwpZ3iDXzZEwZAMndZ1VgTXC8oNWyp3RVjrKxHWRXNllzQrOzpq5okgM+BbHix9kN/h0bqd+t+7Zj2DtIcsIykB65cO529qdZ9BAGYIPGkbR1zxDYBe3DySp/2vvWauaPRlvF98/gQBMWn2+odqgmMUQiIzcOONrD70PRQ5szE5nF+fuzR7YoX6+KJWLDb8W0o8KZAlc8d/lprhD4tpMuh1zEgim0Y8ne1zHylNGQ/EBauqexP7grrI/gNXNoTfNz+8tiYX+7ezc2jntGXYL8eaEqdlb9Z2m57P5OIWYkaFH4B27Ihy+JvnY4HvJfZcSu1AW4foZNpN+tJ5yx8y6Z92lfbK5TrNngeOZJ1hkiJ2pqkPXfGfJ80WcsfIYHyiaAq9MhAZKBNJdHHHrBHY16b24vB0tJGxtZclbD+NKgIgEIzVQRpqNrqPPLplFEMG9OECRPnuywco+xXyyNO6CAMs0BIHCaVmQ8k4gGxyUleSHK3tLsacvih24BshMkIpMUq7cmlconRP3iuh4CahevATUL137xe50nsQgAAAAAAAA="}
            {/if}

            <div class="profile-group">
              <img onclick="hiddenDialog(false)" class="profile" src="{$profile_src}" alt="profile" />
              <div class="text">
                <span class="fontSize-l">{$userinfo.username}</span>
                <div>
                  <span
                    class="fontSize-l fontWeight-regular">{fiat}{$userinfo.balance_totals.balance|amount_format}</span>
                </div>
              </div>
            </div>
            {* Dialog *}
            <fluent-dialog id="defaultDialog" class="dialog" hidden trap-focus modal>
              <div class="flex justify-content-between align-items-center px-3">
                <h2>Update profile picture</h2>
                <div onclick="hiddenDialog(true)" class="close-button">
                  <i class="ms-Icon ms-Icon--StatusErrorFull"></i>
                </div>
              </div>
              <fluent-divider></fluent-divider>
              <div class="dialog-content">
                <form id="forms" method="" enctype="multipart/form-data">
                  <div class="file-container">
                    <div class="file-content mx-3">
                      <div class="preview">
                        <input type="hidden" id="user_id" value="{$userinfo.id}">
                        <input type="hidden" id="file-blob" value="">
                        <input type="file" id="file" class="file" name="file" accept="image/*">
                        <img id="preview-file" src="{$profile_src}">
                      </div>
                    </div>
                    <div class="flex flex-column justify-content-evenly align-items-center mx-3">
                      <span id="fileSize" class="fontWeight-regular">Max upload size 1 (MB)</span>
                      <div onclick="handleDelete()" class="menu-item active cursor-pointer">
                        <i class="ms-Icon ms-Icon--Delete fontSize-l"></i>
                        <span>Remove</span>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-content-center px-3 pb-4">
                    <fluent-button onclick="handleSubmit()" type="button" id="upload-button" appearance="accent"
                      class="mr-2">Update</fluent-button>
                    <fluent-button onclick="hiddenDialog(true)" type="button" appearance="outlind">Cancel</fluent-button>
                  </div>
                </form>
              </div>
            </fluent-dialog>
          {/if}

          {if $userinfo.logged == 1}
            <script src="/assets/js/axios.min.js"></script>
            <script type="text/javascript">
              var userId = {$userinfo.id}
              const defaultDialog = document.getElementById('defaultDialog')
              const forms = document.getElementById('forms')
              const previewFile = document.getElementById('preview-file')
              const fileSizeEle = document.getElementById('fileSize')
              const uploadButton = document.getElementById('upload-button')
              const deleteButton = document.getElementById('delete-button')
              const fileInput = document.getElementById('file')
              var resetval = 0
              // handle submit
              function handleSubmit(e) {
                // remove cookie
                if (fileInput.files[0] || resetval == 1) {
                  document.cookie = "profile=; Max-Age=0"
                }
                var formdata = new FormData();
                formdata.append("user_id", userId);
                if (fileInput.files[0]) {
                  formdata.append("file", fileInput.files[0])
                } else {
                  formdata.append("file", "")
                }
                axios.put('http://bitfonix.com:3000/api/profile/' + userId + "?reset=" + resetval, formdata)
                  .then((res) => {
                    if (res.data?.success) {
                      location.reload()
                    }
                  }).catch((err) => {
                    console.log(err)
                    location.reload()
                  })
              }
              // handle delete
              function handleDelete() {
                resetval = 1
                if (!previewFile.src.startsWith("data:image/webp;")) {
                  previewFile.style.opacity = 0
                  previewFile.src = ""
                }
                fileSizeEle.innerText = "Max upload size 1 (MB)"
                forms.reset()
              }
              // dialog
              function hiddenDialog(value) {
                defaultDialog.hidden = Boolean(value)
              }
              // file change
              file.addEventListener("change", (event) => {
                if (!event.target.files.length) {
                  return
                }
                const fileSize = event.target.files[0].size
                if (fileSize > 1048576) {
                  fileSizeEle.style.color = "#d13438"
                  uploadButton.disabled = true
                  return
                }
                fileSizeEle.style.color = ""
                uploadButton.disabled = false
                const objectURL = URL.createObjectURL(event.target.files[0])
                if (objectURL) {
                  previewFile.src = objectURL;
                  previewFile.style.opacity = 1
                }
                if (typeof objectURL != "string") {
                  uploadButton.disabled = true
                }
              })
              // reset cookie
              const cookieVal = "{$profile}"
              if (cookieVal != "default" || cookieVal.length != 36) {
                document.cookie = "profile=default"
              }
            </script>
          {/if}

{include file="nav.tpl"}