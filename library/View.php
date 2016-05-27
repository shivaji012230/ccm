<?php

class View {

    function __construct() {
    }
    
    public function render($file,$noRender=NULL){
        require APP_PATH.'/layout/header.php';
        if(!$noRender){
            require APP_PATH.'/layout/navigationHeader.php';
        }
        require APP_PATH.'/views/'.$file.'.php';
        if(!$noRender){
            require APP_PATH.'/layout/footer.php';
        }
        //require APP_PATH.'/layout/footer.php';
    }

}