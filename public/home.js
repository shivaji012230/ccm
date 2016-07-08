var app = angular.module("ccmApp", ['ngAnimate', 'ngAria', 'ngMaterial', 'ngMessages']);

app.config(function ($mdThemingProvider) {
    $mdThemingProvider.theme('default')
            .primaryPalette('blue', {
                'default': '500'
            })
            .accentPalette('orange');
});

app.controller("ccm_controller", ["$scope", "$mdDialog", "$http", 'ccmFactory','$mdToast', function ($scope, $mdDialog, $http, ccmFactory, $mdToast) {
        $scope.leadsJsonNew = [];
        $scope.loading = true;
        $scope.totalDisplayed = 20;
//        $scope.loadMores = function () {
//            $scope.totalDisplayed += 20;  
//        };
        ccmFactory.getData("public/leads.json").success(function(data){                
            angular.forEach(data.msg,function(value,index){
                var id = Math.floor(Math.random() * 10000);
                $scope.leadsJsonNew[index] = value;
                $scope.leadsJsonNew[index].id  = id;                    
                $scope.leadsJsonNew[index].biz = JSON.parse($scope.leadsJsonNew[index].biz);
                console.log("each time");
            });                                                
        });
        $scope.loadMore = function(){            
            $scope.totalDisplayed += 20;
        };        
        ccmFactory.getData("public/countryCodes.json",{fname:'fname',lname:'lname'}).success(function(data){          
           $scope.codess = data;
           for (i = 0; i < Object.keys($scope.codess).length; i++) {
                var id = Math.floor(Math.random() * 10000);
                $scope.codess[i].id = id;
            }
        });
        $scope.login = {'username': '', 'pwd': ''};
        $scope.addNewEmployee = function () {
            $mdDialog.show({
                templateUrl: '/partials/empfrm',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'DialogController'
            });
        };
        $scope.addNewRcp = function () {
            $mdDialog.show({
                templateUrl: '/partials/rcpfrm',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'DialogController'
            });
        };
        $scope.addNewLead = function () {
            $mdDialog.show({
                templateUrl: '/partials/leadsfrm',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'DialogController'
            });
        };

        $scope.toast = $mdToast.simple({
            templateUrl: "/partials/toast",
            position: 'bottom left',
            parent: angular.element(document.querySelector('#toastContainer')),
            hideDelay: 2000
        });
        $scope.loginF = function (login, event) {
            $params = $.param({
                'username': login.username,
                'pwd': login.pwd
            });
            var url = "main_login.php";
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        if (data === "login") {
                            alert("Login successful");
                            window.location = "leads";
                        }
                    })
                    .error(function (data, status, headers, config) {
                        console.log("Data Not Inserted");
                    });
        };
        $scope.chckedIndexs = [];
        $scope.accept_reject = function (event) {
            $(".country_table tbody tr td md-checkbox").each(function () {
                if ($(this).hasClass('md-checked')) {
                    $scope.chckedIndexs.push($(this).closest("tr").attr('id'));
                    $(this).closest("tr").remove();
                }
            });
            var url = event.currentTarget.id;
            $params = $.param({
                'id': $scope.chckedIndexs
            });
            $scope.chckedIndexs = [];
            ccmFactory.postData($params, url)
                .success(function () {
                    console.log('success');
                })
                .error(function () {
                    console.log('failure');
                });
        };
        $scope.accept = function (index, event) {
            var id = event.currentTarget.id;
            var url = "approve.php";
            $scope.leadsJson.splice(index, 1);
            $params = $.param({
                'id': id
            });
            ccmFactory.postData($params, url)
                .success(function (data, status, headers, config) {
                    $mdToast.show(
                            $mdToast.simple({
                                template: "<md-toast class='fade' id='toastId'>" +
                                        "<span class='md-toast-text' flex > Accepted </span>" +
                                        "</md-toast>",
                                position: 'bottom left',
                                parent: angular.element(document.querySelector('#toastContainer')),
                                hideDelay: 2000
                            })
                            );
                })
                .error(function (data, status, headers, config) {
                    console.log("Something Wrong");
                });
        };
        $scope.reject = function (index, event) {
            $scope.leadsJson.msg.splice(index, 1);
            var id = event.currentTarget.id;
            var url = "reject.php";
            $params = $.param({
                'id': id
            });
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        $mdToast.show(
                                $mdToast.simple({
                                    template: "<md-toast  class='fade' id='toastId'>" +
                                            "<span class='md-toast-text' flex > Rejected </span>" +
                                            "</md-toast>",
                                    position: 'bottom left',
                                    parent: angular.element(document.querySelector('#toastContainer')),
                                    hideDelay: 2000
                                })
                                );
                    })
                    .error(function (data, status, headers, config) {
                        console.log("Something Wrong");
                    });
        };
        $scope.suspend = function (index, event) {
            var url = "suspend.php";
            var id = event.currentTarget.id;
            $scope.codess.splice(index, 1);
            //$scope.suspend_id = Math.floor(Math.random() * 10000);
            $params = $.param({
                'id': id
            });
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        $mdToast.show(
                                $mdToast.simple({
                                    template: "<md-toast  class='fade' id='toastId'>" +
                                            "<span class='md-toast-text' flex > Suspended </span>" +
                                            "</md-toast>",
                                    position: 'bottom left',
                                    parent: angular.element(document.querySelector('#toastContainer')),
                                    hideDelay: 2000
                                })
                                );
                    })
                    .error(function (data, status, headers, config) {
                        console.log("Something Wrong");
                    });
        };
        $scope.delete = function (index, event) {
            var url = "delete.php";
            var id = event.currentTarget.id;
            $scope.codess.splice(index, 1);
            //$scope.delete_id = Math.floor(Math.random() * 10000);
            $params = $.param({
                'id': id
            });
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        $mdToast.show(
                            $mdToast.simple({
                                template: "<md-toast  class='fade' id='toastId'>" +
                                        "<span class='md-toast-text' flex > Deleted </span>" +
                                        "</md-toast>",
                                position: 'bottom left',
                                parent: angular.element(document.querySelector('#toastContainer')),
                                hideDelay: 2000
                            })
                        );
                    })
                    .error(function (data, status, headers, config) {
                        console.log("Something Wrong");
                    });

        };        
        $scope.exportData = function () {
            $(".country_table").table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: "myFileName",
                fileext: ".xls"
            });
        };
        $('.menu_cls').click(function () {
            $(this).toggleClass('active');
        });

    }]);
