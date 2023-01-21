var tb_offical = document.getElementById("tb-offical");
var tbody = tb_offical.getElementsByTagName("tbody")[0];



function add() {
    $.ajax({
        type: "POST",
        url: "./sampleQuery/data.php",
        data: {
            Photo: "my photo",
            Name: "Mark",
            Position: "Kagawad",
            Term: "2025",
            Purok: "5",
            Status: "Active"
        },
        dataType: "JSON",
        success: function(response) {
            $("#tb-offical tbody tr").remove();
            addRows(response);
        }
    });
}



// Add officails Data to Table
function addRows(data) {
    console.log("sds");
    for (var addRow = 1; addRow <= data.length; addRow++) {

        let leng = tbody.getElementsByTagName("tr");
        var insertToRow = leng.length;

        tbody.insertRow(insertToRow);
        for (var cellNum = 0; cellNum < 6; cellNum++) {
            tbody.rows[insertToRow].insertCell(cellNum);
        }
        tbody.rows[insertToRow].cells[0].innerHTML = data[insertToRow].Photo;
        tbody.rows[insertToRow].cells[1].innerHTML = data[insertToRow].Name;
        tbody.rows[insertToRow].cells[2].innerHTML = data[insertToRow].Position;
        tbody.rows[insertToRow].cells[3].innerHTML = data[insertToRow].Term;
        tbody.rows[insertToRow].cells[4].innerHTML = data[insertToRow].Purok;
        tbody.rows[insertToRow].cells[5].innerHTML = data[insertToRow].Status;
    }
}