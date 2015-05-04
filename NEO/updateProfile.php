<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 4/28/15
 * Time: 10:19 PM
 */
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

