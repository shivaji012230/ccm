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
            <div layout layout-xs="column" >
                <md-button class="md-raised md-primary" ng-click="addNewLead()">Add New Lead</md-button>
                <div layout>
                    <input type="text" class="mySearch" ng-model="mySearch" placeholder="search" > 
                    <md-button  class="md-icon-button searchIcon" aria-label="Search">                         
                        <md-icon class="material-icons"><img src="images/search.png" style="width: 32px;"></md-icon>
                    </md-button>
                </div>
            </div>
            <div class="md-padding"></div>
            <div class="user">
                <md-card>
<!--                    <md-card-content>-->
                        <table>
                            <thead>
                                <tr layout layout-align="space-between center">
                                    <th flex="35"><h4>Name</h4></th>
                                    <th flex="20"><h4>Level</h4></th>
                                    <th flex="45"><h4>Options</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="code in codess | filter:mySearch" class="md-whiteframe-1dp" ng-style="myStyle" layout layout-align="space-between center">
                                    <td flex="35" ng-style="myStyle">{{code.name}}</td>
                                    <td flex="20" ng-style="myStyle">{{code.dial_code}}</td>
                                    <td flex="45" ><md-button class=" md-raised accept" ng-click="myStyle={'color':'green','font-weight':'800'}">accept</md-button><md-button class="md-raised delete" ng-click="myStyle={'color':'red','font-weight':'800'}">reject</md-button></td>
                                </tr>
                            </tbody>
                        </table>
<!--                    </md-card-content>-->
                </md-card>
                
            </div>
        </div>
        <div class="md-padding"></div>
    </md-content>
</div>