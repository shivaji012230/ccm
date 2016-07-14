<md-dialog aria-label="securityfrm"  layout="column" class="dialog_width">
    <div class="md-toolbar-tools">
        <h3 class="dighead">Security</h3>
        <span flex></span>
        <md-button class="md-icon-button" aria-label="cancel" ng-click="cancel()">
            <md-icon class="md-default-theme" class="material-icons"><img src="images/close_black.png" class="width_24"></md-icon>
        </md-button>
    </div>
    <md-dialog-content>
        <div class="md-dialog-content md-padding"  layout="column" >
            <form name="securityfrm" id="securityFormDetails" ng-submit="securityfrm.$valid && securityEditProfile( $event)" novalidate>                
                <md-input-container class="md-block" md-is-error="securityfrm.username.$invalid && (securityfrm.$submitted || securityfrm.username.$dirty)">
                    <label class="md-accent">username</label>
                    <input type="text" ng-minlength="5" ng-maxlength="25" ng-required="true"  name="username" ng-model="user" ng-pattern="/^[\w\.\@]{5,25}$/">
                    <div ng-messages="securityfrm.username.$error" ng-if="securityfrm.$submitted || securityfrm.username.$touched">
                        <div ng-message="required">username is required.</div>
                        <div ng-message="maxlength">The username has to be less than 25 characters long.</div>
                        <div ng-message="minlength">The username has to be grater than 5 characters long.</div>
                        <div ng-message="pattern">The username allows numbers,digits,special charecters<br>and not allow to spaces.</div>
                    </div>  
                </md-input-container>
                <md-input-container class="md-block" md-is-error="securityfrm.pw1.$invalid && (securityfrm.$submitted || securityfrm.pw1.$dirty)">
                    <label>Password</label>
                    <input type="password" ng-maxlength="10" ng-minlength="8" ng-required="true" id='pw1' name="pw1" ng-pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,10}$/" ng-model="pw1">
                    <div ng-messages="securityfrm.pw1.$error" ng-if="securityfrm.$submitted || securityfrm.pw1.$touched">
                        <div ng-message="required">password is required.</div>
                        <div ng-message="maxlength">The password has to be less than 10 characters long.</div>
                        <div ng-message="minlength">The password has to be grater than 8 characters long.</div>
                        <div ng-message="pattern">The password has to be Atleast 1 uppercase and 1 lowercase <br> and 1 number and 1 special charecter.</div>
                    </div>
                </md-input-container>
                <md-input-container class="md-block">
                    <label>Confirm Password</label>
                    <input type="password" id='pw2' name="pw2" ng-model="pw2" pwd-Check="pw1"   >
                   <div class="msg-block" ng-show="securityfrm.$error">
                    <span style="color:red;" ng-show="securityfrm.pw2.$error.pwmatch">Passwords don't match.</span>
                </div> 
                </md-input-container>
                
                <md-input-container layout layout-align="end center">
                    <md-button type="submit"  class="md-primary">save</md-button>
                </md-input-container>
                
            </form>
        </div>
    </md-dialog-content>
</md-dialog>