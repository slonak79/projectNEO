<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 5/4/15
 * Time: 1:05 PM
 */
?>


<!DOCTYPE html>
<html lang="en">
<?php require "header.php"; ?>

<body>
<?php require "navbar.php"; ?>
<div class="container-fluid">

    <div class="row row-offcanvas row-offcanvas-left">
        <?php require "taskPanel.php"?>
        <div align="center">
            <h1>Manage Evacuees</h1>

        </div>
    </div>
</div>
</body>
<?php require "footer.php";?>
<script src="http://maps.googleapis.com/maps/api/js"> </script>
<script type="text/javascript" src="js/map.js"></script>
</html>