let right_con;
let new_official_con;
let btnIndex = 0;
var viewofficial_btn;
var curntBtn = 0;
let selectedID;

function addOfficialCon(data) {
    btnIndex = 0;


    var ConIndex = data.length
    for (var addCon = 0; addCon < ConIndex; addCon++) {

        // add container to officails

        right_con = document.getElementsByClassName("right-con")[0];

        // Generate a Official container



        right_con.insertAdjacentHTML('beforeend', addOfficialContainerElement(data[addCon].Photo, data[addCon].Position, data[addCon].Name, data[addCon].Status, btnIndex));

        viewofficial_btn = document.getElementsByClassName("viewofficial-btn");

        // get official info when btn click
        viewofficial_btn[addCon].addEventListener('click', function() {


            viewofficial_btn = document.getElementsByClassName("viewofficial-btn");
            // ////

            $("#edit-photo-path").val(data[this.dataset.index].Photo);
            $("#official-photo").attr("src", data[this.dataset.index].Photo);
            $("#official-id,#edit-official-id").val(data[this.dataset.index].Id);
            $("#official-position").text(data[this.dataset.index].Position);
            $("#official-name").text(data[this.dataset.index].Name);
            $("#official-age").text(data[this.dataset.index].Age);
            $("#official-gender").text(data[this.dataset.index].Gender);
            $("#official-civilstatus").text(data[this.dataset.index].CivilStatus);
            $("#official-birthdate").text(data[this.dataset.index].BirtDate);
            $("#official-contact").text(data[this.dataset.index].Contact);
            $("#official-term").text(data[this.dataset.index].Term);
            $("#official-status").text(data[this.dataset.index].Status);

            // ///
            $("#edit-official-image").val("");
            $("#edit-official-photo").attr("src", data[this.dataset.index].Photo);
            $("#edit-official-position").val(data[this.dataset.index].Position);
            $("#edit-official-name").val(data[this.dataset.index].Name);
            $("#edit-official-age").val(data[this.dataset.index].Age);
            $("#edit-official-purok").val(data[this.dataset.index].Purok);
            $("#edit-official-gender").val(data[this.dataset.index].Gender);
            $("#edit-official-civilstatus").val(data[this.dataset.index].CivilStatus);
            $("#edit-official-birthdate").val(data[this.dataset.index].BirthDate);
            $("#edit-official-contact").val(data[this.dataset.index].Contact);
            $("#edit-official-term").val(data[this.dataset.index].Term);
            $("#edit-official-status").val(data[this.dataset.index].Status);


            // 
            $("#add-official-photo").attr("src", "./../assets/ui-user-profile.svg");

            curntBtn = this.dataset.index
            $(".left-con").show();


        });

        // delete official btn
        let delete_official_btn = document.getElementsByClassName("delete-official");
        delete_official_btn[addCon].addEventListener('click', function() {

            deleteOfficial(data[this.dataset.id].Id, data[this.dataset.id].Photo);



        });

        btnIndex++

    }

    $(document).ready(function() {
        if (window.innerWidth > 600) {
            viewofficial_btn[curntBtn].click();

        }
    });

}





// Delete Official
function deleteOfficial(id, photo) {

    if (confirm("Are you sure?") == true) {

        console.log(id);
        var formData = new FormData();
        formData.append("id", id);
        formData.append("photo", photo);
        loadingState("show", "play", "hide", "");
        OfficailsAjax("delete", formData);


    } else {
        loadingState("hide", "pause", "hide", "");
    }



}



// no use for now
function selectedOfficial(selected, data) {
    let official_name = document.getElementsByClassName("official-name");
    let stat = document.getElementsByClassName("stat");
    let age_official = document.getElementsByClassName("age-official");
    let official_position = document.getElementsByClassName("official-position");

    official_position[selected].textContent = $("#official-position").text();
    official_name[selected] = $("#official-name").text()
}


$(".btn-close").click(function(e) {

    $(".left-con").hide();
    e.preventDefault();

});




// edit official  Update Official
var officialtmppath;
$("#edit-officail-form").on('submit', function(e) {


    // let edit_official_data = {
    //     Id: $("#edit-official-id").val(),
    //     Photo: officialtmppath,
    //     Name: $("#edit-official-name").val(),
    //     Position: $("#edit-official-position").val(),
    //     Term: $("#edit-official-term").val(),
    //     Purok: $("#edit-official-purok").val(),
    //     Status: $("#edit-official-status").val(),
    //     Age: $("#edit-official-age").val(),
    //     Gender: $("#edit-official-gender").val(),
    //     CivilStatus: $("#edit-official-civilstatus").val(),
    //     BirthDate: $("#edit-official-birthdate").val(),
    //     Contact: $("#edit-official-contact").val()
    // }

    console.log("on submit");
    var formData = new FormData(this);
    loadingState("show", "play", "hide", ""); // show loading
    OfficailsAjax("update", formData);
    // OfficailsAjax("get");

    btnIndex = 0;
    $("#edit-official-name ,#edit-official-position,#edit-official-term,#edit-official-purok,#edit-official-status,#edit-official-age,#edit-official-gender,#edit-official-civilstatus,#edit-official-birthdate,#edit-official-contact").val("");


    e.preventDefault();


});


