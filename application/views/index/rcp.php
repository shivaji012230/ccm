<div layout="column" layout-align="space-between stretch" class="minhgt">
    <md-content>
        <div layout="column" layout-align="center center">
            <div>
                <div class="md-padding"></div>
                <md-button class="md-raised md-accent" ng-click="addNewClicked = !addNewClicked;">Add New Rcp</md-button>
            </div>
            <div ng-init="addNewClicked = false;" ng-if="addNewClicked" class="lgn" style="box-shadow:0px 0px 3px 0.2px;" layout-padding >
                <form name="rcpfrm" ng-submit="addRcp()" >
                    <md-input-container class="md-block">
                        <label >Name</label>
                        <input type="text" md-maxlength="30" required  name="name" ng-model="rcpfrm_name">
                        <div ng-messages="rcpfrm.name.$error">
                            <div ng-message="required">username is required.</div>
                            <div ng-message="md-maxlength">The username has to be less than 30 characters long.</div>
                        </div>  
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Email</label>
                        <input required type="email" name="email" ng-model="empfrm_email" minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />
                        <div ng-messages="rcpfrm.email.$error" role="alert">
                            <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
                                Your email must be between 10 and 100 characters long and look like an e-mail address.
                            </div>
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Phone Number</label>
                        <input type="text"  required name="phn" ng-model="rcpfrm_phn">
                        <div ng-messages="rcpfrm.phn.$error">
                            <div ng-message="required">phone number is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Address</label>
                        <input type="textarea"  required name="addr" ng-model="rcpfrm_addr">
                        <div ng-messages="rcpfrm.addr.$error">
                            <div ng-message="required">Address is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container flex="100">
                        <label>Level</label>
                        <md-select name="level" required ng-model="rcpfrm_level" >
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