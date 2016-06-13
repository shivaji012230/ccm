<md-dialog aria-label="empfrm"  layout="column" class="dialog_width">
  <div class="md-toolbar-tools">
    <h3>Employee Details</h3>
    <span flex></span>
    <md-button class="md-icon-button" aria-label="cancel" ng-click="cancel()">
      <md-icon class="md-default-theme" class="material-icons"><img src="images/close_black.png" class="width_24"></md-icon>
    </md-button>
  </div>
  <md-dialog-content >
    <div class="md-dialog-content md-padding"  layout="column" >
        <form name="empfrm" ng-submit="empfrm.$valid && empFormData()" novalidate>
            <md-input-container class="md-block" md-is-error="empfrm.emp_name.$invalid && (empfrm.$submitted || empfrm.emp_name.$dirty)">
                <label>Name</label>
                <input type="text" autofocus ng-required="true" ng-minlength="5" ng-maxlength="30" name="emp_name" ng-model="emp.emp_name" ng-pattern="/^[a-zA-Z\s.]*$/">
                <div ng-messages="empfrm.emp_name.$error" ng-if="empfrm.$submitted || empfrm.emp_name.$touched" role="alert" >
                    <div ng-message="required">Please enter a name.</div>
                    <div ng-message="minlength">Name is too short</div>
                    <div ng-message="maxlength">Name is too long</div>
                    <div ng-message="pattern">Name field not allowed special charecters except dot</div>
                </div>
            </md-input-container>
            <md-input-container class="md-block" md-is-error="empfrm.emp_email.$invalid && (empfrm.$submitted || empfrm.emp_email.$dirty)">
                <label>Email</label>
                <input  type="text"  name="emp_email" ng-model="emp.emp_email" ng-required="true"  ng-pattern="/^.+@.+\..+$/" />
                <div ng-messages="empfrm.emp_email.$error" ng-if="empfrm.$submitted || empfrm.emp_email.$touched"  role="alert" >
                    <div ng-message-exp="['required','pattern']">
                        Please enter a valid e-mail address.
                    </div>
                </div>
            </md-input-container>
            <div layout="row" layout-align="start start">
                <md-select name="ccode" id="code" class="ccode" aria-label="Country Code"  ng-model="dialcode" ng-change="dialCode(dialcode)">
                    <md-option  ng-repeat="code in codes" value="{{code.name}}-{{code.dial_code}}">{{code.name}}{{code.dial_code}}</md-option>
                </md-select>
                <span id="ccode_afterselect">+91</span>
                <md-input-container class="md-block mblno_container" md-is-error="empfrm.mobileNo.$invalid && (empfrm.$submitted || empfrm.mobileNo.$dirty)">
                    <label id="mblnm_label">Mobile Number</label>
                    <input id="mobileNo" name="mobileNo" ng-required="true" ng-model="emp.mobileNo" ng-pattern="/^[(]?[0-9]{3}[)]?[-.]?[0-9]{3}[-.]?[0-9]{4,6}$/"  type="text" >
                <div ng-messages="empfrm.mobileNo.$error" ng-if="empfrm.$submitted || empfrm.mobileNo.$touched">
                    <div ng-message="required">Mobile Number is required.</div>
                    <div ng-message="pattern">Please enter a valid Mobile Number.</div>
                </div>
                </md-input-container>
            </div>
        
<!--            <md-input-container class="md-block" >
                <label>Phone Number</label>
                <input type="number"  name="emp_phn" ng-required="true"   ng-pattern="/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/" ng-model="emp.emp_phn">
                <div ng-messages="empfrm.emp_phn.$error" ng-if="empfrm.$submitted || empfrm.emp_phn.$touched">
                    <div ng-message-exp="['required', 'pattern']">Please enter a valid 10 digit phone number.</div>
                </div>
            </md-input-container>-->
            <md-input-container class="md-block" md-is-error="empfrm.emp_addr.$invalid && (empfrm.$submitted || empfrm.emp_addr.$dirty)" >
                <label>Address</label>
                <textarea  name="emp_addr" ng-required="true" ng-minlength="15" ng-maxlength="100" ng-model="emp.emp_addr"></textarea>
                <div ng-messages="empfrm.emp_addr.$error" ng-if="empfrm.$submitted || empfrm.emp_addr.$touched">
                    <div ng-message="required">Please enter a valid address.</div>
                    <div ng-message="minlength">address is too short</div>
                    <div ng-message="maxlength">address is too long</div>
                </div>
            </md-input-container>
            <md-input-container class="md-block" md-is-error="empfrm.emp_level.$invalid && (empfrm.$submitted || empfrm.emp_level.$dirty)">
                <label>Level</label>
                <md-select name="emp_level" ng-required="true" ng-model="emp.emp_level" >
                    <md-option  value="Admin">Admin</md-option>
                    <md-option  value="Employee">Employee</md-option>
                </md-select>
                <div ng-messages="empfrm.emp_level.$error" ng-if="empfrm.$submitted || empfrm.emp_level.$touched">
                    <div ng-message="required">Please select level.</div>
                </div>
            </md-input-container>
            <md-input-container layout layout-align="center center">
                <md-button type="submit"  class="md-raised md-primary" >submit</md-button>
            </md-input-container>
        </form>
    </div>
  </md-dialog-content>
</md-dialog>