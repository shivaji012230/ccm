<md-toolbar>
    <div class="md-toolbar-tools">
        <div layout layout-align="space-between center" flex>
            <div><h1>ccn logo</h1></div>
            <div layout layout-align="center center">
                <md-button class="md-raised  md-accent" ui-sref="leads">All Leads</md-button>
                <md-menu-bar layout layout-xs="row">
                    <md-menu>
                        <button  ng-click="$mdOpenMenu()">
                            Manage
                        </button>
                        <md-menu-content>
                            <md-menu-item><md-button href="/employee">EMPLOYEES</md-button></md-menu-item>
                            <md-menu-item><md-button href="/rcp">RCP</md-button></md-menu-item>
                        </md-menu-content>
                    </md-menu>
                    <md-menu>
                        <button  ng-click="$mdOpenMenu()">
                            UserName
                        </button>
                        <md-menu-content>
                            <md-menu-item><md-button>profile</md-button></md-menu-item>
                            <md-menu-item><md-button href="logout.php">Logout</md-button></md-menu-item>
                        </md-menu-content>
                    </md-menu>
                </md-menu-bar>
            </div> 
        </div>
    </div>
</md-toolbar>