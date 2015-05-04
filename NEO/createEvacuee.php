<!DOCTYPE html>
<html>
<?php require "header.php"; ?>

<body>
    <?php require "navbar.php"; ?>

    <div class="container-fluid">

        <div class="row row-offcanvas row-offcanvas-left">
            <?php require "taskPanel.php"?>
            <div align="center">
                 <h1>Create Evacuee</h1>
                <form action = "signUp.php"  method = "POST" >
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Registration</legend>
                        <label>Surname:</label> <input type = "text" name = "surname" required><br>
                        <label>First name:</label>  <input type = "text" name = "givenName" required><br>
                        <label>Nationality:</label> <input type = "text" name = "nation" required><br>
                        <label>Date of Birth:</label>  <input type="date" name="birthday" required><br>
                        <label>Place of Birth: </label><input type = "text" name="placeBirth" required><br>
                        <label>Date of issue: </label> <input type="date" name = "issue" required><br>
                        <label>Date of Expiration: </label><input type = "date" name = "dateExpiration" required><br>
                        <label>Sex:</label>
                        <input type = "radio" name = "gender" value = "M" checked> Male
                        <input type = "radio" name = "gender" value = "F">Female <br>

                       <label>Authority:</label> <input type = "text" name = "authority" required><br/>

                        <h3>User Information</h3>

                        <label for="username">Username:</label> <input type="text" name="username" id="username"required><br>
                        <label for="password">Password:</label> <input type="password" name="password" id="password" required><br>
                        <label for="email">Email:</label>  <input type="text" name="email" id="email" required><br>
                        <label for="phone_number">Phone Number: </label><input type="tel" name="phone_number" id="phone_number" required><br>
                        <label for="profile_picture">Profile Picture: </label><input type="file" name="profile_picture" id="profile_picture" required/> <br>

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

