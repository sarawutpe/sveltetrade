<?php /* Smarty version 3.1.27, created on 2023-01-21 17:14:13
         compiled from "C:\xampp\htdocs\ivypay\tmpl\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4121275363cc0f557c8941_34716192%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c7e6762139f4b1c8bcb42286f81414628aef58d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ivypay\\tmpl\\header.tpl',
      1 => 1674317426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4121275363cc0f557c8941_34716192',
  'variables' => 
  array (
    'settings' => 0,
    'meta_title' => 0,
    'userinfo' => 0,
    'url' => 0,
    'fetch' => 0,
    'res' => 0,
    'cookies' => 0,
    'new_profile' => 0,
    'profile' => 0,
    'profile_src' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63cc0f557db456_50308681',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63cc0f557db456_50308681')) {
function content_63cc0f557db456_50308681 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\xampp\\htdocs\\ivypay\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '4121275363cc0f557c8941_34716192';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['site_name'])===null||$tmp==='' ? '' : $tmp));?>
 - <?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['meta_title']->value)===null||$tmp==='' ? '' : $tmp));?>
</title>
  <link rel="stylesheet" href="./assets/css/fabric-icons.css" />
  <?php echo '<script'; ?>
 type="module" src="./assets/js/web-components.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <?php echo '<script'; ?>
 type="text/javascript" src="./assets/js/script.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="./assets/js/apexcharts.js"><?php echo '</script'; ?>
>
</head>

<body>
  <div id="loader">
    <fluent-progress-ring></fluent-progress-ring>
  </div>
  <div id="portal" class=<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] === 0) {
echo smarty_modifier_myescape("sticky");
}?>>
    <div class="portal-menu">
      <div class="container">
        <div class="menu">
          <div class="header-nav">
            <div class="portal-logo">
              <a href="<?php echo smarty_modifier_myescape(encurl("/"));?>
">
                <img src="./assets/img/logo.png" width="200px" height="25px" alt="logo" />
              </a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] === 1) {?>
              <div id="mobile-menu-icon">
                <i class="ms-Icon ms-Icon--WaffleOffice365 fontSize-xl"></i>
              </div>
            <?php }?>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] === 1) {?>
            
            <?php if (!$_COOKIE['profile']) {?>
              <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable("http://bitfonix.com:3000/api/profile/".((string)$_smarty_tpl->tpl_vars['userinfo']->value['id']), null, 0);?>
              <?php $_smarty_tpl->tpl_vars['fetch'] = new Smarty_Variable(file_get_contents($_smarty_tpl->tpl_vars['url']->value), null, 0);?>
              <?php $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable(json_decode($_smarty_tpl->tpl_vars['fetch']->value), null, 0);?>
              <?php $_smarty_tpl->tpl_vars['new_profile'] = new Smarty_Variable($_smarty_tpl->tpl_vars['res']->value->data->profile, null, 0);?>
              <?php $_smarty_tpl->tpl_vars['set_cookie'] = new Smarty_Variable(setcookie("profile",(($tmp = @$_smarty_tpl->tpl_vars['res']->value->data->profile)===null||$tmp==='' ? "default" : $tmp)), null, 0);?>
            <?php }?>
            
            <?php $_smarty_tpl->tpl_vars['cookies'] = new Smarty_Variable($_COOKIE['profile'], null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['cookies']->value == "default") {?>
              <?php $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable('', null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['cookies']->value) {?>
              <?php $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable($_smarty_tpl->tpl_vars['cookies']->value, null, 0);?>
            <?php } else { ?>
              <?php $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable($_smarty_tpl->tpl_vars['new_profile']->value, null, 0);?>
            <?php }?>
            
            <?php $_smarty_tpl->tpl_vars['profile_src'] = new Smarty_Variable('', null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['profile']->value) {?>
              <?php $_smarty_tpl->tpl_vars['profile_src'] = new Smarty_Variable("http://bitfonix.com:3000/public/".((string)$_smarty_tpl->tpl_vars['profile']->value), null, 0);?>
            <?php } else { ?>
              <?php $_smarty_tpl->tpl_vars['profile_src'] = new Smarty_Variable("data:image/webp;base64,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", null, 0);?>
            <?php }?>

            <div class="profile-group">
              <img onclick="hiddenDialog(false)" class="profile" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['profile_src']->value);?>
" alt="profile" />
              <div class="text">
                <span class="fontSize-l"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</span>
                <div>
                  <span
                    class="fontSize-l fontWeight-regular"><?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);
echo smarty_modifier_myescape(amount_smarty_format($_smarty_tpl->tpl_vars['userinfo']->value['balance_totals']['balance']));?>
</span>
                </div>
              </div>
            </div>
            
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
                        <input type="hidden" id="user_id" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['id']);?>
">
                        <input type="hidden" id="file-blob" value="">
                        <input type="file" id="file" class="file" name="file" accept="image/*">
                        <img id="preview-file" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['profile_src']->value);?>
">
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
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>
            <?php echo '<script'; ?>
 src="/assets/js/axios.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript">
              var userId = <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['id']);?>

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
              const cookieVal = "<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['profile']->value);?>
"
              if (cookieVal != "default" || cookieVal.length != 36) {
                document.cookie = "profile=default"
              }
            <?php echo '</script'; ?>
>
          <?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>