// CONVERT FORM  and submit Add Officials
$('#add-officail-form').on('submit', function(e) {

    console.log("on submit");
    var formData = new FormData(this);

    loadingState("show", "play", "hide", "");
    OfficailsAjax("create", formData);

    $("#add-official-photo,#edit-official-photo").attr("src", "./../assets/ui-user-profile.svg");
    $('#add-officail-form')[0].reset();
    e.preventDefault();

});




// Add officail btn
// $("#add-official-btn").click(function(e) {

//     alert("added");


//     // var formData = $("#add-officail-form").serialize();
//     // console.log(formData);
//     // $("#tb-offical tbody tr").remove()
//     e.preventDefault();
//     let add_official_data = {
//         Photo: officialtmppath,
//         Name: $("#add-official-name").val(),
//         Position: $("#add-official-position").val(),
//         Term: $("#add-official-term").val(),
//         Purok: $("#add-official-purok").val(),
//         Status: $("#add-official-status").val(),
//         Age: $("#add-official-age").val(),
//         Gender: $("#add-official-gender").val(),
//         CivilStatus: $("#add-official-civilstatus").val(),
//         BirthDate: $("#add-official-birthdate").val(),
//         Contact: $("#add-official-contact").val()
//     }


//     loadingState("show", "play", "hide", "");
//     OfficailsAjax("create", add_official_data);
//     OfficailsAjax("get");

//     $("#add-official-name ,#add-official-position,#add-official-term,#add-official-purok,#add-official-status,#add-official-age,#add-official-gender,#add-official-civilstatus,#add-official-birthdate,#add-official-contact").val("");




//     // loading

// });




// Official image preview
$("#edit-official-image ,#add-official-image").change(function(e) {
    officialtmppath = URL.createObjectURL(e.target.files[0]);
    $("#edit-official-photo ,#add-official-photo").fadeIn("fast").attr('src', officialtmppath);
    e.preventDefault();
});


// officail container
function addOfficialContainerElement(Photo, Position, Name, Status, btnIndex) {


    return `<div class="con">
    <div class="position-con m-1 position-relative text-center ">
        <div>
            <h5 class="official-position" class=" m-1">${Position}</h5>
           
        </div>
        <div class="photo-con  text-center m-2">
       
        <a href="${ Photo == null ? "../../assets/ui-user-profile.svg"  : `${Photo.search("./uploads/officials/official") < 0 ? "../../assets/ui-user-profile.svg": Photo  }` }">
            <img class="official-photo img-fluid text-center" src="${ Photo == null ? "../../assets/ui-user-profile.svg"  : `${Photo.search("./uploads/officials/official") < 0 ? "../../assets/ui-user-profile.svg": Photo  }` }" alt="Photo">
            </a>
        </div>
    </div>
    <div class="name-con text-center">
        <p class="officail-name">${Name}</p>
    </div>
    <div class="option-con text-center">
        <ul class="list-con text-center">
            <li>Status</li>
            <li>delete</li>
            <li>View</li>
        </ul>
        <ul class="list-con2">
            <li><div class="stat " >${Status=="active"?`${"<p class='status-official badge rounded-pill bg-success'>Active</p>"}`:`${"<p class='status-official badge rounded-pill bg-danger'>Not Active</p>"}`}</div></li>
            <li>
         
            <button class="delete-official border-0 " data-id="${btnIndex}" data-bs-toggle="modal" data-bs-target="#loadingmodal" > <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#2F88FF" stroke="#000" d="M9 10V44H39V10H9Z"/><path stroke="#fff" stroke-linecap="round" d="M20 20V33"/><path stroke="#fff" stroke-linecap="round" d="M28 20V33"/><path stroke="#000" stroke-linecap="round" d="M4 10H44"/><path fill="#2F88FF" stroke="#000" d="M16 10L19.289 4H28.7771L32 10H16Z"/></g></svg> </button></li>
            <li><button class="viewofficial-btn btn btn-sm btn-outline-info " data-index="${btnIndex}"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#2F88FF" stroke="#000" d="M24 36C35.0457 36 44 24 44 24C44 24 35.0457 12 24 12C12.9543 12 4 24 4 24C4 24 12.9543 36 24 36Z"/><path fill="#43CCF8" stroke="#fff" d="M24 29C26.7614 29 29 26.7614 29 24C29 21.2386 26.7614 19 24 19C21.2386 19 19 21.2386 19 24C19 26.7614 21.2386 29 24 29Z"/></g></svg></button></li>
        </ul>
    </div>
    </div> `;



}