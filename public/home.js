var app = angular.module("ccmApp",['ngMaterial','ngMessages','ui.router']);

        app.config(function($mdThemingProvider) {
            $mdThemingProvider.theme('default')
                .primaryPalette('blue',{
                    'default': '500'
                })
                .accentPalette('orange')
                
          });

//        app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
//
//            $urlRouterProvider.otherwise("/login")
//
//              	$stateProvider
//	                .state('lgn', {
//	                    url: "/login",
//	                    templateUrl: "login.php"
//                })
//                $stateProvider
//                  .state('emp', {
//                      url: "/employee",
//                      templateUrl: "employee.php"
//                      
//                })
//                $stateProvider
//                  .state('rcp', {
//                      url: "/rcp",
//                      templateUrl: "rcp.php"
//                      
//                })
//                $stateProvider
//                  .state('leads', {
//                      url: "/leads",
//                      templateUrl: "leads.php"
//                      
//                })  
//                
//           }]);
//        app.config(["$locationProvider", function($locationProvider) { $locationProvider.html5Mode(true); }]);
        app.controller("lgn_controller",["$scope",function($scope) {

        }]);

      app.factory('ccmApi', ['$http',  function ($http) {
        $http.defaults.headers.post["Content-Type"] = 'application/x-www-form-urlencoded; charset=utf-8';
        var ccmData = {};

        ccmData.postData = function (data, url) {
            
            return $http({
                method: 'POST',
                url:  '/' + url,
                data: $.param(data)
            });
        };
        
        ccmData.getData = function(url, data) {
            var getParams = Object.keys(data).map(function(param){
                return encodeURIComponent(param) + '=' + encodeURIComponent(data[param]);
            }).join('&');
            return $http({
                method : 'GET',
                url : '/' + url + '?' + getParams
            });
        };
        
        
        return ccnData;
    }]);  