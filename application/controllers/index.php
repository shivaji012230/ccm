<?php

class Index extends Controller{
  function __construct() {
      parent::__construct();
  }  
  public function index(){
    $this->view->render('index/index',TRUE);
  }  
  public function employee(){
    $this->view->render('index/employee');
  }
  public function rcp(){
    $this->view->render('index/rcp');
  }
  public function leads(){
    $this->view->render('index/leads');
  }
  public function profile(){
    $this->view->render('index/profile');
  }
  public function leadsForm(){
    $this->view->render('partials/leads_form_dialog',TRUE);
  }
  
  public function employeeForm(){
    $this->view->render('partials/emp_form_dialog',TRUE);
  }
  
  public function rcpForm(){
    $this->view->render('partials/rcp_form_dialog',TRUE);
  }
  
  public function generalEditProfile(){
    $this->view->render('partials/generalInfoEditDialog',TRUE);
  }
  
  public function contactEditProfile(){
    $this->view->render('partials/contactInfoEditDialog',TRUE);
  }
  
  public function securityEditProfile(){
    $this->view->render('partials/securityInfoEditDialog',TRUE);
  }
  
  public function toast(){
    $this->view->render('partials/toast_template');
  }
}
