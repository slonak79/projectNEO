
function displayError(id,message){
    $(id + "Error").html(message);
    $(id).css("background-color","red");
    $(id).focus();
    $(id + "Error").css("color", "red");
}

function checkUsername(){
    var username = $("#username");
    if(username.val().length < 4){
        displayError("#username", "Username needs to be at least 4 characters!");
        return false;
    }
    else if(username.val().length > 3){
        username.css("background-color","white");
        $("#usernameError").html("");

        $.ajax({
            type: "get",
            url: "createUserFunctions.php",
            dataType: "json",
            data: {"username": username.val() },
            success: function(data,status) {
                console.log((data['exists']));

                if(data['exists']) {
                    displayError("#username","Username already taken!!" );
                }
                else{
                    $("#usernameError").html("Username available");
                    $("#usernameError").css("color", "green");
                }
            },
            complete: function(data,status) { //optional, used for debugging purposes
                console.log(status);
            }
        });
    }
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
$("#username").change(checkUsername);
//$("#password").change(checkPassword);
$("#phone_number").change(checkPhoneNumber);