app.directive("whenScrolled",function($document){
    return {        
        link:function(scope,elem,attrs){
            raw = elem[0];
            console.log(elem);
            console.log(raw);
            $document.bind('scroll',function(){
//                console.log("shivaji");
//                console.log(elem.length);
                console.log(angular.element(document.querySelector(".footer"))[0].scrollHeight);
                if(raw.scrollTop+raw.offsetHeight >= raw.scrollHeight-200){
                    console.log(raw.scrollTop);
                    console.log(raw.offsetHeight);
                    console.log(raw.scrollHeight);                                        
                    scope.$apply(attrs.whenScrolled);                    
                }
            });
            //console.log(raw.scrollHeight);
        }
    };
});
app.directive('dateValidation', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attributes, controller) {
            controller.$validators.date1 = function () {
                var datepicker = document.getElementById("dateField");
                var dateInput = datepicker.querySelector("input").value;
                var newDate = dateInput.split("/");
                var day = newDate[1];
                var month = newDate[0];
                var year = newDate[2];
                if ((month == 4 || month == 6 || month == 9 || month == 11) && day == 31) {
                    return false;
                } else if (month == 2) {
                    var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
                    if (day > 29 || (day == 29 && !isleap)) {
                        return false;
                    }
                }
                return true;
            };
        }
    };
});

app.factory('ccmFactory', ['$http', function ($http) {
        $http.defaults.headers.post["Content-Type"] = 'application/x-www-form-urlencoded; charset=utf-8';
        return {
            getData: function (url) {
//                var getParams = Object.keys(data).map(function(param){
//            return encodeURIComponent(param) + '=' + encodeURIComponent(data[param]);
//        }).join('&');
                return $http({
                    method: "GET",
                    url: '/'+url
                });
            },
            postData: function (data, url) {
                return $http({
                    method: "POST",
                    url: url,
                    data: data
                });
            }
        };
    }]);
