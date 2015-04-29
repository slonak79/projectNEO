<!DOCTYPE html>
<html>
<?php require "header.php"; ?>

<body>
    <?php require "navbar.php"; ?>

    <h1>Create Evacuee</h1>

    <div align="center">

            <form action = "signUp.php"  method = "POST" >
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Registration</legend>

                    <label>Surname:</label> <input type = "text" name = "surname"><br>
                    <label>First name:</label>  <input type = "text" name = "givenName"><br>
                    <label>Nationality:</label> <input type = "text" name = "nation"><br>
                    <label>Date of Birth:</label>  <input type="date" name="birthday"><br>
                    <label>Place of Birth: </label><input type = "text" name="placeBirth"><br>
                    <label>Date of issue: </label> <input type="date" name = "issue"><br>
                    <label>Date of Expiration: </label><input type = "date" name = "dateExpiration"><br>
                    <label>Sex:</label>
                    <input type = "radio" name = "gender" value = "M" checked> Male
                    <input type = "radio" name = "gender" value = "F">Female <br>

                   <label>Authority:</label> <input type = "text" name = "authority" ><br/>

                    <button type="submit" class="btn btn-success">
                        <i class="icon-circle-arrow-right icon-large"></i> Submit
                    </button>

                </fieldset>
            </form>
    </div>
</body>
<?php require "footer.php";?>
</html>

