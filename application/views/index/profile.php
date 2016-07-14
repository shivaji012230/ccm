<?php
//session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location:/login");
}
?>

<div layout="column" class="prflPrntDiv">
    <md-white-frame  class="md-whiteframe-1dp" layout='row' layout-xs="row" layout-align="start end" layout-align-xs="start end" flex='15' >
        <img id="prfPic" ng-src="images/satish.jpg">
        <div flex-offset="10" flex-offset-xs="30" flex-offset-sm="15" flex-offset-md="15"><h3 class="subhead">{{userDetails.msg[0].name}}</h3></div>        
    </md-white-frame>
<!--    <div class='prfname' layout layout-align='center center'><h2>{{userDetails.msg[0].name}}</h2></div>-->
    <div class="md-padding prfPrntDiv" layout="row" layout-align="space-around start"  layout-xs="column" layout-align-xs="space-between stretch" layout-sm="column" layout-align-sm="space-around stretch" flex="100" flex-xs="100" flex-sm="100" flex-md="100">
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch" flex="30"  flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="center start">
                <h3 class="subhead" flex="">General Information</h3>
                <md-button class="md-icon-button edit"  aria-label="Edit" ng-click="generalProfileEdit()">
                    <i class="material-icons"><img ng-src="images/edit.png" class="editImg"></i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">
                <div layout="row" layout-align="center start">
                    <p flex="30" class="flex-30"><span>Name : </span></p>
                    <p flex="70" class="flex-70"><span>{{userDetails.msg[0].name}}</span></p>
                </div>
                <div layout="row" layout-align="center start" >
                    <p flex="30" class="flex-30"><span>Pancard : </span></p>
                    <p flex="70" class="flex-70"><span>{{userDetails.msg[0].pan}}</span></p>
                </div>
               
            </div>
        </md-white-frame>
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch"  flex="33" flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="center start">
                <h3 class="subhead" flex="">Contact</h3>
                <md-button class="md-icon-button edit"  aria-label="Edit" ng-click="contactProfileEdit()">
                    <i class="material-icons"><img ng-src="images/edit.png" class="editImg"></i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">                
                <div layout="row" layout-align="center start">
                    <p flex="30" flex-md="25" class="flex-30"><span>Email : </span></p>
                    <p flex="70" flex-md="75" class="flex-70"><span>{{userDetails.msg[0].email}}</span></p>
                </div>                
                <div layout="row" layout-align="center start">
                    <p flex="30" flex-md="25" class="flex-30"><span>Phone : </span></p>
                    <p flex="70" flex-md="75" class="flex-70"><span>{{userDetails.msg[0].phone}}</span></p>
                </div>
                <div layout="row" layout-align="center start">
                    <p flex="30" flex-md="25" class="flex-30"><span>Address : </span></p>
                    <p flex="70" flex-md="75" class="flex-70"><span>{{userDetails.msg[0].addr}}</span></p>
                </div>
            </div>
        </md-white-frame>
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch"  flex="30" flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="center start">
                <h3 class="subhead" flex="">Security</h3>
                <md-button class="md-icon-button edit"  aria-label="Edit" ng-click="securityProfileEdit()">
                    <i class="material-icons"><img ng-src="images/edit.png" class="editImg"></i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">                
                <div layout="row" layout-align="center start" >
                    <p flex="30" class="flex-33"><span>Username : </span></p>
                    <p flex="70" class="flex-65"><span>{{user}}</span></p>
                </div>                                                
            </div>
        </md-white-frame>
    </div>
</div>
