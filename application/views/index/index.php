<?php
//session_start();
if(isset($_SESSION['user_name'])) {
    header("Location:/leads");
}
?>

<div layout="row"  layout-align="center center" style="height:100%" >
    <div layout="column" layout-align="center center" >
        <div  layout="row" layout-align="center center" >
            <div class="md-whiteframe-z1 lgn" layout="column" layout-align="">
                <md-toolbar>
                    <div class="md-toolbar-tools">
                        Login
                    </div>
                </md-toolbar>
                <md-content layout="column" class="md-padding">
                    <form name="lgnfrm" id="loginFormDetails" ng-submit="lgnfrm.$valid && loginF(login,$event)" novalidate>
                        <md-input-container class="md-block" md-is-error="lgnfrm.username.$invalid && (lgnfrm.$submitted || lgnfrm.username.$dirty)">
                            <label class="md-accent">username</label>
                            <input type="text" ng-minlength="5" ng-maxlength="25" ng-required="true"  name="username" ng-model="login.username" ng-pattern="/^[\w\.\@]{5,25}$/">
                            <div ng-messages="lgnfrm.username.$error" ng-if="lgnfrm.$submitted || lgnfrm.username.$touched">
                                <div ng-message="required">username is required.</div>
                                <div ng-message="maxlength">The username has to be less than 25 characters long.</div>
                                <div ng-message="minlength">The username has to be grater than 5 characters long.</div>
                                <div ng-message="pattern">The username allows numbers,digits,special charecters<br>and not allow to spaces.</div>
                            </div>  
                        </md-input-container>
                        <md-input-container class="md-block" md-is-error="lgnfrm.pwd.$invalid && (lgnfrm.$submitted || lgnfrm.pwd.$dirty)">
                            <label>Password</label>
                            <input type="password" ng-maxlength="10" ng-minlength="8" ng-required="true" name="pwd" ng-pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,10}$/" ng-model="login.pwd">
                            <div ng-messages="lgnfrm.pwd.$error" ng-if="lgnfrm.$submitted || lgnfrm.pwd.$touched">
                                <div ng-message="required">password is required.</div>
                                <div ng-message="maxlength">The password has to be less than 10 characters long.</div>
                                <div ng-message="minlength">The password has to be grater than 8 characters long.</div>
                                <div ng-message="pattern">The password has to be Atleast 1 uppercase and 1 lowercase <br> and 1 number and 1 special charecter.</div>
                            </div>
                        </md-input-container>
                        <div layout layout-align="center center">
                            <md-button type="submit" class="md-raised md-primary"  name="login" >submit</md-button>
                        </div>
                    </form>
                </md-content>
            </div>  
        </div> 
    </div>
</div>

