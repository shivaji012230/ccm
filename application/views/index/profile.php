<?php
//session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location:/login");
}
?>
<div layout="column" class="prflPrntDiv" layout-align=''>
    <md-white-frame  class="md-whiteframe-1dp" layout='row' layout-xs="row" layout-align="start end" layout-align-xs="start end"  >
        <img id="prfPic" ng-src="images/shivaji.jpg">
        <div flex-offset="10" flex-offset-xs="30" flex-offset-sm="15" flex-offset-md="15"><h3 class="subhead">{{userDetails.msg[0].name}}</h3></div>        
    </md-white-frame>
    <div class="md-padding prfPrntDiv" layout="row" layout-align="space-around start"  layout-xs="column" layout-align-xs="space-between stretch" layout-sm="column" layout-align-sm="space-around stretch" flex="100" flex-xs="100" flex-sm="100" flex-md="100">
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch" flex="30"  flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="start center">
                <h3 class="subhead" flex="">General Information</h3>
                <md-button class="md-icon-button "  aria-label="Edit" ng-click="generalProfileEdit()">
                    <i class="material-icons icon md-dark md-18">&#xE3C9;</i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">
                <div layout="row" layout-align="start center">
                    <p>
                        <i class="material-icons icon">&#xE87C;</i>
                        <span>{{userDetails.msg[0].name}}</span>
                    </p>                    
                </div>
                <div layout="row" layout-align="start center">                    
                    <p>
                        <i class="material-icons icon">&#xE7E9;</i>
                        <span>{{dob}}</span>
                    </p>                    
                </div>
                <div layout="row" layout-align="start center">                    
                    <p>
                        <i class="material-icons icon">&#xE63D;</i>
                        <span>{{general.gender}}</span>
                    </p>
                </div>
                <div layout="row" layout-align="start center">
                    <p>
                        <i class="material-icons icon">&#xE870;</i>
                        <span>{{userDetails.msg[0].pan}}</span>
                    </p>                 
                </div>
               
            </div>
        </md-white-frame>
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch"  flex="33" flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="start center">
                <h3 class="subhead" flex="">Contact</h3>
                <md-button class="md-icon-button "  aria-label="Edit" ng-click="contactProfileEdit()">
                    <i class="material-icons icon md-dark md-18">&#xE3C9;</i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">                
                <div layout="row" layout-align="start start">
                    <p>
                        <i class="material-icons icon">&#xE0CD;</i>
                        <span>{{userDetails.msg[0].email}}</span>
                    </p>
                    
                </div>                
                <div layout="row" layout-align="start start">
                    <p>
                        <i class="material-icons icon">&#xE0BE;</i>
                        <span>{{dialcode}} {{userDetails.msg[0].phone}}</span>
                    </p>
                    
                </div>
                <div layout="row"  layout-align="start start">
                    <p layout="row"  layout-align="start start">
                        <i  class="material-icons icon">&#xE0C8;</i>
                        <span>{{userDetails.msg[0].addr}}</span>
                    </p>
                    
                </div>
            </div>
        </md-white-frame>
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch"  flex="30" flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="start center">
                <h3 class="subhead" flex="">Security</h3>
                <md-button class="md-icon-button"  aria-label="Edit" ng-click="securityProfileEdit()">
                    <i class="material-icons icon md-dark md-18">&#xE3C9;</i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">                
                <div layout="row" layout-align="start start">
                    <p flex="30" class="flex-33"><span>Username : </span></p>
                    <p flex="70" class="flex-65"><span>{{user}}</span></p>
                </div>
                <div layout="row" layout-align="start start">
                    <p flex="30" class="flex-33"><span>Password : </span></p>
                    <p flex="70" class="flex-65"><span>Last Update</span><span> {{stopwatch}} </span> <span>ago</span></p>
                </div>
            </div>
        </md-white-frame>
    </div>
</div>
