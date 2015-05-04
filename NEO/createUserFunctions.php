<?php
require 'mysqlConfig.php';

function verifyUsername(){
        $dbConn = getConnection();
        $sql = "SELECT username FROM users WHERE username = :username";
        $namedParameters = array();
        $namedParameters[':username'] = $_GET['username'];

        $stmt = $dbConn->prepare($sql);
        $stmt -> execute($namedParameters);
        $results = $stmt->fetch();

        $checkUsername = array();

        if(empty($results)){
            $checkUsername['exists'] = false;
        }
        else{
            $checkUsername['exists'] = true;
        }
        echo json_encode($checkUsername);
}
if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['username'])){
        verifyUsername();
    }
}
?>