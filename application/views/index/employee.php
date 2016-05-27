<div layout="column" layout-align="space-between stretch" class="minhgt">
    <md-content>
        <div layout="column" layout-align="center center">
	        <div>
	        	<div class="md-padding"></div>
	            <md-button class="md-raised md-accent" ng-click="addNewClicked=!addNewClicked;">Add New Employee</md-button>
	        </div>
	        <div ng-init="addNewClicked=false;" ng-if="addNewClicked" class="lgn" style="box-shadow:0px 0px 3px 0.2px;" layout-padding >
	            <form name="empfrm" ng-submit="addEmp()" >
	                <md-input-container class="md-block">
	                    <label >Name</label>
	                    <input type="text" md-maxlength="30" required  name="emp_name" ng-model="empfrm_name">
	                    <div ng-messages="empfrm.emp_name.$error">
	                        <div ng-message="required">username is required.</div>
	                        <div ng-message="md-maxlength">The username has to be less than 30 characters long.</div>
	                    </div>  
	                </md-input-container>
	                <md-input-container class="md-block">
	                    <label>Email</label>
	                    <input required type="email" name="emp_email" ng-model="empfrm_email" minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />
	                    <div ng-messages="empfrm.emp_email.$error" role="alert">
	                      <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
	                        Your email must be between 10 and 100 characters long and look like an e-mail address.
	                      </div>
	                    </div>
	                </md-input-container>
	                <md-input-container class="md-block">
	                    <label>Phone Number</label>
	                    <input type="text"  required name="emp_phn" ng-model="empfrm_phn">
	                    <div ng-messages="empfrm.emp_phn.$error">
	                        <div ng-message="required">phone number is required.</div>
	                    </div>
	                </md-input-container>
	                <md-input-container class="md-block">
	                    <label>Address</label>
	                    <input type="textarea"  required name="emp_addr" ng-model="empfrm_addr">
	                    <div ng-messages="empfrm.emp_addr.$error">
	                        <div ng-message="required">Address is required.</div>
	                    </div>
	                </md-input-container>
	                <md-input-container flex="100">
	                    <label>Level</label>
	                    <md-select name="emp_level" required ng-model="empfrm_level" >
	                      <md-option  value="Admin">Admin</md-option>
	                      <md-option  value="Employee">Employee</md-option>
	                    </md-select>
	                </md-input-container><br>
	                <md-input-container layout layout-align="center center">
	                    <md-button type="submit" class="md-raised md-primary">submit</md-button>
	                </md-input-container>
	            </form>
	        </div>
	        <div class="md-padding"></div>
	        <div>
	            <table>
	                <tr>
	                    <th>Name</th>
	                    <th>Level</th>
	                    <th>options</th>
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