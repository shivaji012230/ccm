var app = angular.module("ccmApp", ['ngAnimate', 'ngAria', 'ngMaterial', 'ngMessages']);

app.config(function ($mdThemingProvider) {
    $mdThemingProvider.theme('default')
            .primaryPalette('blue', {
                'default': '500'
            })
            .accentPalette('orange');
});
app.controller("ccm_controller", ["$scope", "$mdDialog", "$interval", 'ccmFactory', '$mdToast', '$timeout', '$rootScope', '$filter', function ($scope, $mdDialog, $interval, ccmFactory, $mdToast, $timeout, $rootScope, $filter) {
        $scope.child = {};
        $scope.dialcode = "+91";
        $scope.dob = "25-04-1991";
        $scope.general = {"dob": new Date("04 25,1991 "), "gender": "Male"};
        $scope.user = 'shivaji';
        $scope.pw1 = '';
        $scope.leadsJsonNew = [];
        $scope.totalDisplayed = 20;
        $scope.imagePath = "images/myPic.jpg";
        $scope.security = {'username': 'shivaji', 'password': ''};
        $scope.items = [{"name": "Self Employeed"}, {"name": 'Employee'}, {"name": 'Professional'}];
        $scope.leads = {"customer_name": "", "customer_addr": "", "select_customer": "", "self_emp": "",
            "yes_no": "", "monthly_card_sales": "", "myDate": new Date(), "Owned_Returned": "",
            "nature_of_business": "", "mobileNo": "", "employee": "", "professional": "",
            "customer_Annual_Income": "10-25", "customer_pan": "", "customer_aadhaar": ""};
        $scope.emp = {"emp_name": "", "emp_email": "", "mobileNo": "", "emp_addr": "", "emp_level": ""};
        $scope.rcp = {"rcp_name": "", "rcp_email": "", "mobileNo": "", "rcp_addr": "", "rcp_level": ""};
        ccmFactory.getData("public/js/users.json").success(function (data) {
            $scope.userDetails = data;
        });
        ccmFactory.getData("public/js/leads.json").success(function (data) {
            angular.forEach(data.msg, function (value, index) {
                var id = Math.floor(Math.random() * 10000);
                $scope.leadsJsonNew[index] = value;
                $scope.leadsJsonNew[index].id = id;
                $scope.leadsJsonNew[index].biz = JSON.parse($scope.leadsJsonNew[index].biz);
            });
        });
        ccmFactory.getData("public/js/countryCodes.json").success(function (data) {
            $scope.codess = data;
            for (i = 0; i < Object.keys($scope.codess).length; i++) {
                var id = Math.floor(Math.random() * 10000);
                $scope.codess[i].id = id;
            }
        });
        //$scope.foo = pwdService.foo();
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
            console.log(ccode);
            $scope.dialcode = ccode.dial_code;
            console.log($scope.dialcode);
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
        $scope.loadMore = function () {
            $scope.totalDisplayed += 20;
        };
        $scope.login = {'username': '', 'pwd': ''};
        $scope.addNewEmployee = function () {
            $mdDialog.show({
                templateUrl: '/partials/empfrm',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'ccm_controller'
            });
        };
        $scope.addNewRcp = function () {
            $mdDialog.show({
                templateUrl: '/partials/rcpfrm',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'ccm_controller'
            });
        };
        $scope.addNewLead = function () {
            $mdDialog.show({
                templateUrl: '/partials/leadsfrm',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'ccm_controller'
            });
        };
        $scope.generalProfileEdit = function () {
            $mdDialog.show({
                templateUrl: '/partials/generaledit',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'ccm_controller'
            });
        };

        $scope.contactProfileEdit = function () {
            $mdDialog.show({
                templateUrl: '/partials/contactedit',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'ccm_controller'
            });
        };
        $scope.securityProfileEdit = function () {
            $mdDialog.show({
                templateUrl: '/partials/securityedit',
                clickOutsideToClose: false,
                escapeToClose: false,
                controller: 'ccm_controller'
            });

        };
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
                'dialcode': $scope.dialcode,
                'phone': emp.mobileNo,
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
                'dialcode': $scope.dialcode,
                'phone':rcp.mobileNo,
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
                'dialcode': $scope.dialcode,
                'business_phn':leads.mobileNo,
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
        $scope.generalEditProfile = function (userDetails, event) {
            var url = event.currentTarget.id;
            $params = $.param({
                'username': userDetails.msg[0].name,
                'dob': $scope.general.dob.getMonth() + 1 + "-" + $scope.general.dob.getDate() + "-" + $scope.general.dob.getFullYear(),
                'gender': $scope.general.gender,
                'pancard': userDetails.msg[0].pan
            });
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        $mdDialog.cancel();
                        $mdToast.show(
                                $mdToast.simple({
                                    template: "<md-toast  class='fade' id='toastId'>" +
                                            "<span class='md-toast-text' flex > Saved </span>" +
                                            "</md-toast>",
                                    position: 'bottom left',
                                    parent: angular.element(document.querySelector('#toastContainer')),
                                    hideDelay: 1000
                                })
                        );
                    })
                    .error(function () {
                        console.log("Data Not Inserted");
                    });
        };
        $scope.contactEditProfile = function (userDetails, event) {
            var url = event.currentTarget.id;
            $params = $.param({
                'user_email': userDetails.msg[0].email,
                'dialcode': $scope.dialcode,
                'phone':userDetails.msg[0].phone,
                'address': userDetails.msg[0].addr
            });
            ccmFactory.postData($params, url)
                    .success(function (data, status, headers, config) {
                        $mdDialog.cancel();
                        $mdToast.show(
                                $mdToast.simple({
                                    template: "<md-toast  class='fade' id='toastId'>" +
                                            "<span class='md-toast-text' flex > Saved </span>" +
                                            "</md-toast>",
                                    position: 'bottom left',
                                    parent: angular.element(document.querySelector('#toastContainer')),
                                    hideDelay: 1000
                                })
                        );
                    })
                    .error(function () {
                        console.log("Data Not Inserted");
                    });
        };
        $scope.securityEditProfile = function (event) {
            var url = event.currentTarget.id;
            $params = $.param({
                'user_id': $scope.user,
                'password': $scope.pw1,
                'cPassword': $scope.pw2
            });
            var startTime = new Date();
            ccmFactory.postData($params, url)
                    .success(function () {
                        $mdDialog.cancel();
                        $timeout(function () {
                            $mdToast.show(
                                $mdToast.simple({
                                    template: "<md-toast  class='fade' id='toastId'>" +
                                            "<span class='md-toast-text' flex > Saved </span>" +
                                            "</md-toast>",
                                    position: 'bottom left',
                                    parent: angular.element(document.querySelector('#toastContainer')),
                                    hideDelay: 1000
                                })
                            );
                        }, 100);                        
                        function passwordInterval() {
                            var seconds = Math.floor((new Date() - startTime) / 1000);
                            interval = Math.floor(seconds / 3600);
                            if (interval >= 24) {
                                return $rootScope.stopwatch = $filter('date')(startTime, "MMM dd");
                            }
                            if (interval >= 2) {
                                return $rootScope.stopwatch = interval + "hrs";
                            }
                            if (interval === 1) {
                                return $rootScope.stopwatch = interval + "hr";
                            }
                            interval = Math.floor(seconds / 60);
                            if (interval >= 2) {
                                return $rootScope.stopwatch = interval + " mins";
                            }
                            if (interval === 1) {
                                return $rootScope.stopwatch = interval + " min";
                            }
                            if (seconds > 1) {
                                return $rootScope.stopwatch = "few secs";
                            }
//                            if (seconds === 1) {
//                                return $rootScope.stopwatch = Math.floor(seconds) + " sec";
//                            }
                        }
                        if ($scope.pw1 !== '') {
                            //console.log($rootScope.promise);
                            if (angular.isDefined($rootScope.promise)) {                                
                                $interval.cancel($rootScope.promise);
                                $rootScope.promise = undefined;
                            }
                            $rootScope.promise = $interval(passwordInterval, 1000);
                        }

                    })
                    .error(function () {
                        console.log("Data Not Inserted");
                    });
        };
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
            $scope.leadsJsonNew.splice(index, 1);
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
            $scope.leadsJsonNew.splice(index, 1);
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
        $scope.suspend = function (event) {
            var id = event.currentTarget.id;
            $(".country_table tbody tr ").each(function () {
                if ($(this).attr('id') === id) {
                    $(this).remove();
                }
            });
            var url = "suspend.php";
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
        $scope.delete = function (event) {
            var url = "delete.php";
            var id = event.currentTarget.id;
            $(".country_table tbody tr ").each(function () {
                if ($(this).attr('id') === id) {
                    $(this).remove();
                }
            });
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
app.directive("whenScrolled", function ($document) {
    return {
        link: function (scope, elem, attrs) {
            raw = elem[0];
            $document.bind('scroll', function () {
                if (raw.scrollTop + raw.offsetHeight >= raw.scrollHeight - 200) {
                    scope.$apply(attrs.whenScrolled);
                }
            });
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


app.directive('pwdCheck', function () {
  return {
    require: 'ngModel',
    scope: {
      pwdCheck: '='
    },
    link: function(scope, element, attrs, ngModel) {
      scope.$watch('pwdCheck', function() {
        ngModel.$validate(); 
      });
      ngModel.$validators.match = function(modelValue) {
        if (!modelValue || !scope.pwdCheck) {
            return true;
        }        
        return modelValue === scope.pwdCheck;
      };
    }
  };
});
app.factory('ccmFactory', ['$http', function ($http) {
        $http.defaults.headers.post["Content-Type"] = 'application/x-www-form-urlencoded; charset=utf-8';
        return {
            getData: function (url) {
//            var getParams = Object.keys(data).map(function(param){
//            return encodeURIComponent(param) + '=' + encodeURIComponent(data[param]);
//           }).join('&');
                return $http({
                    method: "GET",
                    url: '/' + url
                });
            },
            postData: function (data, url) {
                return $http({
                    method: "POST",
                    url: url,
                    data: data
                });
            },
            pwdUpdate: function () {

            }
        };
    }]);
//app.factory('pwdService', function ($interval) {
//    var Service = {};
//    Service.foo = function () {
//        var startTime = new Date();
//        $interval(function () {
//            var seconds = Math.floor((new Date() - startTime) / 1000);
//            var interval = Math.floor(seconds / 31536000);
//            if (interval >= 1) {
//                return interval + " yrs";
//            }
//            interval = Math.floor(seconds / 2592000);
//            if (interval >= 1) {
//                return interval + " months";
//            }
//            interval = Math.floor(seconds / 86400);
//            if (interval >= 1) {
//                return interval + " days";
//            }
//            interval = Math.floor(seconds / 3600);
//            if (interval >= 1) {
//                return interval + " hrs";
//            }
//            interval = Math.floor(seconds / 60);
//            if (interval >= 1) {
//                return interval + " mins";
//            }
//            return Math.floor(seconds) + " secs";
//
//        }, 1000);
//    };
//    return Service;
//});
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
