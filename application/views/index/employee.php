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
            <div class="user">
                <md-card >
<!--                    <md-card-content >-->
                        <table>
                            <thead>
                                <tr layout layout-align="space-between center">
                                    <th flex="35"><h4>Name</h4></th>
                                    <th flex="20"><h4>Level</h4></th>
                                    <th flex="45"><h4>Options</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="code in codess | filter:mySearch" class="md-whiteframe-1dp" layout  layout-align="space-between center" >
                                    <td flex="33">{{code.name}}</td>
                                    <td flex="20">{{code.dial_code}}</td>
                                    <td flex="45" layout-sm><md-button class="md-raised suspend">suspend</md-button><md-button class="md-raised delete" ng-click="remove($index)" >delete</md-button></td>
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