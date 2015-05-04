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
                            <label for="surname" class="control-label">Surname:</label>
                            <input type = "text" name = "surname" id="surname" required><br>
                        </div>

                        <div class="form-group">
                            <label for="firstname" class="control-label">First name:</label>
                            <input type = "text" name = "givenName" id="firstname" required><br>
                        </div>

                        <div class ="form-group">
                            <label for="nationality" class="control-label" >Nationality:</label>
                            <input type = "text" name = "nation" id="nationality" required><br>
                        </div>

                        <div class = "form-group">
                            <label for="dob" class="control-label">Date of Birth:</label>
                            <input type="date" name="birthday" id ="dob" required><br>
                        </div>

                        <div class = "form-group">
                            <label for = "birthPlace" class="control-label">Place of Birth: </label>
                            <input type = "text" name="placeBirth" id="birthPlace" required><br>
                        </div>

                        <div class = "form-group">
                            <label for = "dateIssue" class="control-label" >Date of issue: </label>
                            <input type="date" name = "issue" id="dateIssue" required><br>
                        </div>

                        <div class = "form-group">
                            <label for = "dateExp" class="control-label">Date of Expiration: </label>
                            <input type = "date" name = "dateExpiration" id="dateExp" required><br>
                        </div>

                        <div class = "form-group">
                            <label for = "sex"  class="control-label">Sex:</label>
                            <input type = "radio" name = "gender" value = "M" id="sex" checked> Male
                            <input type = "radio" name = "gender" value = "F" id="sex">Female<br>
                        </div>

                        <div class = "form-group">
                            <label for="authority" class="control-label">Authority:</label>
                            <input type = "text" name = "authority" id = "authority" required><br/>
                        </div>

                        <h3>User Information</h3>

                        <div class = "form-group">
                            <label for="username" class="control-label">Username:</label>
                            <input type="text" name="username" id="username" required><br><span id="usernameError"></span>
                        </div>

                        <div class ="form-group">
                            <label for="password" class="control-label">Password:</label>
                            <input type="password" name="password" id="password" required><br>

                        </div>

                        <div class = "form-group">
                            <label for="email" class="control-label">Email:</label>
                            <input type="text" name="email" id="email" required><br>

                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="control-label">Phone Number: </label>
                            <input type="tel" name="phone_number" id="phone_number" required><br><span id = "phone_numberError"></span><br>

                        </div>

                        <div class="form-group">
                            <label for="profile_picture" class="control-label">Profile Picture: </label>
                            <input type="file" name="profile_picture" id="profile_picture" required/> <br>
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
<script type = "text/javascript" src = "js/evacueeFunctions.js"></script>

</html>

