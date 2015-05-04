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

                        <div class="form-group">
                            <label for="surname" class = "control-label">Surname:</label>
                            <input type = "text" name = "surname" id = "surname" required><br>
                        </div>

                        <div class="form-group">
                            <label for="firstname">First name:</label>
                            <input type = "text" name = "givenName" id ="firstname" required><br>
                        </div>

                        <div class ="form-group">
                            <label for="nationality">Nationality:</label>
                            <input type = "text" name = "nation" id ="nationality" required><br>
                        </div>

                        <div class = "form-group">

                            <label for="dob">Date of Birth:</label>
                            <input type="date" name="birthday" id ="dob" required><br>
                        </div>


                        <label>Place of Birth: </label><input type = "text" name="placeBirth" required><br>
                        <label>Date of issue: </label> <input type="date" name = "issue" required><br>
                        <label>Date of Expiration: </label><input type = "date" name = "dateExpiration" required><br>
                        <label>Sex:</label>
                        <input type = "radio" name = "gender" value = "M" checked> Male
                        <input type = "radio" name = "gender" value = "F">Female <br>

                       <label>Authority:</label> <input type = "text" name = "authority" required><br/>

                        <h3>User Information</h3>

                        <label for="username">Username:</label> <input type="text" name="username" id="username" required><br><span id="usernameError"></span><br/>
                        <label for="password">Password:</label> <input type="password" name="password" id="password" required><br>
                        <label for="email">Email:</label>  <input type="text" name="email" id="email" required><br>
                        <label for="phone_number">Phone Number: </label><input type="tel" name="phone_number" id="phone_number" required><span id = "phone_numberError"></span><br><br>
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
<script type = "text/javascript" src = "js/evacueeFunctions.js"></script>

</html>

