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
                <md-button class="md-raised md-accent" ng-click="addNewLead()">Add New Lead</md-button>
                <input type="text" class="mySearch" ng-model="mySearch" placeholder="search">
            </div>
            <div class="md-padding"></div>
            <div class="md-padding">    
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Options</th>
                    </tr>
                    <tr ng-repeat="code in codes" ng-style="myStyle">
                        <td ng-style="myStyle">{{code.name}}</td>
                        <td ng-style="myStyle">{{code.dial_code}}</td>
                        <td ><md-button class="md-accent" ng-click="myStyle={'color':'green','font-weight':'600'}">accept</md-button><md-button class=" md-accent" ng-click="myStyle={'color':'red','font-weight':'400'}">reject</md-button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="md-padding"></div>
    </md-content>
</div>