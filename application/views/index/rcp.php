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
                <md-button class="md-raised md-accent" ng-click="addNewRcp()">Add New Rcp</md-button>
                <input type="text" class="mySearch" ng-model="mySearch" placeholder="search">
            </div>
            <div class="md-padding" ></div>
            <div class="md-padding user">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Level</th>
                        <th>options</th>
                    </tr>
                    <tr ng-repeat="code in codes | filter:mySearch">
                        <td>{{code.name}}</td>
                        <td>{{code.dial_code}}</td>
                        <td><md-button class="md-accent">suspend</md-button><md-button class="md-accent" ng-click="remove($index)">delete</md-button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="md-padding"></div>
    </md-content>
</div>