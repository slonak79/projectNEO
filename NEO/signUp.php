<script>setTimeout(function(){window.location.href='.php'},5000);</script>
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

        echo "<h1>The evacuee information was successfully stored!</h1>";

        $userSql = "INSERT INTO `users`(`username`, `password`, `email`,
                `first_name`, `last_name`, `phone_number`)
                VALUES (:username, :password,:email, :first_name, :last_name,:phone_number)";

        
    }else {
        echo "not set";
    }


}
?>
