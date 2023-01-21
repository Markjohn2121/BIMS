const menu_title = document.getElementsByClassName("menu_title");

const menu_btn = document.getElementsByClassName("menu_btn");
const humburger_menu = document.getElementById("humburger_menu");
const navbar = document.getElementById("nav");
const back = document.getElementById("back");
let sec = document.getElementsByClassName("sec");
let selected = document.getElementsByClassName("selected");
let current = document.getElementsByClassName('active-menu');

/////////////////

// Menu buttons
let currentBtnIndex;
for (let btnIndex = 0; btnIndex < menu_btn.length; btnIndex++) {
    menu_btn[btnIndex].addEventListener('click', function(event) {
        currentBtnIndex = $(menu_btn).index(this);

        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active-menu", "");
        }
        selected[0].className = selected[0].className.replace(" selected", "");
        this.className += " active-menu";
        sec[currentBtnIndex + 2].className += " selected";
        if (window.innerWidth <= 600) {
            navbar.style.height = "0vh";
        }
    });
}

// Home btn
$("#home_btn").click(function(e) {
    e.preventDefault();
    if (current.length > 0) {
        current[0].className = current[0].className.replace(" active-menu", "");
    }

    selected[0].className = selected[0].className.replace(" selected", "");
    sec[1].className += " selected";

});

// Notif BTN
$("#notif_btn").click(function(e) {
    e.preventDefault();

    if (current.length > 0) {
        current[0].className = current[0].className.replace(" active-menu", "");
    }

    selected[0].className = selected[0].className.replace(" selected", "");
    sec[0].className += " selected";
});

// Report BTN
$("#report_btn").click(function(e) {
    e.preventDefault();
    if (current.length > 0) {

        current[0].className = current[0].className.replace(" active-menu", "");
    }

    selected[0].className = selected[0].className.replace(" selected", "");
    sec[7].className += " selected";
    if (window.innerWidth <= 600) {
        navbar.style.height = "0vh";
    }
});

// Logout BTN
$("#logout_btn").click(function(e) {
    e.preventDefault();
    if (current.length > 0) {
        current[0].className = current[0].className.replace(" active-menu", "");
    }

    selected[0].className = selected[0].className.replace(" selected", "");
    sec[8].className += " selected";
    if (window.innerWidth <= 600) {
        navbar.style.height = "0vh";
    }
});





// hide menu bar
back.onclick = () => {
        navbar.style.height = "0vh";


    }
    // show menu bar
humburger_menu.onclick = () => {
    navbar.style.height = "100vh";
}



// PLAY PAUSE LOADING

function loadingState(show, state, control, message) {

    if (show == "show") {
        $(".main-loading").show();
    } else if (show == "hide") {
        $(".main-loading").hide();

    }


    if (control == "show") {
        console.log(control)

        var timeout = setTimeout(function() {

            $(".con-load").show();
        }, 1000);

    } else if (control == "hide") {
        $(".con-load").hide();
        // $(".con-load").css("display", "none !important")
    }

    // loading message
    $(".loading-msg").text(message);

    if (state == "pause") {


        $(".item-1 ,.item-2,.item-3,.item-4").css({ " animation-fill-mode": "forwards", "animation-iteration-count": "1" });


        // clearTimeout(timeout);

    } else if (state == "play") {



        $(".item-1 ,.item-2,.item-3,.item-4").css({ " animation-fill-mode": "backwards", "animation-iteration-count": "infinite", "animation-play-state": "running" });

    }
}