<?php

class Bootstrap {

    function __construct() {
        $temp_url = strtolower(trim($_SERVER['REQUEST_URI'], '/'));
        $url = explode('/', $temp_url);
        if (empty($url[0])) {
            require APP_PATH . '/controllers/index.php';
            (new Index())->index();
        } elseif ($url[0] == 'employee') {
            require APP_PATH . '/controllers/index.php';
            (new Index())->employee();
        } elseif ($url[0] == 'rcp') {
            require APP_PATH . '/controllers/index.php';
            (new Index())->rcp();
        } elseif ($url[0] == 'leads') {
            require APP_PATH . '/controllers/index.php';
            (new Index())->leads();
        } elseif ($url[0] == 'profile') {
            require APP_PATH . '/controllers/index.php';
            (new Index())->profile();
        } elseif ($url[0] == 'partials') {
            switch ($url[1]) {
                case 'empfrm':
                    require APP_PATH . '/controllers/index.php';
                    (new Index())->employeeForm();
                    break;

                case 'leadsfrm':
                    require APP_PATH . '/controllers/index.php';
                    (new Index())->leadsForm();
                    break;

                case 'rcpfrm':
                    require APP_PATH . '/controllers/index.php';
                    (new Index())->rcpForm();
                    break;
                
                case 'generaledit':
                    require APP_PATH . '/controllers/index.php';
                    (new Index())->generalEditProfile();
                    break;
                
                case 'contactedit':
                    require APP_PATH . '/controllers/index.php';
                    (new Index())->contactEditProfile();
                    break;
                
                case 'securityedit':
                    require APP_PATH . '/controllers/index.php';
                    (new Index())->securityEditProfile();
                    break;
                
                case 'toast':
                    require APP_PATH . '/controllers/index.php';
                    (new Index())->toast();
                    break;
                
                
            }
        }
    }

}
