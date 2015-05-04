<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 5/3/15
 * Time: 4:40 PM
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
            <h1>Create User</h1>
            <form action="signUpUser.php" class="form-horizontal" method="POST" id="addUserForm" name="addUserForm">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Registration</legend>
                    <div class="form-group">
                        <label for="username" class="control-label">Username:</label>
                        <input type="text" name="username" id="username"required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input type="text" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name" class="control-label">First Name:</label>
                        <input type="text" name="first_name" id="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="control-label">Last Name:</label>
                        <input type="text" name="last_name" id="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email:</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="control-label">Phone Number: </label>
                        <input type="tel" name="phone_number" id="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label for="profile_picture" class="control-label">Profile Picture: </label>
                        <input type="file" name="profile_picture" id="profile_picture" required/>
                    </div>
                    <div class="form-group">
                        <select form="addUserForm" class="form-control" id="roles_select">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sex:</label>
                        <input type = "radio" name="gender" value ="M" id="male_radio"> <label for="male_radio">Male</label>
                        <input type = "radio" name="gender" value ="F" id="female_radio"><label for="female_radio">Female</label>
                    </div>
                    <button type="submit" class="btn btn-success">
                        <i class="icon-circle-arrow-right icon-large"></i> Submit
                    </button>

                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
<?php require "footer.php";?>
</html>