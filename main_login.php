<?php
session_start();
$username = $_POST['username'];  
$password = $_POST['pwd'];  
$_SESSION['user_name'] = $username;
$_SESSION['user_pwd'] = $username;
//header("Location:leads");    
echo 'success';  
    
    

