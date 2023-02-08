            <div class="menu-group">
              {if $userinfo.logged == 1}
                <a href="{"?a=account"|encurl}" class="menu-item {if $smarty.get.a == "account"}active{/if}">
                  <i class="ms-Icon ms-Icon--Home fontSize-xl"></i>
                  <span>Home</span>
                </a>
                <a href="{"?a=deposit"|encurl}" class="menu-item {if $smarty.get.a == "deposit"}active{/if}">
                  <i class="ms-Icon ms-Icon--Money fontSize-xl"></i>
                  <span>Deposit</span>
                </a>
                <a href="{"?a=withdraw"|encurl}" class="menu-item {if $smarty.get.a == "withdraw"}active{/if}">
                  <i class="ms-Icon ms-Icon--Bank fontSize-xl"></i>
                  <span>Withdraw</span>
                </a>
                <a href="{"?a=history"|encurl}" class="menu-item {if $smarty.get.a == "history"}active{/if}">
                  <i class="ms-Icon ms-Icon--LineChart fontSize-xl"></i>
                  <span>History</span>
                </a>
                <a href="{"?a=deposit_list"|encurl}" class="menu-item {if $smarty.get.a == "deposit_list"}active{/if}">
                  <i class="ms-Icon ms-Icon--FullHistory fontSize-xl"></i>
                  <span>Deposit History</span>
                </a>
                <a href="{"?a=referals"|encurl}" class="menu-item {if $smarty.get.a == "referals"}active{/if}">
                  <i class="ms-Icon ms-Icon--SplitObject fontSize-xl"></i>
                  <span>Referrals</span>
                </a>
                <a href="{"?a=security"|encurl}" class="menu-item {if $smarty.get.a == "security"}active{/if}">
                  <i class="ms-Icon ms-Icon--AuthenticatorApp fontSize-xl"></i>
                  <span>Security</span>
                </a>
                <a href="{"?a=edit_account"|encurl}" class="menu-item {if $smarty.get.a == "edit_account"}active{/if}">
                  <i class="ms-Icon ms-Icon--Settings fontSize-xl"></i>
                  <span>Settings</span>
                </a>
                <a href="{"?a=logout"|encurl}" class="menu-item">
                  <i class="ms-Icon ms-Icon--SignOut fontSize-xl"></i>
                  <span>Exit</span>
                </a>
              {/if}
            </div>
            </div>
            </div>
            </div>
            <div id="portal-content">
<div class="container">