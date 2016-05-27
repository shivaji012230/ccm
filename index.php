<?php
//Setting default time zone
date_default_timezone_set('Asia/Calcutta');

defined('APP_PATH') || define('APP_PATH', dirname(__FILE__).'/application');
defined('APP_PUBLIC') || define('APP_PUBLIC', dirname(__FILE__).'/public');

if (!isset($_SESSION)){
  session_start();
}
require 'library/Bootstrap.php';
require 'library/Controller.php';
require 'library/View.php';
require 'library/Model.php';

$application = new Bootstrap();