<!DOCTYPE html>
<html lang="en">
<?php require "header.php";?>
<body>
    <?php require "navbar.php";?>
    <div id="wrapper">
        <div class="jumbotron">
            <h1>NEO Login</h1>
            <form action="loginProcess.php" method="post" id="login_form">
                Username: <input type="text" name="username"> <br /><br />
                Password: <input type="password" name="password"> <br /><br />
                <button type="submit" class="btn btn-success">
                    <i class="icon-circle-arrow-right icon-large"></i> Submit
                </button>
            </form>
        </div>
    </div>
    <?php require "footer.php";?>
</body>
</html>
