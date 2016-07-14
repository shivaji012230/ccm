<md-dialog aria-label="contactfrm"  layout="column" class="dialog_width">
    <div class="md-toolbar-tools">
        <h3 class="dighead">Contact</h3>
        <span flex></span>
        <md-button class="md-icon-button " aria-label="cancel" ng-click="cancel()">
            <md-icon class="md-default-theme" class="material-icons"><img src="images/close_black.png" class="width_24"></md-icon>
        </md-button>
    </div>
    <md-dialog-content >
        <div class="md-dialog-content md-padding"  layout="column">
            <form name="contactfrm" id="contactFormDetails" ng-submit="contactfrm.$valid && contactEditProfile(userDetails,$event)" novalidate>
                <md-input-container class="md-block" md-is-error="contactfrm.emp_email.$invalid && (contactfrm.$submitted || contactfrm.emp_email.$dirty)">
                    <label>Email</label>
                    <input  type="text"  name="emp_email" ng-model="userDetails.msg[0].email" ng-required="true"  ng-pattern="/^.+@.+\..+$/" />
                    <div ng-messages="contactfrm.emp_email.$error" ng-if="contactfrm.$submitted || contactfrm.emp_email.$touched"  role="alert" >
                        <div ng-message-exp="['required','pattern']">
                            Please enter a valid e-mail address.
                        </div>
                    </div>
                </md-input-container>
                <div layout="row" layout-align="start start">
                    <md-input-container class="md-block" md-is-error="contactfrm.ccode.$invalid && (contactfrm.$submitted || contactfrm.ccode.$dirty)" >
                        <md-select name="ccode" id="code" class="ccode" aria-label="Country Code"  ng-model="dialcode" ng-change="dialCode(dialcode)" md-on-open="countryDialCode()">
                            <md-option  ng-repeat="code in codes" ng-value="code">{{code.name}}&nbsp;&nbsp;{{code.dial_code}}</md-option>
                        </md-select>
                        <div ng-messages="contactfrm.ccode.$error" ng-if="contactfrm.$submitted || contactfrm.ccode.$touched">
                            <div ng-message="required">Please select level.</div>
                        </div>
                    </md-input-container>    
                    <span id="ccode_afterselect">+91</span>
                    <md-input-container class="md-block mblno_container" md-is-error="contactfrm.mobileNo.$invalid && (contactfrm.$submitted || contactfrm.mobileNo.$dirty)">
                        <label id="mblnm_label">Mobile Number</label>
                        <input id="mobileNo" name="mobileNo" ng-required="true" ng-model="userDetails.msg[0].phone" ng-pattern="/^[(]?[0-9]{3}[)]?[-.]?[0-9]{3}[-.]?[0-9]{4,6}$/"  type="text" >
                        <div ng-messages="contactfrm.mobileNo.$error" ng-if="contactfrm.$submitted || contactfrm.mobileNo.$touched">
                            <div ng-message="required">Mobile Number is required.</div>
                            <div ng-message="pattern">Please enter a valid Mobile Number.</div>
                        </div>
                    </md-input-container>
                </div>
                <md-input-container class="md-block" md-is-error="contactfrm.emp_addr.$invalid && (contactfrm.$submitted || contactfrm.emp_addr.$dirty)" >
                    <label>Address</label>
                    <textarea  name="emp_addr" ng-required="true" ng-minlength="15" ng-maxlength="100" ng-model="userDetails.msg[0].addr"></textarea>
                    <div ng-messages="contactfrm.emp_addr.$error" ng-if="contactfrm.$submitted || contactfrm.emp_addr.$touched">
                        <div ng-message="required">Please enter a valid address.</div>
                        <div ng-message="minlength">address is too short</div>
                        <div ng-message="maxlength">address is too long</div>
                    </div>
                </md-input-container>                
                <md-input-container layout layout-align="end center">
                    <md-button type="submit"  class="md-primary " >save</md-button>
                </md-input-container>
            </form>
        </div>
    </md-dialog-content>
</md-dialog>