<?php

class Index extends Controller{
  function __construct() {
      parent::__construct();
  }  
  public function index(){
    $this->view->render('index/login',TRUE);
  }
  public function login(){
    $this->view->render('index/login',TRUE);
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
  
  public function leadsForm(){
    $this->view->render('partials/leads_form_dialog',TRUE);
  }
  
  public function employeeForm(){
    $this->view->render('partials/emp_form_dialog',TRUE);
  }
  
  public function rcpForm(){
    $this->view->render('partials/rcp_form_dialog',TRUE);
  }
  
  public function toast(){
    $this->view->render('partials/toast_template');
  }
}
