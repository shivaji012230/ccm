<?php
//session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location:/");
}
?>
<div layout="column" class="prflPrntDiv">
    <div class="md-whiteframe-1dp coverBg">
        <div class="md-padding">
            <md-menu md-offset="20">
                <md-button aria-label="Open demo menu" class="md-icon-button" ng-click="$mdOpenMenu($event)">
                    <i class="icon-wallpaper cover-wallpaper"></i>
                </md-button>
                <md-menu-content width="4">
                    <md-menu-item>
                        <md-button>
                            <i class="icon-insert_photo"></i>
                            <span md-menu-align-target flex-offset="10">Change Background</span>
                            <input type="file" name="file" id="coverPic_upload" title="Upload new Background" onchange="angular.element(this).scope().changeCover(this);" ng-model="coverPic">
                        </md-button>
                    </md-menu-item>
                    <md-menu-item>
                        <md-button ng-click="removeCoverpc($event)"><i class="icon-delete"></i><span md-menu-align-target flex-offset="10">Remove Background</span></md-button>
                    </md-menu-item>
                </md-menu-content>
            </md-menu>
        </div>
    </div>
    <md-white-frame  class="md-whiteframe-1dp" layout='row' layout-xs="row" layout-align="start end" layout-align-xs="start end" >
        <img id="prfPic"  ng-src="images/{{prfPic}}">
        <div id="insert_photo">
            <div class="pic1stHalf" layout="column" layout-align="center center">
                <a href="" id="iconAnchor" title="Upload new Profile">
                    <i class=" icon-insert_photo md-dark md-24"></i>                    
                </a>
                <input type="file" name="file" id="prfPic_upload" title="Upload new Profile" onchange="angular.element(this).scope().uploadImage(this);" ng-model="prfPic">
            </div>
            <div class="close_photo"  layout="column" layout-align="center center"> 
                <a title="Remove Profile" id="iconAnchor" ng-click="removePfpc($event)">
                    <i class="icon icon-close icon-insert_photo md-dark md-24"></i>
                </a>
            </div>
        </div>
        <div flex-offset="10" flex-offset-xs="25" flex-offset-sm="15"><h3 class="subhead">{{userDetails.msg[0].name}}</h3></div>        
    </md-white-frame>
    <div class="md-padding prfPrntDiv" layout="row" layout-align="space-around start"  layout-xs="column" layout-align-xs="space-between stretch" layout-sm="column" layout-align-sm="space-around stretch" flex="100" flex-xs="100" flex-sm="100" flex-md="100">
        <md-white-frame class="md-whiteframe-1dp md-padding mrgn_bttm" layout="column" layout-align="center stretch" flex="30"  flex-sm="100" flex-xs="100">            
            <div layout="row" layout-align="start center">
                <h3 class="subhead" flex="">General Information</h3>
                <md-button class="md-icon-button "  aria-label="Edit" ng-click="generalProfileEdit($event)">
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
                <md-button class="md-icon-button"  aria-label="Edit" ng-click="securityProfileEdit($event)">
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
