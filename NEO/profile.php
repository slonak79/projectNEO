<?php

require '../includes/hackathon/dbConnection.php';
$dbConn = getConnection();


session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
}


$user = $_SESSION['username'];

$sql = "SELECT profilePicture FROM users WHERE username = :username";

	$namedParameters = array();

	$namedParameters[":username"] = $_SESSION['username'];

	$stmt = $dbConn->prepare($sql);
	$stmt->execute($namedParameters);
	$result = $stmt->fetch();
	
	$pic = $result[0];
	
	
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
    
   //update database with the name of the file for the profile picture
   
   	
   
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
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>profile</title>
  <meta name="description" content="">
  <meta name="author" content="lara4594">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
  <div>
    <header>
      <h1>User Profile</h1>
      <link href ="css/styles.css" rel="stylesheet" />
    </header>

    <div>

<h2>
	Hello <?=$_SESSION['username']?>
	
</h2>
      
      
      <br />
      
       <?php
      
       if (empty($_SESSION['profilePicture'])){
           
         echo "<img id='profile' src='img/unknown.jpg' alt='Unknown user' >";
	
       } else {
           
          echo "<img id='profile' src='img/" . $user . "/" . $pic . "'>";
       }
      
      
      ?>
      
      <form method="post" enctype="multipart/form-data">
          
          Select image: <input type="file" name="fileName" /> <br />
          <input type="submit" name="uploadForm"/>
          <br />
      
          
      </form>


     

      
    </div>

  </div>
</body>
</html>