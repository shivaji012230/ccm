<?php
session_start();
//$con = mysqli_connect('localhost','root','','ccm');
if(isset($_POST['username'])) {  
    $username = $_POST['username'];  
    $password = $_POST['pwd'];  
//    $query = "select * from user where username = '$username' and password = '$password'";
//    $result = mysqli_query($con,$query) or die("Could not access DB:".mysqli_error($con));
//    $row = mysqli_fetch_assoc($result); 
//        if(($row['username'] == $username) && ($row['password'] == $password)) {
//        //echo "success";
//        $_SESSION['user_name'] = $row['username'];
//        $_SESSION['user_pwd'] = $row['password'];
//        //echo $_SESSION['user_name'];
//        header("Location: /leads");
//        }
//        else {  
//            echo "username / Password Not Match";  
//        }  
    
    $_SESSION['user_name'] = $username;
    $_SESSION['user_pwd'] = $username;
    header("Location: /leads");
}
    
    

