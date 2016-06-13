<?php
//session_start();
if(isset($_SESSION['user_name'])) {
    header("Location:/leads");
}
?>

<div layout="row"  layout-align="center center" style="height:100%">
  <div layout="column" layout-align="center center" >
    <div  layout="row" layout-align="center center" >
    <div class="md-whiteframe-z1 lgn"  layout="column" layout-align="">
      <md-toolbar>
        <div class="md-toolbar-tools">
          Login
        </div>
      </md-toolbar>
      <md-content layout="column" class="md-padding">
        <form name="lgnfrm" action="main_login.php" method="post" >
          <md-input-container class="md-block">
            <label class="md-accent">username</label>
            <input type="text" md-maxlength="30" required  name="username" ng-model="lgnfrm_username">
            <div ng-messages="lgnfrm.username.$error">
              <div ng-message="required">username is required.</div>
              <div ng-message="md-maxlength">The username has to be less than 30 characters long.</div>
            </div>  
          </md-input-container>
          <md-input-container class="md-block">
            <label>Password</label>
            <input type="password" md-maxlength="30" required name="pwd" ng-model="lgnfrm_pwd">
            <div ng-messages="lgnfrm.pwd.$error">
              <div ng-message="required">password is required.</div>
              <div ng-message="md-maxlength">The password has to be less than 30 characters long.</div>
            </div>
          </md-input-container>
          <div layout layout-align="center center">
              <md-button type="submit" class="md-raised md-primary"  name="login">submit</md-button>
          </div>
        </form>
      </md-content>
      </div>  
    </div> 
  </div>
</div>
