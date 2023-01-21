$("button").click(function(e) {
    e.preventDefault();


    $.ajax({
        type: "POST",
        url: "../sampleQuery/data.php",
        data: { Photo: "my photo", Name: "Mark", Position: "Kagawad", Term: "2025", Purok: "5", Status: "Active" },
        dataType: "JSON",
        success: function(response) {


            console.log(response[0].photo);
        }
    });

});