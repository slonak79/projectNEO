<?php

require 'mysqlConfig.php';
$dbConn = getConnection();


session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['roles']) ||
    !isset($_SESSION['profile_picture'])) {
    header("Location: login.php");
}
	
if (isset($_POST['uploadForm'])) {

    echo $_FILES['fileName']['size'];
    echo $_FILES['fileName']['type'];
    
    $imageType = exif_imagetype($_FILES['fileName']['tmp_name']); //Returns 1, 2 or 3 for gif,jpg or png respectively
    echo $imageType;
	
	if($imageType != 1 AND $imageType != 2 AND $imageType != 3)
	{
		unlink($_FILES['fileName']['tmp_name']);
		echo "Improper File Type";
		
	}

	else 
	{
		
	
    $path = "img/" . $_SESSION['username'];   
	
	
	echo "<br>";
	
	echo $path; 
	
    if (!file_exists($path) ) { //checks whether user's folder exists 
       mkdir($path);
    }
    move_uploaded_file($_FILES['fileName']['tmp_name'], $path . '/' .  $_FILES['fileName']['name'] );
  	$sql = "UPDATE lab7_user SET profilePicture = :profilePicture WHERE username = :username";

	$namedParameters = array();

	$namedParameters[":username"] = $_SESSION['username'];
	$namedParameters[":profilePicture"] = $_FILES['fileName']['name'];

	$stmt = $dbConn->prepare($sql);
	$stmt->execute($namedParameters);
	
   
   	$sql = "SELECT profilePicture FROM lab7_user WHERE username = :username";

	$namedParameters = array();

	$namedParameters[":username"] = $_SESSION['username'];

	$stmt = $dbConn->prepare($sql);
	$stmt->execute($namedParameters);
	$result = $stmt->fetch();
	
	$pic = $result[0];
	
	
	
	}

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
      <form method="post" enctype="multipart/form-data" action="updateProfile.php">
          Select image: <input type="file" name="fileName" /> <br />
          <input type="submit" name="uploadForm"/>
          <br />
      </form>
    </div>
</body>
<?php require "footer.php";?>
</html>