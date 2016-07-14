<?php
//session_start();
if(!isset($_SESSION['user_name'])) {
    header("Location:/login");
}
?>

<div layout="column" layout-align="space-between stretch" class="minhgt">
    <md-content>
        <div layout="column" layout-align="center center">
            <div class="md-padding"></div>
            <div layout layout-xs="column">
                <md-button class="md-raised md-primary" ng-click="addNewEmployee()">Add New Employee</md-button>
                <div layout>
                    <input type="text" class="mySearch" ng-model="mySearch" placeholder="search" > 
                    <md-button  class="md-icon-button searchIcon" aria-label="Search">                        
                        <md-icon class="material-icons"><img src="images/search.png" style="width: 32px;"></md-icon>
                    </md-button>
                </div>
            </div>
            <div class="md-padding" ></div>
            <div layout layout-align='space-between center' flex>
                <md-button class="md-raised suspend " id="SuspendSelected" ng-click="accept_reject($event)">Suspend Selected</md-button>
                <md-button class='md-raised delete' id="DeleteSelected" ng-click="accept_reject($event)">Delete Selected</md-button>
            </div>
            <div class="user">
                <md-card >
                        <table class="country_table empTbl">
                            <thead>
                                <tr layout layout-align="space-between center">
                                    <th flex="10"></th>
                                    <th class="flex-33"><h4>Name</h4></th>
                                    <th class="flex-20"><h4>Level</h4></th>
                                    <th class="flex-45"><h4>Options</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="code in codess | filter:mySearch" class="md-whiteframe-1dp" id="{{code.id}}" layout  layout-align="space-between center" >
                                    <td flex="10"><md-checkbox class='tbl_chkbx md-primary' ng-model="code.checked"  aria-label='checkbox'></md-checkbox></td>
                                    <td class="flex-33">{{code.name}}</td>
                                    <td class="flex-20">{{code.dial_code}}</td>
                                    <td class="flex-45" layout-sm><md-button class="md-raised suspend" id="{{code.id}}"  ng-click="suspend($event)">suspend</md-button><md-button class="md-raised delete" id="{{code.id}}" ng-click="delete($event)" >delete</md-button></td>
                                </tr>
                            </tbody>
                        </table>
                </md-card>
            </div>
        </div>
        <div class="md-padding"></div>
    </md-content>
</div>