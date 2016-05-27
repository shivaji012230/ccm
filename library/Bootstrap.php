<?php

class Bootstrap {

    function __construct() {
    	$temp_url = strtolower(trim($_SERVER['REQUEST_URI'], '/ccm'));
        $url = explode('/', $temp_url);
        if (empty($url[0])) {
           require APP_PATH . '/controllers/index.php';
           (new Index())->index();
        }
        elseif ($url[0] == 'login') {
           require APP_PATH . '/controllers/index.php';
           (new Index())->login();	
         } 
         elseif ($url[0] == 'employee') {
          require APP_PATH . '/controllers/index.php';
           (new Index())->employee();  
         }
         elseif ($url[0] == 'rcp') {
          require APP_PATH . '/controllers/index.php';
           (new Index())->rcp();  
         }
         elseif ($url[0] == 'leads') {
          require APP_PATH . '/controllers/index.php';
           (new Index())->leads();  
         } 
    }

}
