<md-toolbar>
    <div class="md-toolbar-tools">
        <div layout layout-align="space-between center" flex>
            <div><h1>ccm logo</h1></div>
            <div layout layout-align="center center">
                <md-button class="md-raised  md-accent leads_bttn" href="/leads">All Leads</md-button>
                <md-menu-bar layout="row" layout-xs="row">
                    <md-menu>
                        <button ng-click="$mdOpenMenu()">
                            Manage
                        </button>
                        <md-menu-content>
                            <md-menu-item><md-button href="/employee">Employee</md-button></md-menu-item>
                            <md-menu-item><md-button href="/rcp">Rcp</md-button></md-menu-item>
                        </md-menu-content>
                    </md-menu>
                    <md-menu>
                        <button ng-click="$mdOpenMenu()">
                            <?php 
                            //session_start();
                            echo $_SESSION['user_name'];
                            ?>
                        </button>
                        <md-menu-content>
                            <md-menu-item><md-button>Profile</md-button></md-menu-item>
                            <md-menu-item><md-button href="logout.php">Logout</md-button></md-menu-item>
                        </md-menu-content>
                    </md-menu>
                </md-menu-bar>
            </div> 
        </div>
    </div>
</md-toolbar>