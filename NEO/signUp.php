<script>setTimeout(function(){window.location.href='login.php'},5000);</script>
<?php
/**
 * Created by PhpStorm.
 * User: arturolopez
 * Date: 4/29/15
 * Time: 12:09 PM
 */
require 'mysqlConfig.php';
$dbConn = getConnection();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['birthday'])){
        //need to add profile picture
        $sql = "INSERT INTO evacuee (`surname`,`given_name`,`nationality`, `date_of_birth`, `place_of_birth`, `date_of_issue`, `date_of_expiration`,
         `sex`, `authority`) VALUES (:surname, :given_name, :nationality,:date_of_birth,:place_of_birth,:date_of_issue,
         :date_of_expiration,:sex,:authority)";

        $namedParameters = array();
        $namedParameters[":surname"]        = $_POST['surname'];
        $namedParameters[":given_name"]     = $_POST['givenName'];
        $namedParameters[":nationality"]    = $_POST['nation'];
        $namedParameters[":date_of_birth"]  = $_POST['birthday'];
        $namedParameters[":place_of_birth"] = $_POST['placeBirth'];
        $namedParameters[":date_of_issue"]  = $_POST['issue'];
        $namedParameters[":date_of_expiration"] = $_POST['dateExpiration'];
        $namedParameters[":sex"]             = $_POST['gender'];
        $namedParameters[":authority"]       = $_POST['authority'];

        $stmt = $dbConn->prepare($sql);
        $stmt -> execute($namedParameters);

        $userSql = "INSERT INTO `users`(`username`, `password`, `email`,
                `first_name`, `last_name`, `phone_number`)
                VALUES (:username, :password,:email, :first_name, :last_name,:phone_number)";

        $userNamedParameters = array();
        $userNamedParameters[":username"] = $_POST['username'];
        $userNamedParameters[":password"]  = $_POST['password'];
        $userNamedParameters[":email"] = $_POST["email"];
        $userNamedParameters[":first_name"]       = $_POST['givenName'];
        $userNamedParameters[":last_name"]    = $_POST['surname'];
        $userNamedParameters["phone_number"] = $_POST['phone_number'];

        $stmt2 = $dbConn->prepare($userSql);
        $stmt2->execute($userNamedParameters);

        echo "<h1>The evacuee information was successfully stored! A user account has been created for the user </h1>";

    }else {
        echo "not set";
    }


}




?>
