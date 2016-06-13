var app = angular.module("ccmApp",['ngAnimate', 'ngAria','ngMaterial','ngMessages']);

        app.config(function($mdThemingProvider) {
            $mdThemingProvider.theme('default')
                .primaryPalette('blue',{
                    'default': '500'
                })
                .accentPalette('orange');
                
            });

        
        app.controller("ccm_controller",["$scope","$mdDialog",function($scope,$mdDialog) {
        $scope.codes = [{"name":"Afghanistan","dial_code":"+93","code":"AF"},{"name":"Albania","dial_code":"+355","code":"AL"},{"name":"Algeria","dial_code":"+213","code":"DZ"},{"name":"AmericanSamoa","dial_code":"+1684","code":"AS"},{"name":"Andorra","dial_code":"+376","code":"AD"},{"name":"Angola","dial_code":"+244","code":"AO"},{"name":"Anguilla","dial_code":"+1 264","code":"AI"},{"name":"Antigua and Barbuda","dial_code":"+1268","code":"AG"},{"name":"Argentina","dial_code":"+54","code":"AR"},{"name":"Armenia","dial_code":"+374","code":"AM"},{"name":"Aruba","dial_code":"+297","code":"AW"},{"name":"Australia","dial_code":"+61","code":"AU"},{"name":"Austria","dial_code":"+43","code":"AT"},{"name":"Azerbaijan","dial_code":"+994","code":"AZ"},{"name":"Bahamas","dial_code":"+1242","code":"BS"},{"name":"Bahrain","dial_code":"+973","code":"BH"},{"name":"Bangladesh","dial_code":"+880","code":"BD"},{"name":"Barbados","dial_code":"+1246","code":"BB"},{"name":"Belarus","dial_code":"+375","code":"BY"},{"name":"Belgium","dial_code":"+32","code":"BE"},{"name":"Belize","dial_code":"+501","code":"BZ"},{"name":"Benin","dial_code":"+229","code":"BJ"},{"name":"Bermuda","dial_code":"+1 441","code":"BM"},{"name":"Bhutan","dial_code":"+975","code":"BT"},{"name":"Bosnia and Herzegovina","dial_code":"+387","code":"BA"},{"name":"Botswana","dial_code":"+267","code":"BW"},{"name":"Brazil","dial_code":"+55","code":"BR"},{"name":"British Indian Ocean Territory","dial_code":"+246","code":"IO"},{"name":"Bulgaria","dial_code":"+359","code":"BG"},{"name":"Burkina Faso","dial_code":"+226","code":"BF"},{"name":"Burundi","dial_code":"+257","code":"BI"},{"name":"Cambodia","dial_code":"+855","code":"KH"},{"name":"Cameroon","dial_code":"+237","code":"CM"},{"name":"Canada","dial_code":"+1","code":"CA"},{"name":"Cape Verde","dial_code":"+238","code":"CV"},{"name":"Cayman Islands","dial_code":"+ 345","code":"KY"},{"name":"Central African Republic","dial_code":"+236","code":"CF"},{"name":"Chad","dial_code":"+235","code":"TD"},{"name":"Chile","dial_code":"+56","code":"CL"},{"name":"China","dial_code":"+86","code":"CN"},{"name":"Christmas Island","dial_code":"+61","code":"CX"},{"name":"Colombia","dial_code":"+57","code":"CO"},{"name":"Comoros","dial_code":"+269","code":"KM"},{"name":"Congo","dial_code":"+242","code":"CG"},{"name":"Cook Islands","dial_code":"+682","code":"CK"},{"name":"Costa Rica","dial_code":"+506","code":"CR"},{"name":"Croatia","dial_code":"+385","code":"HR"},{"name":"Cuba","dial_code":"+53","code":"CU"},{"name":"Cyprus","dial_code":"+537","code":"CY"},{"name":"Czech Republic","dial_code":"+420","code":"CZ"},{"name":"Denmark","dial_code":"+45","code":"DK"},{"name":"Djibouti","dial_code":"+253","code":"DJ"},{"name":"Dominica","dial_code":"+1 767","code":"DM"},{"name":"Dominican Republic","dial_code":"+1 849","code":"DO"},{"name":"Ecuador","dial_code":"+593","code":"EC"},{"name":"Egypt","dial_code":"+20","code":"EG"},{"name":"El Salvador","dial_code":"+503","code":"SV"},{"name":"Equatorial Guinea","dial_code":"+240","code":"GQ"},{"name":"Eritrea","dial_code":"+291","code":"ER"},{"name":"Estonia","dial_code":"+372","code":"EE"},{"name":"Ethiopia","dial_code":"+251","code":"ET"},{"name":"Faroe Islands","dial_code":"+298","code":"FO"},{"name":"Fiji","dial_code":"+679","code":"FJ"},{"name":"Finland","dial_code":"+358","code":"FI"},{"name":"France","dial_code":"+33","code":"FR"},{"name":"French Guiana","dial_code":"+594","code":"GF"},{"name":"French Polynesia","dial_code":"+689","code":"PF"},{"name":"Gabon","dial_code":"+241","code":"GA"},{"name":"Gambia","dial_code":"+220","code":"GM"},{"name":"Georgia","dial_code":"+995","code":"GE"},{"name":"Germany","dial_code":"+49","code":"DE"},{"name":"Ghana","dial_code":"+233","code":"GH"},{"name":"Gibraltar","dial_code":"+350","code":"GI"},{"name":"Greece","dial_code":"+30","code":"GR"},{"name":"Greenland","dial_code":"+299","code":"GL"},{"name":"Grenada","dial_code":"+1 473","code":"GD"},{"name":"Guadeloupe","dial_code":"+590","code":"GP"},{"name":"Guam","dial_code":"+1671","code":"GU"},{"name":"Guatemala","dial_code":"+502","code":"GT"},{"name":"Guinea","dial_code":"+224","code":"GN"},{"name":"Guinea-Bissau","dial_code":"+245","code":"GW"},{"name":"Guyana","dial_code":"+595","code":"GY"},{"name":"Haiti","dial_code":"+509","code":"HT"},{"name":"Honduras","dial_code":"+504","code":"HN"},{"name":"Hungary","dial_code":"+36","code":"HU"},{"name":"Iceland","dial_code":"+354","code":"IS"},{"name":"India","dial_code":"+91","code":"IN"},{"name":"Indonesia","dial_code":"+62","code":"ID"},{"name":"Iraq","dial_code":"+964","code":"IQ"},{"name":"Ireland","dial_code":"+353","code":"IE"},{"name":"Israel","dial_code":"+972","code":"IL"},{"name":"Italy","dial_code":"+39","code":"IT"},{"name":"Jamaica","dial_code":"+1876","code":"JM"},{"name":"Japan","dial_code":"+81","code":"JP"},{"name":"Jordan","dial_code":"+962","code":"JO"},{"name":"Kazakhstan","dial_code":"+77","code":"KZ"},{"name":"Kenya","dial_code":"+254","code":"KE"},{"name":"Kiribati","dial_code":"+686","code":"KI"},{"name":"Kuwait","dial_code":"+965","code":"KW"},{"name":"Kyrgyzstan","dial_code":"+996","code":"KG"},{"name":"Latvia","dial_code":"+371","code":"LV"},{"name":"Lebanon","dial_code":"+961","code":"LB"},{"name":"Lesotho","dial_code":"+266","code":"LS"},{"name":"Liberia","dial_code":"+231","code":"LR"},{"name":"Liechtenstein","dial_code":"+423","code":"LI"},{"name":"Lithuania","dial_code":"+370","code":"LT"},{"name":"Luxembourg","dial_code":"+352","code":"LU"},{"name":"Madagascar","dial_code":"+261","code":"MG"},{"name":"Malawi","dial_code":"+265","code":"MW"},{"name":"Malaysia","dial_code":"+60","code":"MY"},{"name":"Maldives","dial_code":"+960","code":"MV"},{"name":"Mali","dial_code":"+223","code":"ML"},{"name":"Malta","dial_code":"+356","code":"MT"},{"name":"Marshall Islands","dial_code":"+692","code":"MH"},{"name":"Martinique","dial_code":"+596","code":"MQ"},{"name":"Mauritania","dial_code":"+222","code":"MR"},{"name":"Mauritius","dial_code":"+230","code":"MU"},{"name":"Mayotte","dial_code":"+262","code":"YT"},{"name":"Mexico","dial_code":"+52","code":"MX"},{"name":"Monaco","dial_code":"+377","code":"MC"},{"name":"Mongolia","dial_code":"+976","code":"MN"},{"name":"Montenegro","dial_code":"+382","code":"ME"},{"name":"Montserrat","dial_code":"+1664","code":"MS"},{"name":"Morocco","dial_code":"+212","code":"MA"},{"name":"Myanmar","dial_code":"+95","code":"MM"},{"name":"Namibia","dial_code":"+264","code":"NA"},{"name":"Nauru","dial_code":"+674","code":"NR"},{"name":"Nepal","dial_code":"+977","code":"NP"},{"name":"Netherlands","dial_code":"+31","code":"NL"},{"name":"Netherlands Antilles","dial_code":"+599","code":"AN"},{"name":"New Caledonia","dial_code":"+687","code":"NC"},{"name":"New Zealand","dial_code":"+64","code":"NZ"},{"name":"Nicaragua","dial_code":"+505","code":"NI"},{"name":"Niger","dial_code":"+227","code":"NE"},{"name":"Nigeria","dial_code":"+234","code":"NG"},{"name":"Niue","dial_code":"+683","code":"NU"},{"name":"Norfolk Island","dial_code":"+672","code":"NF"},{"name":"Northern Mariana Islands","dial_code":"+1 670","code":"MP"},{"name":"Norway","dial_code":"+47","code":"NO"},{"name":"Oman","dial_code":"+968","code":"OM"},{"name":"Pakistan","dial_code":"+92","code":"PK"},{"name":"Palau","dial_code":"+680","code":"PW"},{"name":"Panama","dial_code":"+507","code":"PA"},{"name":"Papua New Guinea","dial_code":"+675","code":"PG"},{"name":"Paraguay","dial_code":"+595","code":"PY"},{"name":"Peru","dial_code":"+51","code":"PE"},{"name":"Philippines","dial_code":"+63","code":"PH"},{"name":"Poland","dial_code":"+48","code":"PL"},{"name":"Portugal","dial_code":"+351","code":"PT"},{"name":"Puerto Rico","dial_code":"+1 939","code":"PR"},{"name":"Qatar","dial_code":"+974","code":"QA"},{"name":"Romania","dial_code":"+40","code":"RO"},{"name":"Rwanda","dial_code":"+250","code":"RW"},{"name":"Samoa","dial_code":"+685","code":"WS"},{"name":"San Marino","dial_code":"+378","code":"SM"},{"name":"Saudi Arabia","dial_code":"+966","code":"SA"},{"name":"Senegal","dial_code":"+221","code":"SN"},{"name":"Serbia","dial_code":"+381","code":"RS"},{"name":"Seychelles","dial_code":"+248","code":"SC"},{"name":"Sierra Leone","dial_code":"+232","code":"SL"},{"name":"Singapore","dial_code":"+65","code":"SG"},{"name":"Slovakia","dial_code":"+421","code":"SK"},{"name":"Slovenia","dial_code":"+386","code":"SI"},{"name":"Solomon Islands","dial_code":"+677","code":"SB"},{"name":"South Africa","dial_code":"+27","code":"ZA"},{"name":"South Georgia and the South Sandwich Islands","dial_code":"+500","code":"GS"},{"name":"Spain","dial_code":"+34","code":"ES"},{"name":"Sri Lanka","dial_code":"+94","code":"LK"},{"name":"Sudan","dial_code":"+249","code":"SD"},{"name":"Suriname","dial_code":"+597","code":"SR"},{"name":"Swaziland","dial_code":"+268","code":"SZ"},{"name":"Sweden","dial_code":"+46","code":"SE"},{"name":"Switzerland","dial_code":"+41","code":"CH"},{"name":"Tajikistan","dial_code":"+992","code":"TJ"},{"name":"Thailand","dial_code":"+66","code":"TH"},{"name":"Togo","dial_code":"+228","code":"TG"},{"name":"Tokelau","dial_code":"+690","code":"TK"},{"name":"Tonga","dial_code":"+676","code":"TO"},{"name":"Trinidad and Tobago","dial_code":"+1 868","code":"TT"},{"name":"Tunisia","dial_code":"+216","code":"TN"},{"name":"Turkey","dial_code":"+90","code":"TR"},{"name":"Turkmenistan","dial_code":"+993","code":"TM"},{"name":"Turks and Caicos Islands","dial_code":"+1 649","code":"TC"},{"name":"Tuvalu","dial_code":"+688","code":"TV"},{"name":"Uganda","dial_code":"+256","code":"UG"},{"name":"Ukraine","dial_code":"+380","code":"UA"},{"name":"United Arab Emirates","dial_code":"+971","code":"AE"},{"name":"United Kingdom","dial_code":"+44","code":"GB"},{"name":"United States","dial_code":"+1","code":"US"},{"name":"Uruguay","dial_code":"+598","code":"UY"},{"name":"Uzbekistan","dial_code":"+998","code":"UZ"},{"name":"Vanuatu","dial_code":"+678","code":"VU"},{"name":"Wallis and Futuna","dial_code":"+681","code":"WF"},{"name":"Yemen","dial_code":"+967","code":"YE"},{"name":"Zambia","dial_code":"+260","code":"ZM"},{"name":"Zimbabwe","dial_code":"+263","code":"ZW"},{"name":"land Islands","dial_code":"","code":"AX"},{"name":"Antarctica","dial_code":null,"code":"AQ"},{"name":"Bolivia, Plurinational State of","dial_code":"+591","code":"BO"},{"name":"Brunei Darussalam","dial_code":"+673","code":"BN"},{"name":"Cocos (Keeling) Islands","dial_code":"+61","code":"CC"},{"name":"Congo, The Democratic Republic of the","dial_code":"+243","code":"CD"},{"name":"Cote d'Ivoire","dial_code":"+225","code":"CI"},{"name":"Falkland Islands (Malvinas)","dial_code":"+500","code":"FK"},{"name":"Guernsey","dial_code":"+44","code":"GG"},{"name":"Holy See (Vatican City State)","dial_code":"+379","code":"VA"},{"name":"Hong Kong","dial_code":"+852","code":"HK"},{"name":"Iran, Islamic Republic of","dial_code":"+98","code":"IR"},{"name":"Isle of Man","dial_code":"+44","code":"IM"},{"name":"Jersey","dial_code":"+44","code":"JE"},{"name":"Korea, Democratic People's Republic of","dial_code":"+850","code":"KP"},{"name":"Korea, Republic of","dial_code":"+82","code":"KR"},{"name":"Lao People's Democratic Republic","dial_code":"+856","code":"LA"},{"name":"Libyan Arab Jamahiriya","dial_code":"+218","code":"LY"},{"name":"Macao","dial_code":"+853","code":"MO"},{"name":"Macedonia, The Former Yugoslav Republic of","dial_code":"+389","code":"MK"},{"name":"Micronesia, Federated States of","dial_code":"+691","code":"FM"},{"name":"Moldova, Republic of","dial_code":"+373","code":"MD"},{"name":"Mozambique","dial_code":"+258","code":"MZ"},{"name":"Palestinian Territory, Occupied","dial_code":"+970","code":"PS"},{"name":"Pitcairn","dial_code":"+872","code":"PN"},{"name":"Réunion","dial_code":"+262","code":"RE"},{"name":"Russia","dial_code":"+7","code":"RU"},{"name":"Saint Barthélemy","dial_code":"+590","code":"BL"},{"name":"Saint Helena, Ascension and Tristan Da Cunha","dial_code":"+290","code":"SH"},{"name":"Saint Kitts and Nevis","dial_code":"+1 869","code":"KN"},{"name":"Saint Lucia","dial_code":"+1 758","code":"LC"},{"name":"Saint Martin","dial_code":"+590","code":"MF"},{"name":"Saint Pierre and Miquelon","dial_code":"+508","code":"PM"},{"name":"Saint Vincent and the Grenadines","dial_code":"+1 784","code":"VC"},{"name":"Sao Tome and Principe","dial_code":"+239","code":"ST"},{"name":"Somalia","dial_code":"+252","code":"SO"},{"name":"Svalbard and Jan Mayen","dial_code":"+47","code":"SJ"},{"name":"Syrian Arab Republic","dial_code":"+963","code":"SY"},{"name":"Taiwan, Province of China","dial_code":"+886","code":"TW"},{"name":"Tanzania, United Republic of","dial_code":"+255","code":"TZ"},{"name":"Timor-Leste","dial_code":"+670","code":"TL"},{"name":"Venezuela, Bolivarian Republic of","dial_code":"+58","code":"VE"},{"name":"Viet Nam","dial_code":"+84","code":"VN"},{"name":"Virgin Islands, British","dial_code":"+1 284","code":"VG"},{"name":"Virgin Islands, U.S.","dial_code":"+1340","code":"VI"}];
              
            $scope.addNewEmployee = function() {
                $mdDialog.show({
                  controller: DialogController,
                  templateUrl: 'emp_form_dialog.php',
                  clickOutsideToClose:true
                });
            };
            $scope.addNewRcp = function() {
                $mdDialog.show({
                  controller: DialogController,
                  templateUrl: 'rcp_form_dialog.php',
                  clickOutsideToClose:true
                });
            };
            $scope.addNewLead = function() {
                $mdDialog.show({
                  controller: DialogController,
                  templateUrl: 'leads_form_dialog.php',
                  clickOutsideToClose:true
                });
                
            };
            $scope.remove = function(index) {
              //console.log("shivaji");
              $scope.codes.splice(index,1);
              if($scope.codes.length === 0){
                  $scope.codes = [];
              }
            };
            $scope.light = function(){
              console.log("testing");
            }; 
            
        }]);
        
        function DialogController($scope, $mdDialog,$http) {
	  $scope.cancel = function() {
	    $mdDialog.cancel();
	  };
          $scope.items = [{"name":"Self Employeed"},{"name":'Employee'},{"name":'Professional'}];
          $scope.leads = {"customer_name":"","customer_addr":"","select_customer":"","self_emp":"",
                          "yes_no":"","monthly_card_sales":"","pos_business":"","Owned_Returned":"",
                          "nature_of_business":"","mobileNo":"","employee":"" ,"professional":"",
                          "customer_Annual_Income":"10-25","customer_pan":"","customer_aadhaar":""};
          $scope.emp = {"emp_name":"","emp_email":"","mobileNo":"","emp_addr":"","emp_level":"Admin"};
          $scope.rcp = {"rcp_name":"","rcp_email":"","mobileNo":"","rcp_addr":"","rcp_level":"Admin"};
//          $scope.codes = [{"name":"Afghanistan","dial_code":"+93","code":"AF"},{"name":"Albania","dial_code":"+355","code":"AL"},{"name":"Algeria","dial_code":"+213","code":"DZ"},{"name":"AmericanSamoa","dial_code":"+1684","code":"AS"},{"name":"Andorra","dial_code":"+376","code":"AD"},{"name":"Angola","dial_code":"+244","code":"AO"},{"name":"Anguilla","dial_code":"+1 264","code":"AI"},{"name":"Antigua and Barbuda","dial_code":"+1268","code":"AG"},{"name":"Argentina","dial_code":"+54","code":"AR"},{"name":"Armenia","dial_code":"+374","code":"AM"},{"name":"Aruba","dial_code":"+297","code":"AW"},{"name":"Australia","dial_code":"+61","code":"AU"},{"name":"Austria","dial_code":"+43","code":"AT"},{"name":"Azerbaijan","dial_code":"+994","code":"AZ"},{"name":"Bahamas","dial_code":"+1242","code":"BS"},{"name":"Bahrain","dial_code":"+973","code":"BH"},{"name":"Bangladesh","dial_code":"+880","code":"BD"},{"name":"Barbados","dial_code":"+1 246","code":"BB"},{"name":"Belarus","dial_code":"+375","code":"BY"},{"name":"Belgium","dial_code":"+32","code":"BE"},{"name":"Belize","dial_code":"+501","code":"BZ"},{"name":"Benin","dial_code":"+229","code":"BJ"},{"name":"Bermuda","dial_code":"+1 441","code":"BM"},{"name":"Bhutan","dial_code":"+975","code":"BT"},{"name":"Bosnia and Herzegovina","dial_code":"+387","code":"BA"},{"name":"Botswana","dial_code":"+267","code":"BW"},{"name":"Brazil","dial_code":"+55","code":"BR"},{"name":"British Indian Ocean Territory","dial_code":"+246","code":"IO"},{"name":"Bulgaria","dial_code":"+359","code":"BG"},{"name":"Burkina Faso","dial_code":"+226","code":"BF"},{"name":"Burundi","dial_code":"+257","code":"BI"},{"name":"Cambodia","dial_code":"+855","code":"KH"},{"name":"Cameroon","dial_code":"+237","code":"CM"},{"name":"Canada","dial_code":"+1","code":"CA"},{"name":"Cape Verde","dial_code":"+238","code":"CV"},{"name":"Cayman Islands","dial_code":"+ 345","code":"KY"},{"name":"Central African Republic","dial_code":"+236","code":"CF"},{"name":"Chad","dial_code":"+235","code":"TD"},{"name":"Chile","dial_code":"+56","code":"CL"},{"name":"China","dial_code":"+86","code":"CN"},{"name":"Christmas Island","dial_code":"+61","code":"CX"},{"name":"Colombia","dial_code":"+57","code":"CO"},{"name":"Comoros","dial_code":"+269","code":"KM"},{"name":"Congo","dial_code":"+242","code":"CG"},{"name":"Cook Islands","dial_code":"+682","code":"CK"},{"name":"Costa Rica","dial_code":"+506","code":"CR"},{"name":"Croatia","dial_code":"+385","code":"HR"},{"name":"Cuba","dial_code":"+53","code":"CU"},{"name":"Cyprus","dial_code":"+537","code":"CY"},{"name":"Czech Republic","dial_code":"+420","code":"CZ"},{"name":"Denmark","dial_code":"+45","code":"DK"},{"name":"Djibouti","dial_code":"+253","code":"DJ"},{"name":"Dominica","dial_code":"+1 767","code":"DM"},{"name":"Dominican Republic","dial_code":"+1 849","code":"DO"},{"name":"Ecuador","dial_code":"+593","code":"EC"},{"name":"Egypt","dial_code":"+20","code":"EG"},{"name":"El Salvador","dial_code":"+503","code":"SV"},{"name":"Equatorial Guinea","dial_code":"+240","code":"GQ"},{"name":"Eritrea","dial_code":"+291","code":"ER"},{"name":"Estonia","dial_code":"+372","code":"EE"},{"name":"Ethiopia","dial_code":"+251","code":"ET"},{"name":"Faroe Islands","dial_code":"+298","code":"FO"},{"name":"Fiji","dial_code":"+679","code":"FJ"},{"name":"Finland","dial_code":"+358","code":"FI"},{"name":"France","dial_code":"+33","code":"FR"},{"name":"French Guiana","dial_code":"+594","code":"GF"},{"name":"French Polynesia","dial_code":"+689","code":"PF"},{"name":"Gabon","dial_code":"+241","code":"GA"},{"name":"Gambia","dial_code":"+220","code":"GM"},{"name":"Georgia","dial_code":"+995","code":"GE"},{"name":"Germany","dial_code":"+49","code":"DE"},{"name":"Ghana","dial_code":"+233","code":"GH"},{"name":"Gibraltar","dial_code":"+350","code":"GI"},{"name":"Greece","dial_code":"+30","code":"GR"},{"name":"Greenland","dial_code":"+299","code":"GL"},{"name":"Grenada","dial_code":"+1 473","code":"GD"},{"name":"Guadeloupe","dial_code":"+590","code":"GP"},{"name":"Guam","dial_code":"+1671","code":"GU"},{"name":"Guatemala","dial_code":"+502","code":"GT"},{"name":"Guinea","dial_code":"+224","code":"GN"},{"name":"Guinea-Bissau","dial_code":"+245","code":"GW"},{"name":"Guyana","dial_code":"+595","code":"GY"},{"name":"Haiti","dial_code":"+509","code":"HT"},{"name":"Honduras","dial_code":"+504","code":"HN"},{"name":"Hungary","dial_code":"+36","code":"HU"},{"name":"Iceland","dial_code":"+354","code":"IS"},{"name":"India","dial_code":"+91","code":"IN"},{"name":"Indonesia","dial_code":"+62","code":"ID"},{"name":"Iraq","dial_code":"+964","code":"IQ"},{"name":"Ireland","dial_code":"+353","code":"IE"},{"name":"Israel","dial_code":"+972","code":"IL"},{"name":"Italy","dial_code":"+39","code":"IT"},{"name":"Jamaica","dial_code":"+1876","code":"JM"},{"name":"Japan","dial_code":"+81","code":"JP"},{"name":"Jordan","dial_code":"+962","code":"JO"},{"name":"Kazakhstan","dial_code":"+77","code":"KZ"},{"name":"Kenya","dial_code":"+254","code":"KE"},{"name":"Kiribati","dial_code":"+686","code":"KI"},{"name":"Kuwait","dial_code":"+965","code":"KW"},{"name":"Kyrgyzstan","dial_code":"+996","code":"KG"},{"name":"Latvia","dial_code":"+371","code":"LV"},{"name":"Lebanon","dial_code":"+961","code":"LB"},{"name":"Lesotho","dial_code":"+266","code":"LS"},{"name":"Liberia","dial_code":"+231","code":"LR"},{"name":"Liechtenstein","dial_code":"+423","code":"LI"},{"name":"Lithuania","dial_code":"+370","code":"LT"},{"name":"Luxembourg","dial_code":"+352","code":"LU"},{"name":"Madagascar","dial_code":"+261","code":"MG"},{"name":"Malawi","dial_code":"+265","code":"MW"},{"name":"Malaysia","dial_code":"+60","code":"MY"},{"name":"Maldives","dial_code":"+960","code":"MV"},{"name":"Mali","dial_code":"+223","code":"ML"},{"name":"Malta","dial_code":"+356","code":"MT"},{"name":"Marshall Islands","dial_code":"+692","code":"MH"},{"name":"Martinique","dial_code":"+596","code":"MQ"},{"name":"Mauritania","dial_code":"+222","code":"MR"},{"name":"Mauritius","dial_code":"+230","code":"MU"},{"name":"Mayotte","dial_code":"+262","code":"YT"},{"name":"Mexico","dial_code":"+52","code":"MX"},{"name":"Monaco","dial_code":"+377","code":"MC"},{"name":"Mongolia","dial_code":"+976","code":"MN"},{"name":"Montenegro","dial_code":"+382","code":"ME"},{"name":"Montserrat","dial_code":"+1664","code":"MS"},{"name":"Morocco","dial_code":"+212","code":"MA"},{"name":"Myanmar","dial_code":"+95","code":"MM"},{"name":"Namibia","dial_code":"+264","code":"NA"},{"name":"Nauru","dial_code":"+674","code":"NR"},{"name":"Nepal","dial_code":"+977","code":"NP"},{"name":"Netherlands","dial_code":"+31","code":"NL"},{"name":"Netherlands Antilles","dial_code":"+599","code":"AN"},{"name":"New Caledonia","dial_code":"+687","code":"NC"},{"name":"New Zealand","dial_code":"+64","code":"NZ"},{"name":"Nicaragua","dial_code":"+505","code":"NI"},{"name":"Niger","dial_code":"+227","code":"NE"},{"name":"Nigeria","dial_code":"+234","code":"NG"},{"name":"Niue","dial_code":"+683","code":"NU"},{"name":"Norfolk Island","dial_code":"+672","code":"NF"},{"name":"Northern Mariana Islands","dial_code":"+1 670","code":"MP"},{"name":"Norway","dial_code":"+47","code":"NO"},{"name":"Oman","dial_code":"+968","code":"OM"},{"name":"Pakistan","dial_code":"+92","code":"PK"},{"name":"Palau","dial_code":"+680","code":"PW"},{"name":"Panama","dial_code":"+507","code":"PA"},{"name":"Papua New Guinea","dial_code":"+675","code":"PG"},{"name":"Paraguay","dial_code":"+595","code":"PY"},{"name":"Peru","dial_code":"+51","code":"PE"},{"name":"Philippines","dial_code":"+63","code":"PH"},{"name":"Poland","dial_code":"+48","code":"PL"},{"name":"Portugal","dial_code":"+351","code":"PT"},{"name":"Puerto Rico","dial_code":"+1 939","code":"PR"},{"name":"Qatar","dial_code":"+974","code":"QA"},{"name":"Romania","dial_code":"+40","code":"RO"},{"name":"Rwanda","dial_code":"+250","code":"RW"},{"name":"Samoa","dial_code":"+685","code":"WS"},{"name":"San Marino","dial_code":"+378","code":"SM"},{"name":"Saudi Arabia","dial_code":"+966","code":"SA"},{"name":"Senegal","dial_code":"+221","code":"SN"},{"name":"Serbia","dial_code":"+381","code":"RS"},{"name":"Seychelles","dial_code":"+248","code":"SC"},{"name":"Sierra Leone","dial_code":"+232","code":"SL"},{"name":"Singapore","dial_code":"+65","code":"SG"},{"name":"Slovakia","dial_code":"+421","code":"SK"},{"name":"Slovenia","dial_code":"+386","code":"SI"},{"name":"Solomon Islands","dial_code":"+677","code":"SB"},{"name":"South Africa","dial_code":"+27","code":"ZA"},{"name":"South Georgia and the South Sandwich Islands","dial_code":"+500","code":"GS"},{"name":"Spain","dial_code":"+34","code":"ES"},{"name":"Sri Lanka","dial_code":"+94","code":"LK"},{"name":"Sudan","dial_code":"+249","code":"SD"},{"name":"Suriname","dial_code":"+597","code":"SR"},{"name":"Swaziland","dial_code":"+268","code":"SZ"},{"name":"Sweden","dial_code":"+46","code":"SE"},{"name":"Switzerland","dial_code":"+41","code":"CH"},{"name":"Tajikistan","dial_code":"+992","code":"TJ"},{"name":"Thailand","dial_code":"+66","code":"TH"},{"name":"Togo","dial_code":"+228","code":"TG"},{"name":"Tokelau","dial_code":"+690","code":"TK"},{"name":"Tonga","dial_code":"+676","code":"TO"},{"name":"Trinidad and Tobago","dial_code":"+1 868","code":"TT"},{"name":"Tunisia","dial_code":"+216","code":"TN"},{"name":"Turkey","dial_code":"+90","code":"TR"},{"name":"Turkmenistan","dial_code":"+993","code":"TM"},{"name":"Turks and Caicos Islands","dial_code":"+1 649","code":"TC"},{"name":"Tuvalu","dial_code":"+688","code":"TV"},{"name":"Uganda","dial_code":"+256","code":"UG"},{"name":"Ukraine","dial_code":"+380","code":"UA"},{"name":"United Arab Emirates","dial_code":"+971","code":"AE"},{"name":"United Kingdom","dial_code":"+44","code":"GB"},{"name":"United States","dial_code":"+1","code":"US"},{"name":"Uruguay","dial_code":"+598","code":"UY"},{"name":"Uzbekistan","dial_code":"+998","code":"UZ"},{"name":"Vanuatu","dial_code":"+678","code":"VU"},{"name":"Wallis and Futuna","dial_code":"+681","code":"WF"},{"name":"Yemen","dial_code":"+967","code":"YE"},{"name":"Zambia","dial_code":"+260","code":"ZM"},{"name":"Zimbabwe","dial_code":"+263","code":"ZW"},{"name":"land Islands","dial_code":"","code":"AX"},{"name":"Antarctica","dial_code":null,"code":"AQ"},{"name":"Bolivia, Plurinational State of","dial_code":"+591","code":"BO"},{"name":"Brunei Darussalam","dial_code":"+673","code":"BN"},{"name":"Cocos (Keeling) Islands","dial_code":"+61","code":"CC"},{"name":"Congo, The Democratic Republic of the","dial_code":"+243","code":"CD"},{"name":"Cote d'Ivoire","dial_code":"+225","code":"CI"},{"name":"Falkland Islands (Malvinas)","dial_code":"+500","code":"FK"},{"name":"Guernsey","dial_code":"+44","code":"GG"},{"name":"Holy See (Vatican City State)","dial_code":"+379","code":"VA"},{"name":"Hong Kong","dial_code":"+852","code":"HK"},{"name":"Iran, Islamic Republic of","dial_code":"+98","code":"IR"},{"name":"Isle of Man","dial_code":"+44","code":"IM"},{"name":"Jersey","dial_code":"+44","code":"JE"},{"name":"Korea, Democratic People's Republic of","dial_code":"+850","code":"KP"},{"name":"Korea, Republic of","dial_code":"+82","code":"KR"},{"name":"Lao People's Democratic Republic","dial_code":"+856","code":"LA"},{"name":"Libyan Arab Jamahiriya","dial_code":"+218","code":"LY"},{"name":"Macao","dial_code":"+853","code":"MO"},{"name":"Macedonia, The Former Yugoslav Republic of","dial_code":"+389","code":"MK"},{"name":"Micronesia, Federated States of","dial_code":"+691","code":"FM"},{"name":"Moldova, Republic of","dial_code":"+373","code":"MD"},{"name":"Mozambique","dial_code":"+258","code":"MZ"},{"name":"Palestinian Territory, Occupied","dial_code":"+970","code":"PS"},{"name":"Pitcairn","dial_code":"+872","code":"PN"},{"name":"Réunion","dial_code":"+262","code":"RE"},{"name":"Russia","dial_code":"+7","code":"RU"},{"name":"Saint Barthélemy","dial_code":"+590","code":"BL"},{"name":"Saint Helena, Ascension and Tristan Da Cunha","dial_code":"+290","code":"SH"},{"name":"Saint Kitts and Nevis","dial_code":"+1 869","code":"KN"},{"name":"Saint Lucia","dial_code":"+1 758","code":"LC"},{"name":"Saint Martin","dial_code":"+590","code":"MF"},{"name":"Saint Pierre and Miquelon","dial_code":"+508","code":"PM"},{"name":"Saint Vincent and the Grenadines","dial_code":"+1 784","code":"VC"},{"name":"Sao Tome and Principe","dial_code":"+239","code":"ST"},{"name":"Somalia","dial_code":"+252","code":"SO"},{"name":"Svalbard and Jan Mayen","dial_code":"+47","code":"SJ"},{"name":"Syrian Arab Republic","dial_code":"+963","code":"SY"},{"name":"Taiwan, Province of China","dial_code":"+886","code":"TW"},{"name":"Tanzania, United Republic of","dial_code":"+255","code":"TZ"},{"name":"Timor-Leste","dial_code":"+670","code":"TL"},{"name":"Venezuela, Bolivarian Republic of","dial_code":"+58","code":"VE"},{"name":"Viet Nam","dial_code":"+84","code":"VN"},{"name":"Virgin Islands, British","dial_code":"+1 284","code":"VG"},{"name":"Virgin Islands, U.S.","dial_code":"+1340","code":"VI"}];
//          var email_pattern = /^.+@.+\..+$/;
//          var phn_pattern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
//          var date_pattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{2}|\d{4})$/;
//          var pan_pattern = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/;
//          var aadhaar_pattern = /^\d{4}-\d{4}-\d{4}$/;
          $scope.dialcode = "+91";
          $http({
                method : "GET",
                url : "countryCodes.json"
                })
                .success(function(data, status, headers, config){
                  console.log("fetch successfully");
                  $scope.codes = data;
                })
                .error(function(data, status, headers, config){
                  console.log("Not successful");
                });
               
          $scope.dialCode = function(ccode){
              console.log(ccode);
              var arr = ccode.split("-");
              console.log(arr[1]);
              $scope.dialcode = arr[1];
              console.log($scope.dialcode);
              //document.getElementById("code").value = arr[1];
              document.getElementById("ccode_afterselect").innerHTML = arr[1];
              //return arr[1];
          };
          
//          $scope.rcpDialCode = function(){
//              var arr = $scope.rcp.ccode.split("-");
//              $scope.rcp.ccode = arr[1];
//              console.log($scope.rcp.ccode);
//              document.getElementById("ccode_afterselect").innerHTML = arr[1];
//          };
//          $scope.leadsDialCode = function(){
//              var arr = $scope.leads.ccode.split("-");
//              $scope.leads.ccode = arr[1];
//              console.log($scope.leads.ccode);
//              document.getElementById("ccode_afterselect").innerHTML = arr[1];
//          }; 
          $scope.aadhar = function(){
              var aadharValLength = document.getElementById("customer_aadhaar").value.length;
              //console.log($scope.leads.customer_aadhaar);
              //console.log($scope.leads.customer_name);
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
          $scope.empFormData = function() {
//                console.log($scope.emp.emp_name);
//                console.log($scope.emp.emp_phn);
                
//                if(!isNaN($scope.emp.emp_name) || $scope.emp.emp_name === "" || $scope.emp.emp_name === null || $scope.emp.emp_name.length < 5 || $scope.emp.emp_name.length > 15){
//                    alert('name must be between 5 to 15 charecters');
//                    //document.empfrm.emp_name.focus();
//                    return false;
//                }
//                 if(!email_pattern.test($scope.emp.emp_email) || $scope.emp.emp_email === ""){
//                    alert('Please enter a valid email address');
//                    //document.empfrm.emp_phn.focus();
//                    return false;
//                }
//                if(!phn_pattern.test($scope.emp.emp_phn) || isNaN($scope.emp.emp_phn) || $scope.emp.emp_phn === ""){
//                    alert('Please enter a valid 10 digit phone number');
//                    //document.rcpfrm.emp_phn.focus();
//                    return false;
//                }
//                else if(!isNaN($scope.emp.emp_addr) || $scope.emp.emp_addr === "" || $scope.emp.emp_addr === null || $scope.emp.emp_addr.length < 20 || $scope.emp.emp_addr.length > 100){
//                    alert('address must be 20 to 100 charecters');
//                    //document.empfrm.emp_addr.focus();
//                    return false;
//                }
//                else if($scope.emp.emp_level !== "Admin" || $scope.emp.emp_level !== "Employee") {
//                    alert('please select level.');
//                    return false;
//                }
                $http.post("insert_emp.php", {
		'emp.emp_name':$scope.emp.emp_name,
		'emp.emp_email':$scope.emp.emp_email,
		'emp.phone':$scope.dialcode+$scope.emp.mobileNo,
		'emp.emp_addr':$scope.emp.emp_addr,
                'emp.emp_level':$scope.emp.emp_level})
    
                .success(function(data,status,headers,config){
                console.log("Data Inserted Successfully");
                $scope.emp = {"emp_name":"","emp_email":"","emp_mobileNo":"","emp_addr":"","emp_level":""};
                $scope.empfrm.$setPristine();
                $scope.empfrm.$setUntouched();
                })
                .error(function(data, status, headers, config){
                 console.log("Data Not Inserted");   
                });
            };
            
            $scope.rcpFormData = function() {
                
//                if(!isNaN($scope.rcp.rcp_name) || $scope.rcp.rcp_name === "" || $scope.rcp.rcp_name === null || $scope.rcp.rcp_name.length < 5 || $scope.rcp.rcp_name.length > 15){
//                    alert('name must be between 5 to 15 charecters');
//                    //document.rcpfrm.rcp_name.focus();
//                    return false;
//                }
//                else if(!email_pattern.test($scope.rcp.rcp_email) || !isNaN($scope.rcp.rcp_email) || $scope.rcp.rcp_email === ""){
//                    alert('Please provide a valid email address');
//                    //document.rcpfrm.rcp_email.focus();
//                    return false;
//                }
//                else if(!phn_pattern.test($scope.rcp.rcp_phn) || isNaN($scope.rcp.rcp_phn) || $scope.rcp.rcp_phn === ""){
//                    alert('Please enter a valid 10 digit phone number');
//                    //document.rcpfrm.rcp_phn.focus();
//                    return false;
//                }
//                else if(!isNaN($scope.rcp.rcp_name) || $scope.rcp.rcp_addr === "" || $scope.rcp.rcp_addr === null || $scope.rcp.rcp_addr.length < 20 || $scope.rcp.rcp_addr.length > 100){
//                    alert('address must be 20 to 100 charecters');
//                    //document.rcpfrm.rcp_addr.focus();
//                    return false;
//                }
//                else if($scope.rcp.rcp_level !== "Admin" || $scope.rcp.rcp_level !== "Employee") {
//                    alert('please select level.');
//                    return false;
//                }
                $http.post("insert_rcp.php", {
		'rcp.rcp_name':$scope.rcp.rcp_name,
		'rcp.rcp_email':$scope.rcp.rcp_email,
		'rcp.rcp_phn':$scope.dialcode+$scope.rcp.mobileNo,
		'rcp.rcp_addr':$scope.rcp.rcp_addr,
                'rcp.rcp_level':$scope.rcp.rcp_level})
    
                .success(function(data, status, headers, config){
                console.log("Data Inserted Successfully");
                $scope.rcp = {"rcp_name":"","rcp_email":"","rcp_mobileNo":"","rcp_addr":"","rcp_level":""};
                $scope.rcpfrm.$setPristine();
                $scope.rcpfrm.$setUntouched();
                })
                .error(function(data, status, headers, config){
                 console.log("Data Not Inserted");   
                });
            };
            
            $scope.leadsFormData = function(){
                //console.log($scope.leads.pos_business);
//                var regs = $scope.leads.pos_business.match(date_pattern);
//                if(!isNaN($scope.leads.customer_name) || $scope.leads.customer_name === "" || $scope.leads.customer_name === null || $scope.leads.customer_name.length < 5 || $scope.leads.customer_name.length > 15){
//                    alert('name must be between 5 to 15 charecters');
//                    return false;
//                }
//                else if(!isNaN($scope.leads.customer_addr) || $scope.leads.customer_addr === "" || $scope.leads.customer_addr === null || $scope.leads.customer_addr.length < 20 || $scope.leads.customer_addr.length > 100){
//                    alert('Address must be between 20 to 100 charecters');
//                    return false;
//                }
//                else if($scope.leads.group === "self"){
//                    if($scope.leads.monthly_card_sales === null || $scope.leads.monthly_card_sales === "" || isNaN($scope.leads.monthly_card_sales)){
//                        alert('please enter valid sales');
//                        return false;
//                    }
//                     if(regs === null && $scope.leads.group === "self"){
//                        alert("Please enter a valid date like mm/dd/yyyy.");
//                        return false;
//                        }
//                        if(regs !== null && $scope.leads.group === "self" ){
//                        console.log($scope.leads.pos_business);
//                        
//                        var month = regs[1];
//                        console.log(month);// parse date into variables
//                        var day = regs[3];
//                        console.log(day);
//                        var year = regs[5];
//                        console.log(year);
//                        
//                        if (month < 1 || month > 12) { // check month range
//                            alert("Month must be between 1 and 12.");
//                            return false;
//                            }
//                        else if (day < 1 || day > 31) {
//                            alert("Day must be between 1 and 31.");
//                            return false;
//                            }
//                        if((month == 4 || month == 6 || month == 9 || month == 11) && day == 31) {
//                            alert("Month "+month+" doesn't have 31 days!");
//                            return false;
//                            }
//                        else if (month == 2) { // check for february 29th
//                            var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
//                            if (day > 29 || (day == 29 && !isleap)) {
//                            alert("February " + year + " doesn't have " + day + " days!");
//                            return false;
//                               }
//                            }
//                            //return true;
//                    }
//                    
//                    if(!isNaN($scope.leads.nature_of_business) || $scope.leads.nature_of_business === "" || $scope.leads.nature_of_business === null || $scope.leads.nature_of_business.length < 5 || $scope.leads.nature_of_business.length > 15){
//                        alert('name must be between 5 to 15 charecters');
//                        return false;
//                    }
//                    if(!phn_pattern.test($scope.leads.business_phn) || isNaN($scope.leads.business_phn) || $scope.leads.business_phn === "" || $scope.leads.business_phn === null){
//                        alert('Please enter a valid 10 digit phone number');
//                        return false;
//                    }
//                }
//                if($scope.leads.customer_Annual_Income !== "0-5" || $scope.leads.customer_Annual_Income !== "5-10" || $scope.leads.customer_Annual_Income !== "10-25" || $scope.leads.customer_Annual_Income !== "25-50" || $scope.leads.customer_Annual_Income !== ">50") {
//                    alert('please select customer annual income.');
//                    return false;
//                }
//                if(!pan_pattern.test($scope.leads.customer_pan) || !isNaN($scope.leads.customer_pan) || $scope.leads.customer_pan === "" || $scope.leads.customer_pan === null){
//                    alert('Please enter a valid  PAN Number.');
//                    return false;
//                }
//                else if(!aadhaar_pattern.test($scope.leads.customer_aadhaar) || !isNaN($scope.leads.customer_aadhaar) || $scope.leads.customer_aadhaar === "" || $scope.leads.customer_aadhaar === null){
//                    alert('Please enter a valid  Aadhaar Number.');
//                    return false;
//                }
                
                $http.post("insert_leads.php", {
		'leads.customer_name':$scope.leads.customer_name,
		'leads.customer_addr':$scope.leads.customer_addr,
		'leads.group':$scope.leads.select_customer,
		'leads.self_emp':$scope.leads.self_emp,
                'leads.yes_no':$scope.leads.yes_no,
                'leads.monthly_card_sales':$scope.leads.monthly_card_sales,
		'leads.pos_business':$scope.leads.pos_business,
		'leads.Owned_Returned':$scope.leads.Owned_Returned,
		'leads.nature_of_business':$scope.leads.nature_of_business,
                'leads.business_phn':$scope.dialcode+$scope.leads.mobileNo,
                'leads.employee':$scope.leads.employee,
		'leads.professional':$scope.leads.professional,
                'leads.customer_Annual_Income':$scope.leads.customer_Annual_Income,
                'leads.customer_pan':$scope.leads.customer_pan,
                'leads.customer_aadhaar':$scope.leads.customer_aadhaar
                })
    
                .success(function(data, status, headers, config){
                console.log("Data Inserted Successfully");
                $scope.leads = {"customer_name":"","customer_addr":"","select_customer":"select customer occupation","self_emp":"",
                                "yes_no":"","monthly_card_sales":"","pos_business":"","Owned_Returned":"",
                                "nature_of_business":"","mobileNo":"","employee":"" ,"professional":"",
                                "customer_Annual_Income":"10-25","customer_pan":"","customer_aadhaar":""};
                $scope.leadsfrm.$setPristine();
                $scope.leadsfrm.$setUntouched();
                })
                .error(function(data, status, headers, config){
                console.log("Data Not Inserted");   
                });
            };
	}
//        app.factory('ccmApp', ['$http',  function ($http) {
//        $http.defaults.headers.post["Content-Type"] = 'application/x-www-form-urlencoded; charset=utf-8';
//        var ccmData = {};
//        
//        ccmData.postData = function (data, url) {
//            
//            return $http({
//                method: 'POST',
//                url:  '/' + url,
//                data: $.param(data)
//            });
//        };
//        
//        ccmData.getData = function(url, data) {
//            var getParams = Object.keys(data).map(function(param){
//                return encodeURIComponent(param) + '=' + encodeURIComponent(data[param]);
//            }).join('&');
//            return $http({
//                method : 'GET',
//                url : '/' + url + '?' + getParams
//            });
//        };
//        
//        return ccmData;
//    }]);  