<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 5/3/15
 * Time: 4:04 PM
 */?>


<!DOCTYPE html>
<html lang="en">
<?php require "header.php"; ?>

<body>
<?php require "navbar.php"; ?>
<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">
        <?php require "taskPanel.php"?>

        <div align="center">
            <h1>Update Profile</h1>
            <form method="post" enctype="multipart/form-data" action="updateProfile.php">
                Select image: <input type="file" name="fileName" /> <br />
                <input type="submit" name="uploadForm"/>
                <br />
            </form>
        </div>
    </div>
</div>
</body>
<?php require "footer.php";?>
</html>

