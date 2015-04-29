<?php
/**
 * Created by PhpStorm.
 * User: arturolopez
 * Date: 4/29/15
 * Time: 12:09 PM
 */

require 'mysqlConfig.php';
$dbConn = getConnection();


$sql = "INSERT INTO evacuee (`surname`,`given_name`,`nationality`, `date_of_birth`, `place_of_birth`, `date_of_issue`, `date_of_expiration`,
         `sex`, `authority`) VALUES (':surname', ':given_name', ':nationality',':date_of_birth',':place_of_birth',':date_of_issue',
         ':date_of_expiration',':sex',':authority')";

$namedParameters = array();
$namedParameters[":surname"]    = $_POST['surname'];
$namedParameters[":given_name"] = $_POST['givenName'];
$namedParameters[":nationality"] = $_POST['nation'];
$namedParameters[":date_of_birth"] = $_POST['bday'];
$namedParameters[":place_of_birth"] = $_POST['placeBirth'];
$namedParameters[":date_of_issue"] = $_POST['issue'];
$namedParameters[":date_of_expiration"] = $_POST['dateExpiration'];
$namedParameters[":sex"] = $_POST['gender'];
$namedParameters[":authority"] = $_POST['authority'];

$stmt = $dbConn->prepare($sql);
$stmt -> execute($namedParameters);
$results = $stmt->fetch();


?>