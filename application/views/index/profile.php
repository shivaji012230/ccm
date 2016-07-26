<?php
//session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location:/login");
}
?>
<div layout="column" class="prflPrntDiv">
    <md-white-frame  class="md-whiteframe-1dp" layout='row' layout-xs="row" layout-align="start end" layout-align-xs="start end"  >
        <img id="prfPic"  ng-src="images/shivaji.jpg">
        <div id="insert_photo" >
            <div class="pic1stHalf" layout="column" layout-align="center center">
                <a href="" id="iconAnchor" title="Upload new Profile">
                    <i class=" icon-insert_photo md-dark md-24"></i>                    
                </a>
                <input type="file" pfpc-directive id="prfPic_upload" title="Upload new Profile" onchange="angular.element(this).scope().uploadImage(this);" ng-model="prflPic">
            </div>
            <div class="close_photo"  layout="column" layout-align="center center"> 
                <a href="" title="Remove Profile">
                    <i class="icon icon-close md-dark md-24"></i>
                </a>
            </div>
        </div>
        <div flex-offset="10" flex-offset-xs="30" flex-offset-sm="15"><h3 class="subhead">{{userDetails.msg[0].name}}</h3></div>        
    </md-white-frame>
    <div class="md-padding prfPrntDiv" layout="row" layout-align="space-around start"  layout-xs="column" layout-align-xs="space-between stretch" layout-sm="column" layout-align-sm="space-around stretch" flex="100" flex-xs="100" flex-sm="100" flex-md="100">
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch" flex="30"  flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="start center">
                <h3 class="subhead" flex="">General Information</h3>
                <md-button class="md-icon-button "  aria-label="Edit" ng-click="generalProfileEdit()">
                    <i class="icon-edit material-icons md-18 icon md-dark"></i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">
                <div layout="row" layout-align="start center">
                    <p>
                        <i class="icon-face material-icons icon"></i>
                        <span>{{userDetails.msg[0].name}}</span>
                    </p>                    
                </div>
                <div layout="row" layout-align="start center">                    
                    <p>
                        <i class="icon-cake material-icons  icon"></i>
                        <span>{{dob}}</span>
                    </p>                    
                </div>
                <div layout="row" layout-align="start center">                    
                    <p>
                        <i class="icon-wc material-icons icon"></i>
                        <span>{{general.gender}}</span>
                    </p>
                </div>
                <div layout="row" layout-align="start center">
                    <p>
                        <i class="icon-card material-icons icon"></i>
                        <span>{{userDetails.msg[0].pan}}</span>
                    </p>                 
                </div>

            </div>
        </md-white-frame>
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch"  flex="33" flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="start center">
                <h3 class="subhead" flex="">Contact</h3>
                <md-button class="md-icon-button "  aria-label="Edit" ng-click="contactProfileEdit()">
                    <i class="icon-edit material-icons md-18 icon md-dark"></i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">                
                <div layout="row" layout-align="start start">
                    <p layout="row" layout-align="start start">
                        <i class="icon-email material-icons icon"></i>
                        <span>{{userDetails.msg[0].email}}</span>
                    </p>
                </div>                
                <div layout="row" layout-align="start start">
                    <p >
                        <i class="icon-call material-icons icon"></i>
                        <span>{{dialcode}} {{userDetails.msg[0].phone}}</span>
                    </p>
                </div>
                <div layout="row"  layout-align="start start">
                    <p layout="row"  layout-align="start start">
                        <i  class="icon-location material-icons icon"></i>
                        <span>{{userDetails.msg[0].addr}}</span>
                    </p>
                </div>
            </div>
        </md-white-frame>
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch"  flex="30" flex-sm="100" flex-xs="100">
            <div layout="row" layout-align="start center">
                <h3 class="subhead" flex="">Security</h3>
                <md-button class="md-icon-button"  aria-label="Edit" ng-click="securityProfileEdit()">
                    <i class="icon-edit material-icons md-18 icon md-dark"></i>
                </md-button>
            </div>
            <hr style="width: 100%">
            <div layout="column">                
                <div layout="row" layout-align="start start">
                    <p flex="30" flex-md="40" class="flex-33"><span>Username : </span></p>
                    <p flex="" class="flex-65"><span>{{user}}</span></p>
                </div>
                <div layout="row" layout-align="start start">
                    <p flex="30" flex-md="40" class="flex-33"><span>Password : </span></p>
                    <p flex="" class="flex-65"><span>Last Update</span><span> {{stopwatch}} </span> <span>ago</span></p>
                </div>
            </div>
        </md-white-frame>
    </div>
</div>
