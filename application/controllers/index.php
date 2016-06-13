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
  
  
}
