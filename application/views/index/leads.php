<?php
//session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location:/");
}
?>
<div layout="column" layout-align="space-between stretch" class="minhgt" >
    <md-content>        
        <div class="user md-padding" >
            <div layout layout-xs="column" layout-align="end center">
                <md-button class=" md-primary" ng-click="addNewLead()">NEW LEAD</md-button>
                <md-button class=" md-primary" ng-click="exportData()">EXPORT TO EXCEL</md-button>                
            </div>
            <div id="exportable" >
                <table class="country_table leadstbl" id="testTable" >
                    <thead>
                        <tr layout layout-align="space-around center">                            
                            <th flex >Lead Owner</th>
                            <th flex >Customer Name</th>
                            <th flex >Phone Number</th>
                            <th flex="15">Address</th>
                            <th flex >Occupation</th>
                            <th flex >Occupation details</th>
                            <th flex="15">Business Details</th>
                            <th flex >PAN Number</th>
                            <th flex >Aadhar Number</th>
                            <th flex class="noExl" >Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  ng-repeat="lead in leadsJsonNew |limitTo:totalDisplayed" id="{{lead.id}}" class="md-whiteframe-1dp" layout layout-align="space-around center" >                            
                            <td flex >{{lead.user}}</td>
                            <td flex >{{lead.name}}</td>
                            <td flex >{{lead.phone}}</td>
                            <td flex="15"  >{{lead.addr}}</td>
                            <td flex >{{lead.occupation}}</td>
                            <td flex >{{lead.occupationdetail}}</td>
                            <td flex="15" layout="column">
                                <span>Accepts Cards:{{lead.biz.cards}}</span>
                                <span>Monthly Card Sales:{{lead.biz.sales}}</span>
                                <span>Pos Business Since:{{lead.biz.since}}</span>
                                <span>Business Premises:{{lead.biz.premises}}</span>
                                <span>Nature of Business:{{lead.biz.nature}}</span>
                                <span>Business Phone:{{lead.biz.bphone}}</span>
                            </td>
                            <td flex >{{lead.pan}}</td>
                            <td flex >{{lead.aadhaar}}</td>
                            <td flex class="noExl"  layout="column">
                                <a class="md-primary" href="" id="{{lead.id}}" ng-click="accept($index,$event)">Approve</a>
                                <a class="md-primary" href="" id="{{lead.id}}" ng-click="reject($index,$event)">Reject</a>
                            </td>
                        </tr>
                        
                    </tbody>                    
                </table>
                
            </div>
        </div>

        <div class="md-padding"></div>
    </md-content>
</div>