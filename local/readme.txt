http://bitfonix.com/admin.php?a=login

user
- demo
- 1234

admin
root
1234

Alternative Passphrase: 1234

// default js fetch
{* <img id="avatar" onclick="handleDialog(false)" class="avatar" src="" draggable="false" alt="avatar" /> *}

// get avatar
axios.get('http://bitfonix.com:3000/api/avatar/'+userId).then((res) => {
  if (res.data?.success) {
    console.log(res.data)
  }
}).catch((err) => {
  console.log(err)
})


<!-- smarty fetch api -->
{$url = "url/api/avatar/`$userinfo.id`"}
{$fetch = file_get_contents($url)}
{$res = $fetch|json_decode}
<img onclick="handleDialog(false)" class="avatar" src="url/public/{$res->data->avatar}" />
