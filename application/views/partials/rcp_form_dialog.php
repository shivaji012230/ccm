<md-dialog aria-label="rcpfrm"  layout="column" class="dialog_width">
    <div class="md-toolbar-tools">
        <h3>Rcp Details</h3>
        <span flex></span>
        <md-button class="md-icon-button" aria-label="cancel" ng-click="cancel()">
            <md-icon class="md-default-theme" class="material-icons"><img src="images/close_black.png" class="width_24"></md-icon>
        </md-button>
    </div>
    <md-dialog-content >
        <div class="md-dialog-content md-padding"  layout="column" >
            <form name="rcpfrm" id="rcpFormDetails" ng-submit="rcpfrm.$valid && rcpFormData(rcp, $event)" novalidate>
                <md-input-container class="md-block" md-is-error="rcpfrm.rcp_name.$invalid && (rcpfrm.$submitted || rcpfrm.rcp_name.$dirty)">
                    <label >Name</label>
                    <input type="text" name="rcp_name" ng-required="true" ng-minlength="5" ng-maxlength="30" ng-model="rcp.rcp_name" ng-pattern="/^[a-zA-Z.\s]*$/">
                    <div ng-messages="rcpfrm.rcp_name.$error" ng-if="rcpfrm.$submitted || rcpfrm.rcp_name.$touched">
                        <div ng-message="required">Please enter a name.</div>
                        <div ng-message="minlength">Name is too short</div>
                        <div ng-message="maxlength">Name is too long</div>
                        <div ng-message="pattern">Name field not allowed special charecters except dot</div>
                    </div>  
                </md-input-container>
                <md-input-container class="md-block" md-is-error="rcpfrm.rcp_email.$invalid && (rcpfrm.$submitted || rcpfrm.rcp_email.$dirty)">
                    <label>Email</label>
                    <input  type="email" name="rcp_email" ng-required="true" ng-model="rcp.rcp_email" ng-pattern="/^.+@.+\..+$/" />
                    <div ng-messages="rcpfrm.rcp_email.$error" role="alert" ng-if="rcpfrm.$submitted || rcpfrm.rcp_email.$touched">
                        <div ng-message="required">Please enter email address.</div>
                        <div ng-message="pattern">Please provide a valid email address.</div>
                    </div>
                </md-input-container>
                <div layout="row" layout-align="start start">

                    <md-select name="ccode" id="code" class="ccode" aria-label="Country Code"  ng-model="dialcode" ng-change="dialCode(dialcode)" md-on-open="countryDialCode()">
                        <md-option  ng-repeat="code in codes" ng-value="code">{{code.name}}&nbsp;&nbsp;{{code.dial_code}}</md-option>
                    </md-select>
                    <span id="ccode_afterselect">+91</span>
                    <md-input-container class="md-block mblno_container" md-is-error="rcpfrm.mobileNo.$invalid && (rcpfrm.$submitted || rcpfrm.mobileNo.$dirty)">
                        <label id="mblnm_label">Mobile Number</label>
                        <input id="mobileNo" name="mobileNo" ng-required="true" ng-model="rcp.mobileNo" ng-pattern="/^[(]?[0-9]{3}[)]?[-.]?[0-9]{3}[-.]?[0-9]{4,6}$/"  type="text" >
                        <div ng-messages="rcpfrm.mobileNo.$error" ng-if="rcpfrm.$submitted || rcpfrm.mobileNo.$touched">
                            <div ng-message="required">Mobile Number is required.</div>
                            <div ng-message="pattern">Please enter a valid Mobile Number.</div>
                        </div>
                    </md-input-container>
                </div>
                <!--            <md-input-container class="md-block" md-is-error="rcpfrm.rcp_phn.$invalid && (rcpfrm.$submitted || rcpfrm.rcp_phn.$dirty)">
                                <label>Phone Number</label>
                                <input type="number" name="rcp_phn" ng-required="true"  ng-pattern="/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/" ng-model="rcp.rcp_phn">
                                <div ng-messages="rcpfrm.rcp_phn.$error" ng-if="rcpfrm.$submitted || rcpfrm.rcp_phn.$touched">
                                    <div ng-message="required">Please enter phone number.</div>
                                    <div ng-message="pattern">Please provide a valid 10 digit phone number.</div>
                                </div>
                            </md-input-container>-->
                <md-input-container class="md-block" md-is-error="rcpfrm.rcp_addr.$invalid && (rcpfrm.$submitted || rcpfrm.rcp_addr.$dirty)">
                    <label>Address</label>
                    <textarea name="rcp_addr" ng-required="true" ng-minlength="15" ng-maxlength="100" ng-model="rcp.rcp_addr"></textarea>
                    <div ng-messages="rcpfrm.rcp_addr.$error" ng-if="rcpfrm.$submitted || rcpfrm.rcp_addr.$touched">
                        <div ng-message="required">Please enter address.</div>
                        <div ng-message="minlength">Address is too short.</div>
                        <div ng-message="minlength">Address is too long.</div>
                    </div>
                </md-input-container>
                <md-input-container class="md-block" md-is-error="rcpfrm.rcp_level.$invalid && (rcpfrm.$submitted || rcpfrm.rcp_level.$dirty)">
                    <label>Level</label>
                    <md-select name="rcp_level" ng-required="true" ng-model="rcp.rcp_level" >
                        <md-option  value="Admin">Admin</md-option>
                        <md-option  value="Employee">Employee</md-option>
                    </md-select>
                    <div ng-messages="rcpfrm.rcp_level.$error" ng-if="rcpfrm.$submitted || rcpfrm.rcp_level.$touched">
                        <div ng-message="required">Please select level.</div>
                    </div>
                </md-input-container>

                <md-input-container layout layout-align="end center">
                    <md-button type="submit" class=" md-primary">submit</md-button>
                    <md-button  class="md-accent" ng-click="rcpResetForm()">reset</md-button>
                </md-input-container>
            </form>
        </div>
    </md-dialog-content>

</md-dialog>