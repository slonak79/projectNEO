<!DOCTYPE html>
<html>
<?php require "header.php"; ?>

<script>
    function displayError(id,message){
        $(id + "Error").html(message);
        $(id).css("background-color","red");
        $(id).focus();
        $(id + "Error").css("color", "red");
    }

    function checkUsername(){
        if($("#username").val().length < 4){
            displayError("#username", "Username needs to be atleast 4 characters!");
            return false;
        }
        if($("#username").val().length > 3){
            $("#username").css("background-color","white");
            $("#usernameError").html("");
        }

        $.ajax({
            type: "get",
            url: "verifyUserName.php",
            dataType: "json",
            data: {"username": $("#username").val() },
            success: function(data,status) {
                alert(data['exists']);
                if(data['exists']) {
                    displayError("#username","Username already taken!!" );
                }
                else{
                    $("#usernameError").html("Username available");
                    $("#usernameError").css("color", "green");
                }
            },
            complete: function(data,status) { //optional, used for debugging purposes
                alert(status);


            }
        });
    }

    function checkPhoneNumber(){
        if(!/^\(\d{3}\)\s*\d{3}-\d{4}$/.test($("#phone_number").val())){
            displayError("#phone_number","Correct Format: (###)###-####");
            return false;
        }
        if(/^\(\d{3}\)\s*\d{3}-\d{4}$/.test($("#phone_number").val())) {
            $("#phone_number").css("background-color", "white");
            $("#phone_numberError").html("");
        }
    }

</script>

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

    <script>

        $("#username").change(checkUsername);
        //$("#password").change(checkPassword);
        $("#phone_number").change(checkPhoneNumber);

    </script>







</body>
<?php require "footer.php";?>
</html>