app.controller("DialogController", ['$scope', 'ccmFactory', '$mdDialog', '$http', '$timeout', '$mdToast', function ($scope, ccmFactory, $mdDialog, $http, $timeout, $mdToast) {

        $scope.username = "";
        $scope.items = [{"name": "Self Employeed"}, {"name": 'Employee'}, {"name": 'Professional'}];
        $scope.leads = {"customer_name": "", "customer_addr": "", "select_customer": "", "self_emp": "",
            "yes_no": "", "monthly_card_sales": "", "myDate": new Date(), "Owned_Returned": "",
            "nature_of_business": "", "mobileNo": "", "employee": "", "professional": "",
            "customer_Annual_Income": "10-25", "customer_pan": "", "customer_aadhaar": ""};
        $scope.emp = {"emp_name": "", "emp_email": "", "mobileNo": "", "emp_addr": "", "emp_level": ""};
        $scope.rcp = {"rcp_name": "", "rcp_email": "", "mobileNo": "", "rcp_addr": "", "rcp_level": ""};
        $scope.dialcode = "+91";
        $scope.toast = $mdToast.simple({
            templateUrl: "/partials/toast",
            position: 'bottom left',
            parent: angular.element(document.querySelector('#toastContainer')),
            hideDelay: 2000
        });
        $scope.empFormData = function (emp, event) {
            var url = event.target.id;
            $params = $.param({
                'emp_name': emp.emp_name,
                'emp_email': emp.emp_email,
                'phone': $scope.dialcode + emp.mobileNo,
                'emp_addr': emp.emp_addr,
                'emp_level': emp.emp_level
            });
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        $mdDialog.cancel();
                        $timeout(function () {
                            $mdToast.show($scope.toast);
                        }, 100);
                    })
                    .error(function (data, status, headers, config) {
                        console.log("Data Not Inserted");
                    });
        };
        $scope.rcpFormData = function (rcp, event) {
            var url = event.target.id;
            $params = $.param({
                'rcp_name': rcp.rcp_name,
                'rcp_email': rcp.rcp_email,
                'phone': $scope.dialcode + rcp.mobileNo,
                'rcp_addr': rcp.rcp_addr,
                'rcp_level': rcp.rcp_level
            });
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        $mdDialog.cancel();
                        $timeout(function () {
                            $mdToast.show($scope.toast);
                        }, 100);
                    })
                    .error(function (data, status, headers, config) {
                        console.log("Data Not Inserted");
                    });
        };
        $scope.leadsFormData = function (leads, event) {
            var url = event.target.id;
            $params = $.param({
                'customer_name': leads.customer_name,
                'customer_addr': leads.customer_addr,
                'group': leads.select_customer,
                'self_emp': leads.self_emp,
                'yes_no': leads.yes_no,
                'monthly_card_sales': leads.monthly_card_sales,
                'pos_business': leads.myDate.getMonth() + 1 + "-" + leads.myDate.getDate() + "-" + leads.myDate.getFullYear(),
                'Owned_Returned': leads.Owned_Returned,
                'nature_of_business': leads.nature_of_business,
                'business_phn': $scope.dialcode + leads.mobileNo,
                'employee': leads.employee,
                'professional': leads.professional,
                'customer_Annual_Income': leads.customer_Annual_Income,
                'customer_pan': leads.customer_pan,
                'customer_aadhaar': leads.customer_aadhaar
            });
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        $mdDialog.cancel();
                        $timeout(function () {
                            $mdToast.show($scope.toast);
                        }, 100);
                    })
                    .error(function (data, status, headers, config) {
                        console.log("Data Not Inserted");
                    });
        };

        $scope.countryDialCode = function () {
            $timeout(function () {
                ccmFactory.getData(function (countryJson) {
                    $scope.codes = countryJson;
                });
            }, 100);
        };
        $scope.cancel = function () {
            $mdDialog.cancel();
        };
        $scope.empResetForm = function () {
            $scope.emp = {};
            $scope.empfrm.$setPristine();
            $scope.empfrm.$setUntouched();
        };
        $scope.rcpResetForm = function () {
            $scope.rcp = {};
            $scope.rcpfrm.$setPristine();
            $scope.rcpfrm.$setUntouched();
        };
        $scope.leadsResetForm = function () {
            $scope.leads = {};
            $scope.leadsfrm.$setPristine();
            $scope.leadsfrm.$setUntouched();
        };
        $scope.dialCode = function (ccode) {
            $scope.dialcode = ccode.dial_code;
            document.getElementById("ccode_afterselect").innerHTML = ccode.dial_code;
        };
        $scope.aadhar = function () {
            var aadharValLength = document.getElementById("customer_aadhaar").value.length;
            switch (aadharValLength) {
                case 4:
                    var aadharVal = document.getElementById("customer_aadhaar").value;
                    var aadharNewVal = aadharVal + '-';
                    document.getElementById("customer_aadhaar").value = aadharNewVal;
                    break;
                case 9:
                    var aadharVal = document.getElementById("customer_aadhaar").value;
                    var aadharNewVal = aadharVal + '-';
                    document.getElementById("customer_aadhaar").value = aadharNewVal;
                    break;
                default:
                    break;
            }
        };
    }]);
//app.factory('ccmApp', ['$http',  function ($http) {
//    $http.defaults.headers.post["Content-Type"] = 'application/x-www-form-urlencoded; charset=utf-8';
//    var ccmData = {};
//
//    ccmData.postData = function (data, url) {
//
//        return $http({
//            method: 'POST',
//            url:  '/' + url,
//            data: $.param(data)
//        });
//    };
//
//    ccmData.getData = function(url, data) {
//        var getParams = Object.keys(data).map(function(param){
//            return encodeURIComponent(param) + '=' + encodeURIComponent(data[param]);
//        }).join('&');
//        return $http({
//            method : 'GET',
//            url : '/' + url + '?' + getParams
//        });
//    };
//
//    return ccmData;
//}]);
