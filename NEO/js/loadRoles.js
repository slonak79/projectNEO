/**
 * Created by edsan on 5/3/15.
 */

$.ajax({
    url:"adminFunctions.php",
    type:"GET",
    data: {
        action:"roles"
    },
    success: function (json) {
        $.each($.parseJSON(json),function(key, value){
            $("#roles_select").append($("<option></option>")
                .attr("value",value.role_id)
                .text(value.role_function));
        });
    },
    error: function (xhr, status, errorThrown) {
        //alert( "Sorry, there was a problem!" );
        console.log( "Error: " + errorThrown );
        console.log( "Status: " + status );
        console.dir( xhr );
    },
    complete: function( xhr, status ) {
        //alert( "The request is complete!" );
    }
});

