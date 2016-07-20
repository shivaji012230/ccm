<md-toolbar class="hdrtlbr">
    <div class="md-toolbar-tools" id="toastContainer" >
        <div layout layout-align="space-between center" class="logo" flex>
            <h1 ><a href="/leads">ccm logo</a></h1>
            <div layout layout-align="center center">
                <md-menu-bar layout="row" layout-xs="row">
                    <md-menu>
                        <button ng-click="$mdOpenMenu()" class="menu_cls">
                            Manage
                        </button>
                        <md-menu-content>
                            <md-menu-item><md-button href="/employee" >Employee</md-button></md-menu-item>
                            <md-menu-item><md-button href="/rcp">Rcp</md-button></md-menu-item>
                            <md-menu-item><md-button href="/leads">Leads</md-button></md-menu-item>
                        </md-menu-content>
                    </md-menu>
                    <md-menu>
                        <button ng-click="$mdOpenMenu()" class="menu_cls" >
                            <?php 
                            //session_start();
                            echo $_SESSION['user_name'];
                            ?>
                        </button>
                        <md-menu-content>
                            <md-menu-item><md-button href="/profile">Profile</md-button></md-menu-item>
                            <md-menu-item><md-button href="logout.php">Logout</md-button></md-menu-item>
                        </md-menu-content>
                    </md-menu>
                </md-menu-bar>
            </div> 
        </div>
    </div>
</md-toolbar>