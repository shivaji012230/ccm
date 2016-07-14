<md-dialog aria-label="empfrm"  layout="column" class="dialog_width">
    <div class="md-toolbar-tools">
        <h3 class="dighead">General Information</h3>
        <span flex></span>
        <md-button class="md-icon-button " aria-label="cancel" ng-click="cancel()">
            <md-icon class="md-default-theme" class="material-icons"><img src="images/close_black.png" class="width_24"></md-icon>
        </md-button>
    </div>
    <md-dialog-content>
        <div class="md-dialog-content md-padding"  layout="column" >
            <form name="generalfrm" id="generalFormDetails" ng-submit="generalfrm.$valid && generalEditProfile(userDetails,$event)" novalidate>
                <md-input-container class="md-block" md-is-error="generalfrm.emp_name.$invalid && (generalfrm.$submitted || generalfrm.emp_name.$dirty)">
                    <label>Name</label>
                    <input type="text"  ng-required="true" ng-minlength="5" ng-maxlength="30" name="emp_name" ng-model="userDetails.msg[0].name" ng-pattern="/^[a-zA-Z\s.]*$/">
                    <div ng-messages="generalfrm.emp_name.$error" ng-if="generalfrm.$submitted || generalfrm.emp_name.$touched" role="alert" >
                        <div ng-message="required">Please enter a name.</div>
                        <div ng-message="minlength">Name is too short</div>
                        <div ng-message="maxlength">Name is too long</div>
                        <div ng-message="pattern">Name field not allowed special charecters except dot</div>
                    </div>
                </md-input-container>
                <md-input-container class="md-block" md-is-error="generalfrm.customer_pan.$invalid && (generalfrm.$submitted || generalfrm.customer_pan.$dirty)">
                    <label>Customer PAN Number</label>
                    <input type="text"  name="customer_pan" ng-required="true" ng-pattern="/^([A-Z]){5}([0-9]){4}([A-Z]){1}$/" ng-model="userDetails.msg[0].pan">
                    <div ng-messages="generalfrm.customer_pan.$error" ng-if="generalfrm.$submitted || generalfrm.customer_pan.$touched">
                        <div ng-message="required">PAN card number is required.</div>
                        <div ng-message="pattern">Please enter a valid PAN card number.</div>
                    </div>
                </md-input-container>                
                <md-input-container layout layout-align="end center">
                    <md-button type="submit"  class="md-primary " >save</md-button>
<!--                    <md-button  class="md-accent " ng-click="empResetForm()">reset</md-button>-->
                </md-input-container>
            </form>
        </div>
    </md-dialog-content>
</md-dialog>