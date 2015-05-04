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
<style>div#googleMap { border-radius: 15px; margin: 0 auto 0 auto; }</style>
<body>
<?php require "navbar.php"; ?>
<div class="row row-offcanvas row-offcanvas-left">
    <?php require "taskPanel.php"?>

    <div class="col-sm-9 col-md-10 main">
        <h1>Manage Evacuees</h1>
        <div id="googleMap" style="width:700px;height:380px;border:4px solid black;"></div>

        <hr>

        <h2 class="sub-header">Evacuees</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Given Name</th>
                    <th>Surname</th>
                    <th>Date of Birth</th>
                    <th>Sex</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div><!--/row-->
</div>
</body>
<?php require "footer.php";?>
<script src="http://maps.googleapis.com/maps/api/js"> </script>
<script type="text/javascript" src="js/map.js"></script>
</html>