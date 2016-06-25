<md-dialog aria-label="leadsfrm"  layout="column" class="dialog_width" >
    <div class="md-toolbar-tools leads_toolbar">
        <h3>Lead Details</h3>
        <span flex></span>
        <md-button class="md-icon-button" aria-label="cancel" ng-click="cancel()">
            <md-icon class="md-default-theme" class="material-icons"><img src="images/close_black.png" class="width_24"></md-icon>
        </md-button>
    </div>
    <md-dialog-content >
        <div class="md-dialog-content md-padding"  layout="column" >
            <form name="leadsfrm" id="leadsFormDetails"  ng-submit="leadsfrm.$valid && leadsFormData(leads,$event)" novalidate>
                <md-input-container  class="md-block" md-is-error="leadsfrm.customer_name.$invalid && (leadsfrm.$submitted || leadsfrm.customer_name.$dirty)">
                    <label>Customer Name</label>
                    <input type="text"  name="customer_name" ng-required="true" ng-minlength="5" ng-maxlength="30" ng-model="leads.customer_name" ng-pattern="/^[a-zA-Z.\s]*$/">
                    <div ng-messages="leadsfrm.customer_name.$error" ng-if="leadsfrm.$submitted || leadsfrm.customer_name.$touched">
                        <div ng-message="required">Customer Name is required.</div>
                        <div ng-message="minlength">Customer Name is too short.</div>
                        <div ng-message="maxlength">Customer Name is too long.</div>
                        <div ng-message="pattern">Name field not allowed special charecters except dot</div>
                    </div>  
                </md-input-container>
                <md-input-container class="md-block" md-is-error="leadsfrm.customer_addr.$invalid && (leadsfrm.$submitted || leadsfrm.customer_addr.$dirty)">
                    <label>Customer Address</label>
                    <textarea  name="customer_addr" ng-required="true" ng-minlength="15" ng-maxlength="100" ng-model="leads.customer_addr"></textarea>
                    <div ng-messages="leadsfrm.customer_addr.$error" ng-if="leadsfrm.$submitted || leadsfrm.customer_addr.$touched">
                        <div ng-message="required">Customer Address is required.</div>
                        <div ng-message="minlength">Customer Address is too short.</div>
                        <div ng-message="maxlength">Customer Address is too long.</div>
                    </div>  
                </md-input-container>
                <md-input-container layout="column" md-is-error="leadsfrm.select_customer.$invalid && (leadsfrm.$submitted || leadsfrm.select_customer.$dirty )">
                    <lable class="lable_clr" >Customer Occupation</lable>
                    <md-select name="select_customer" placeholder="select customer occupation" ng-required="true" ng-model="leads.select_customer"  aria-label="customer_type">
                        <md-option ng-repeat="item in items">{{item.name}}</md-option>
                    </md-select>
                    <div ng-messages="leadsfrm.select_customer.$error" ng-if="leadsfrm.$submitted || leadsfrm.select_customer.$touched">
                        <div ng-message="required">Self Employee Occupation is required.</div>
                    </div>
                </md-input-container>
                <div class="md-padding" ng-if="leads.select_customer === ''"></div>
                <div layout="column">
                    <div layout="column" ng-if="leads.select_customer === 'Self Employeed'">
                        <md-input-container md-is-error="leadsfrm.self_emp.$invalid && (leadsfrm.$submitted || leadsfrm.self_emp.$dirty)">    
                            <md-radio-group  class="md-padding md-primary" name="self_emp" ng-required="true" ng-model="leads.self_emp">
                                <md-radio-button value="Proprietary company" >Proprietary company</md-radio-button>
                                <md-radio-button value="Partnership company"> Partnership company </md-radio-button>
                                <md-radio-button value="Private Limited company">Private Limited company</md-radio-button>
                            </md-radio-group>
                            <div ng-messages="leadsfrm.self_emp.$error" ng-if="leadsfrm.$submitted || leadsfrm.self_emp.$touched">
                                <div ng-message="required">Self Employee Occupation is required.</div>
                            </div>    
                        </md-input-container>
                        <label class="lable_clr">Does the customers accept cards?</label>
                        <md-input-container md-is-error="leadsfrm.yes_no.$invalid && (leadsfrm.$submitted || leadsfrm.yes_no.$dirty)">
                            <md-radio-group name="yes_no" ng-required="true" ng-model="leads.yes_no" layout class="md-primary">
                                <md-radio-button  value="Yes" >Yes</md-radio-button>
                                <md-radio-button value="No">No</md-radio-button>
                            </md-radio-group>
                            <div ng-messages="leadsfrm.yes_no.$error" ng-if="leadsfrm.$submitted || leadsfrm.yes_no.$touched">
                                <div ng-message="required">Customer accept cards is required.</div>
                            </div>
                        </md-input-container>
                        <md-input-container class="md-block" md-is-error="leadsfrm.monthly_card.$invalid && (leadsfrm.$submitted || leadsfrm.monthly_card.$dirty)">
                            <label>Monthly Card Sales</label>
                            <input type="number"  name="monthly_card" ng-required="true" ng-pattern="/^[0-9]+$/" ng-model="leads.monthly_card_sales">
                            <div ng-messages="leadsfrm.monthly_card.$error" ng-if="leadsfrm.$submitted || leadsfrm.monthly_card.$touched">
                                <div ng-message="required">Monthly Card Sales is required.</div>
                                <div ng-message="pattern">Please enter valid sales.</div>
                            </div>  
                        </md-input-container>
                        
                        <md-datepicker name="dateField" id="dateField" ng-model="leads.myDate" md-placeholder="Enter date" required date-Validation></md-datepicker>
                        <div class="validation-messages" ng-messages="leadsfrm.dateField.$error" ng-if="leadsfrm.$submitted || leadsfrm.dateField.$touched">
                            <div ng-message="valid">The entered value is not a date!</div>
                            <div ng-message="required">This date is required!</div>
                        </div>
                        <div class="md-padding">{{leads.myDate | date:"MM-dd-yyyy"}}</div>
                        <div style="color:red;" ng-show="leadsfrm.dateField.$error.date1">This is not a valid date</div>
                        <div class="md-padding"></div>
                        <div layout="column" >
                            <label class="lable_clr">Business Premises</label>
                            <md-input-container md-is-error="leadsfrm.Owned_Returned.$invalid && (leadsfrm.$submitted || leadsfrm.Owned_Returned.$dirty)">
                                <md-radio-group layout name="Owned_Returned" ng-required="true"  ng-model="leads.Owned_Returned" class="md-primary">
                                    <md-radio-button value="Owned" >Owned</md-radio-button>
                                    <md-radio-button value="Returned">Returned</md-radio-button>
                                </md-radio-group>
                                <div ng-messages="leadsfrm.Owned_Returned.$error" ng-if="leadsfrm.$submitted || leadsfrm.Owned_Returned.$touched">
                                    <div ng-message="required">Business Premises is required.</div>
                                </div>
                            </md-input-container>
                        </div>
                        <md-input-container class="md-block" md-is-error="leadsfrm.nature_of_business.$invalid && (leadsfrm.$submitted || leadsfrm.nature_of_business.$dirty)">
                            <label>Nature of Business</label>
                            <input type="text" name="nature_of_business" ng-required="true" ng-minlength="5" ng-maxlength="25" ng-model="leads.nature_of_business">
                            <div ng-messages="leadsfrm.nature_of_business.$error" ng-if="leadsfrm.$submitted || leadsfrm.nature_of_business.$touched">
                                <div ng-message="required">Nature of Business is required.</div>
                                <div ng-message="minlength">Nature of Business is too short must be greater than 5 charecters.</div>
                                <div ng-message="maxlength">Nature of Business is too long must be less than 25 charecters.</div>
                            </div>  
                        </md-input-container>
                        <div layout="row" layout-align="start start">
                            <md-select name="ccode" id="code" class="ccode" aria-label="Country Code"  ng-model="dialcode" ng-change="dialCode(dialcode)">
                                <md-option  ng-repeat="code in codes" value="{{code.name}}-{{code.dial_code}}">{{code.name}}{{code.dial_code}}</md-option>
                            </md-select>
                            <span id="ccode_afterselect">+91</span>
                            <md-input-container class="md-block mblno_container" md-is-error="leadsfrm.mobileNo.$invalid && (leadsfrm.$submitted || leadsfrm.mobileNo.$dirty)">
                                <label id="mblnm_label">Mobile Number</label>
                                <input id="mobileNo" name="mobileNo" ng-required="true" ng-model="leads.mobileNo" ng-pattern="/^[(]?[0-9]{3}[)]?[-.]?[0-9]{3}[-.]?[0-9]{4,6}$/"  type="text" >
                                <div ng-messages="leadsfrm.mobileNo.$error" ng-if="leadsfrm.$submitted || leadsfrm.mobileNo.$touched">
                                    <div ng-message="required">Mobile Number is required.</div>
                                    <div ng-message="pattern">Please enter a valid Mobile Number.</div>
                                </div>
                            </md-input-container>
                        </div>                  
                    </div>
                    <div  layout="column" id="employee" ng-if="leads.select_customer === 'Employee'">
                        <md-input-container md-is-error="leadsfrm.employee.$invalid && (leadsfrm.$submitted || leadsfrm.employee.$dirty)">
                            <md-radio-group name="employee" ng-required="true" ng-model="leads.employee" class="md-padding md-primary">
                                <md-radio-button value="Proprietary">Proprietary company</md-radio-button>
                                <md-radio-button value="Partnership"> Partnership company </md-radio-button>
                                <md-radio-button value="Government">Government</md-radio-button>
                            </md-radio-group>
                            <div ng-messages="leadsfrm.employee.$error" ng-if="leadsfrm.$submitted || leadsfrm.employee.$touched">
                                <div ng-message="required">Emplyoee Occupation is required.</div>
                            </div>
                        </md-input-container>    
                    </div>
                    <div layout="column" id="professional" ng-if="leads.select_customer === 'Professional'">
                        <md-input-container md-is-error="leadsfrm.professional.$invalid && (leadsfrm.$submitted || leadsfrm.professional.$dirty)">
                            <md-radio-group name="professional" ng-required="true" ng-model="leads.professional" class="md-padding md-primary">
                                <md-radio-button value="Doctor">Doctor</md-radio-button>
                                <md-radio-button value="Architect">Architect</md-radio-button>
                                <md-radio-button value="CA">CA</md-radio-button>
                            </md-radio-group>
                            <div ng-messages="leadsfrm.professional.$error" ng-if="leadsfrm.$submitted || leadsfrm.professional.$touched">
                                <div ng-message="required">professional Emplyoee Occupation is required.</div>
                            </div>
                        </md-input-container>
                    </div>
                </div>
                <md-input-container  class="md-block"  md-is-error="leadsfrm.customer_Annual_Income.$invalid && (leadsfrm.$submitted || leadsfrm.customer_Annual_Income.$dirty)">
                    <label>Customers Annual Income<span class="lacs_per_user">(lacs per user)</span></label>
                    <md-select  name="customer_Annual_Income" ng-required ng-model="leads.customer_Annual_Income" >
                        <md-option  value="0-5">0-5</md-option>
                        <md-option  value="5-10">5-10</md-option>
                        <md-option  value="10-25">10-25</md-option>
                        <md-option  value="25-50">25-50</md-option>
                        <md-option  value=">50">>50</md-option>
                    </md-select>
                    <div ng-messages="leadsfrm.customer_Annual_Income.$error" ng-if="leadsfrm.$submitted || leadsfrm.customer_Annual_Income.$touched">
                        <div ng-message="required">Customers Annual Income is required.</div>
                    </div>
                </md-input-container>
                <md-input-container class="md-block" md-is-error="leadsfrm.customer_pan.$invalid && (leadsfrm.$submitted || leadsfrm.customer_pan.$dirty)">
                    <label>Customer PAN Number</label>
                    <input type="text"  name="customer_pan" ng-required="true" ng-pattern="/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/" ng-model="leads.customer_pan">
                    <div ng-messages="leadsfrm.customer_pan.$error" ng-if="leadsfrm.$submitted || leadsfrm.customer_pan.$touched">
                        <div ng-message="required">PAN card number is required.</div>
                        <div ng-message="pattern">Please enter a valid PAN card number.</div>
                    </div>
                </md-input-container>
                <md-input-container class="md-block" md-is-error="leadsfrm.customer_aadhaar.$invalid && (leadsfrm.$submitted || leadsfrm.customer_aadhaar.$dirty)">
                    <label>Customer Aadhaar Number</label>
                    <input type="text" name="customer_aadhaar" id="customer_aadhaar" ng-required="true" ng-maxlength="14" ng-keyup="aadhar()" ng-pattern="/^\d{4}-\d{4}-\d{4}$/" placeholder="####-####-####" ng-model="leads.customer_aadhaar">
                    <div ng-messages="leadsfrm.customer_aadhaar.$error" ng-if="leadsfrm.$submitted || leadsfrm.customer_aadhaar.$touched || leadsfrm.customer_aadhaar.$dirty">
                        <div ng-message="required">Aaadhaar card number is required.</div>
                        <div ng-message="pattern">(####-####-####)Please enter a valid 12 digit Aadhaar number.</div>
                        <div ng-message="maxlength">Aaadhaar card number must have 12 digit only.</div>
                    </div>
                </md-input-container>
                <md-input-container layout layout-align="end center">
                    <md-button type="submit" class="md-primary">Submit</md-button>
                    <md-button  class="md-accent" ng-click="leadsResetForm()">reset</md-button>
                </md-input-container>
            </form>
        </div>
    </md-dialog-content>
</md-dialog>