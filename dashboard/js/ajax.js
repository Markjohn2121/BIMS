// $(".add-official-btn").click(function(e) {
//     e.preventDefault();
// });

// Get Officails Information
function OfficailsAjax(option, data) {

    if (option == "get") {
        data = new FormData();
        data.append('option', option);
        data.append('auth', "admin");

    } else {
        data.append('option', option);
        data.append('auth', "admin");
    }



    console.log("first" + option);
    $.ajax({
        type: "POST",
        url: "./query/officials_query.php",
        data: data,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response, sts) {
            console.log(sts);
            if (option == "get") {
                $("#tb-officail tbody tr").remove();
                $(".con").remove();
                // Add row in offical Table
                addOfficialCon(response);
                addOfficialRow(response);
                console.log(option)
                    // Count 

                $("#official-count").html(response.length);
            } else if (option == "update") {
                // OfficailsAjax("get");
                console.log(response);
                // loading
                loadingState("show", "pause", "show", "Edit Success");
                console.log(option)


            } else if (option == "delete") {
                console.log("deleted");
                loadingState("show", "pause", "show", "Delete Success");
                console.log(option)
            } else if (option == "create") {
                loadingState("show", "pause", "show", "Create Success");
                console.log(option);
                console.log(response.created);
            }

            // if (sts == "success") {
            //     OfficailsAjax("get");

            // }

            // $(".main-loading").hide();
            // on error handling
        },
        complete: function(jqXHR, exception) {
            console.log(jqXHR.status);
            console.log(exception);

            if (option != "get") {
                console.log("comlpeted")
                OfficailsAjax("get");
            }

        }


    });
}

// ///////


// Resident Ajax

function ResidentAjax(option, data = {}) {

    data.option = option;
    data.auth = "admin";
    console.log(option)
    $.ajax({
        type: "POST",
        url: "./query/resident_query.php",
        data: data,

        dataType: "JSON",
        success: function(response, sts) {
            if (option == "get") {
                $("#tb-resident tbody tr").remove();
                $(".con").remove();
                // Add row in offical Table
                addOfficialRow(response);
                addOfficialCon(response);

                // Count 

                $("#official-count").html(response.length);
            } else if (option == "update") {
                console.log(response);
                // loading
                loadingState("show", "pause", "show", "Edit Success");

                // OfficailsAjax("get");

            } else if (option == "delete") {
                console.log("deleted");
                loadingState("show", "pause", "show", "Delete Success");

            } else if (option == "create") {
                loadingState("show", "pause", "show", "Create Success");
                console.log("response");
            }

            console.log(sts);

            // $(".main-loading").hide();
            // on error handling
        },
        error: function(jqXHR, exception) {
            console.log(jqXHR.status);
            console.log(exception);

        }


    });
}
6