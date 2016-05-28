<div layout="column"  class="minhgt">
    <md-content>
        <div layout="column" layout-align="center center">
            <div>
                <div class="md-padding"></div>
                <md-button class="md-raised md-accent" ng-click="addNewClicked = !addNewClicked;">Add New Lead</md-button>
            </div>
            <div ng-init="addNewClicked = false;" ng-if="addNewClicked" class="lgn" style="box-shadow:0px 0px 3px 0.2px;" layout-padding >
                <form name="leadsfrm" >
                    <md-input-container  class="md-block">
                        <label>Customer Name</label>
                        <input type="text"  required  name="customer_name" ng-model="customer_name">
                        <div ng-messages="leadsfrm.customer_name.$error">
                            <div ng-message="required">Customer Name is required.</div>
                        </div>  
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Customer Address</label>
                        <input type="text"  required  name="customer_addr" ng-model="customer_addr">
                        <div ng-messages="leadsfrm.customer_addr.$error">
                            <div ng-message="required">Customer Address is required.</div>
                        </div>  
                    </md-input-container>
                    <lable class="lable_clr" >Customer Occupation</lable>
                    <md-input-container ng-init="group='self'" class="md-block">
                        <md-radio-group  ng-model="group" layout layout-align="space-between center" layout-xs="column" layout-align-xs="space-between start" class="md-primary">
                            <md-radio-button value="self" flex>Self Employeed</md-radio-button>
                            <md-radio-button value="employee" flex>Employee</md-radio-button>
                            <md-radio-button value="professional">Professional</md-radio-button>
                        </md-radio-group>
                    </md-input-container>
                    <div layout="column">
                        <div layout="column" ng-show="group == 'self'" ng-init="self_emp='Proprietary'">
                            <md-radio-group ng-model="self_emp" class="md-padding md-primary">
                                <md-radio-button value="Proprietary" >Proprietary company</md-radio-button>
                                <md-radio-button value="Partnership"> Partnership company </md-radio-button>
                                <md-radio-button value="Private">Private Limited company</md-radio-button>
                            </md-radio-group>
                            <label class="lable_clr">Does the customers accept cards?</label>
                            <md-input-container ng-init="yes_no='Yes'">
                                <md-radio-group  ng-model="yes_no" layout class="md-primary">
                                    <md-radio-button value="Yes" >Yes</md-radio-button>
                                    <md-radio-button value="No">No</md-radio-button>
                                </md-radio-group>
                            </md-input-container>
                            <md-input-container class="md-block">
                                <label>Monthly Card Sales</label>
                                <input type="text"  required  name="monthly_card" ng-model="monthly_card_sales">
                                <div ng-messages="leadsfrm.monthly_card.$error">
                                    <div ng-message="required">Monthly Card Sales is required.</div>
                                </div>  
                            </md-input-container>
                            <md-input-container class="md-block">
                                <label>PoS Business Since</label>
                                <input type="text"  required  name="pos_business" ng-model="pos_business_since">
                                <div ng-messages="leadsfrm.pos_business.$error">
                                    <div ng-message="required">PoS Business Since is required.</div>
                                </div>  
                            </md-input-container>
                            <div layout="column" flex>
                            <label class="lable_clr">Business Premises</label>
                            <md-input-container ng-init="Owned_Returned='Owned'"  >
                                <md-radio-group layout ng-model="Owned_Returned" class="md-primary">
                                    <md-radio-button value="Owned" >Owned</md-radio-button>
                                    <md-radio-button value="Returned">Returned</md-radio-button>
                                </md-radio-group>
                            </md-input-container>
                            </div>
                            <md-input-container class="md-block">
                                <label>Nature of Business</label>
                                <input type="text"  required  name="nature_of_business" ng-model="nature_of_business">
                                <div ng-messages="leadsfrm.nature_of_business.$error">
                                    <div ng-message="required">Nature of Business is required.</div>
                                </div>  
                            </md-input-container>
                            <md-input-container class="md-block">
                                <label>Business Phone Number</label>
                                <input type="text"  required  name="business_phn" ng-model="business_phn">
                                <div ng-messages="leadsfrm.business_phn.$error">
                                    <div ng-message="required">Business Phone Number is required.</div>
                                </div>  
                            </md-input-container>
                        </div>
                        <div ng-show="group == 'employee'" ng-init="employee='Proprietary'" layout="column">
                            <md-radio-group ng-model="employee" class="md-padding md-primary">
                                <md-radio-button value="Proprietary">Proprietary company</md-radio-button>
                                <md-radio-button value="Partnership"> Partnership company </md-radio-button>
                                <md-radio-button value="Government">Government</md-radio-button>
                            </md-radio-group>
                        </div>
                        <div ng-show="group == 'professional'" ng-init="professional='Doctor'" layout="column">
                            <md-radio-group ng-model="professional" class="md-padding md-primary">
                                <md-radio-button value="Doctor">Doctor</md-radio-button>
                                <md-radio-button value="Architect">Architect</md-radio-button>
                                <md-radio-button value="CA">CA</md-radio-button>
                            </md-radio-group>
                        </div>
                    </div>
                    <md-input-container flex-gt-sm class="md-block" ng-init="customer_Annual_Income='10-25'" >
                        <label>Customers Annual Income(<span class="lacs_per_user">lacs per user</span>)</label>
                        <md-select  name="customer_Annual_Income" required ng-model="customer_Annual_Income" >
                            <md-option  value="0-5">0-5</md-option>
                            <md-option  value="5-10">5-10</md-option>
                            <md-option  value="10-25">10-25</md-option>
                            <md-option  value="25-50">25-50</md-option>
                            <md-option  value=">50">>50</md-option>
                        </md-select>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Customer PAN Number</label>
                        <input type="text" required name="customer_pan" ng-model="customer_pan">
                        <div ng-messages="leadsfrm.customer_pan.$error">
                            <div ng-message="required">Customer PAN Number is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Customer Aadhaar Number</label>
                        <input type="text"  required name="customer_aadhaar" ng-model="customer_aadhaar">
                        <div ng-messages="leadsfrm.customer_aadhaar.$error">
                            <div ng-message="required">Customer Aadhaar Number is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container layout layout-align="center center">
                        <md-button type="submit" class="md-raised md-accent">Submit Lead</md-button>
                    </md-input-container>
                </form>
            </div>
            <div class="md-padding"></div>
            <div>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Options</th>
                    </tr>
                    <tr>
                        <td>ffffdfdd</td>
                        <td>sacadfdafscscss</td>
                        <td><span><a href="">suspend</a></span>&nbsp;&nbsp;&nbsp;<span><a href="">delete</a></span></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="md-padding"></div>
    </md-content>
</div>