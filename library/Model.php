<?php

class Model{

  public function getDBConnection($type, $db) {
    if(ISLIVE){
      switch($type){
        case 'r':
          $host = 'localhost';
          break;
        default:
          $host = 'localhost';
          break;
      }
      switch($db){
        default:
          $db = 'pwi_primary';
          break;
      }
      return (new PDO('mysql:host='.$host.';dbname='.$db, 'pwidev', 'kaliga'));
    }
    else{
      switch($db){
        default:
          $db = 'pwi_primary';
          break;
      }
      return new PDO('mysql:host=localhost;dbname='.$db, 'pwidev', 'kaliga');
    }
  }
}
