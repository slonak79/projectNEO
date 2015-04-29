<?php 
session_start(); 

if (isset($_POST['loginForm'])) { 
     
    require 'mysqlConfig.php';
     
    $dbConn = getConnection(); 
     
    $sql = "SELECT u.username, u.profile_picture, u.user_id, ur.role_id, r.role_function FROM users as u
              inner join user_roles as ur on u.user_id = ur.user_id
              inner join roles as r on r.role_id = ur.role_id
                where u.username='user' and u.password='pass' GROUP BY u.user_id";
             
    $namedParameters = array();         
    $namedParameters[":username"]  = $_POST['username']; 
    $namedParameters[":password"] = hash('sha256', $_POST['password']);
     
    $stmt = $dbConn->prepare($sql); 
    $stmt->execute($namedParameters); 
    $result = $stmt->fetch(); 
     
    if (empty($result)) { 
        header("Location: login.php?error='wrong username'");
    } else { 
         
        $_SESSION["username"] = $result["username"]; 
        $_SESSION["profilePicture"] = $result["profilePicture"]; 
        header("Location: profile.php"); 
         
    } 
     
     
} 


?>