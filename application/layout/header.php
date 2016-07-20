<!DOCTYPE html>
<html ng-app="ccmApp" ng-cloak >
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <base href="/">
        <title>CCM</title>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.css">
                
        <!-- My Style Sheets -->
        <link rel="stylesheet" type="text/css" href="./public/css/style.css">
        <link href="./public/css/ccm.css" rel="stylesheet" type="text/css"/>

        <!-- Angular Material requires Angular.js Libraries -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-animate.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-aria.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-messages.min.js"></script>
        
        <!-- Jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>                
        
        <!-- Angular Material Library -->
        <script src="//ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.js"></script>
        
        <!-- Custom Js -->
        <script type="text/javascript" src="./public/js/home.js"></script>
        <script src="./public/js/jquery.table2excel.js"></script>        
    </head>
    <body ng-controller="ccm_controller" when-scrolled="loadMore()">
