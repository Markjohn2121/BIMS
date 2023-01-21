var tb_officail = document.getElementById("tb-officail");
var tbody = tb_officail.getElementsByTagName("tbody")[0];
let TRLength = tbody.getElementsByTagName("tr");

// $(document).ready(function() {
//     // alert("loaded");
//     add();
// });


// Add officails Data to Table
let OfficailImg;
let officaildataDiv;




function addOfficialRow(data) {

    // addOfficialCon(data);
    for (var addRow = 1; addRow <= data.length; addRow++) {


        insertToRow = TRLength.length;
        // console.log(insertToRow);
        tbody.insertRow(insertToRow);
        for (var cellNum = 0; cellNum < 6; cellNum++) {
            tbody.rows[insertToRow].insertCell(cellNum);
        }


        OfficailImg = document.createElement("img");
        OfficailImg.className = "tiny-photo"; // Class name for img tag
        OfficailImg.setAttribute("alt", "Officail Photo");
        OfficailImg.dataset.id = insertToRow; // put unique id here 

        OfficailImg.src = "../../assets/ui-user-profile.svg"; // Profile path here

        officaildataDiv = document.createElement("div");
        officaildataDiv.className = "officaildataDiv";
        officaildataDiv.append(OfficailImg);


        tbody.rows[insertToRow].cells[0].append(officaildataDiv);
        tbody.rows[insertToRow].cells[1].innerHTML = `<div class="td-con">${data[insertToRow].Name}</div>`
        tbody.rows[insertToRow].cells[2].innerHTML = `<div class="td-con">${data[insertToRow].Position}</div>`
        tbody.rows[insertToRow].cells[3].innerHTML = `<div class="td-con">${data[insertToRow].Term}</div>`
        tbody.rows[insertToRow].cells[4].innerHTML = `<div class="td-con">${data[insertToRow].Purok}</div>`
        tbody.rows[insertToRow].cells[5].innerHTML = `<div class="td-con">${data[insertToRow].Status=="active"?`${"<p class='badge rounded-pill bg-success'>Active</p>"}`:`${"<p class='badge rounded-pill bg-danger'>Not Active</p>"}`}</div>`
 

    }
  
}

// viewofficial_btn = document.getElementsByClassName("viewofficial-btn");

//  table Search bar

$("#of-search").keyup(function (e) {
    // e = e.srcElement;
    let val = $("#of-search").val();
    let textval;

    for (var row = 0; row < TRLength.length; row++) {

        for (var cell = 0; cell < 6; cell++) {
            textval = tbody.rows[row].cells[cell].innerHTML;
            val = val.toUpperCase();

            if (textval.toLocaleUpperCase().indexOf(val) > -1) {
                tbody.rows[row].style.display = "";
                break;
            } else {
                tbody.rows[row].style.display = "none";
            }
        }
    }
});