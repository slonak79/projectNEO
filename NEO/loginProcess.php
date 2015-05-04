<?php 
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])){
        require 'mysqlConfig.php';

        $dbConn = getConnection();

        $sql = "SELECT u.username, u.profile_picture, u.user_id, ur.role_id, r.role_function FROM users
            as u inner join user_roles as ur on u.user_id = ur.user_id
            inner join roles as r on r.role_id = ur.role_id
            where u.username=:username and u.password=:password GROUP BY u.user_id";

        $username  = $_POST['username'];
        $password = hash('sha256', $_POST['password']);

//        echo $username."<br>";
//        echo $password."<br>";

        $stmt = $dbConn->prepare($sql);
        $stmt->execute(array(":username" => $username,
                             ":password" => $password));
        $result = $stmt->fetch();

        if (empty($result)) {
            header("Location: login.php?error='wrong username'");
        } else {

            $_SESSION["username"] = $result["username"];
            $_SESSION["profile_picture"] = $result["profile_picture"];
            $_SESSION['roles'] = $result['role_function'];
            header("Location: profile.php");
        }
    }
     

}
?>