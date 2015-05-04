<?php

require 'mysqlConfig.php';
$dbConn = getConnection();


session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['roles']) ||
    !isset($_SESSION['profile_picture'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require "header.php"; ?>

<body>
<?php require "navbar.php"; ?>
  <div>
       <?php
           if(!empty($_SESSION['roles'])){
               if(strpos($_SESSION['roles'], "ADMIN") !== false){
                   require "adminProfile.php";
               }
           }
      ?>
    </div>
</body>
<?php require "footer.php";?>
</html>