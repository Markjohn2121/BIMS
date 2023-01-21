const menu_title = document.getElementsByClassName("menu_title");

const menu_btn = document.getElementsByClassName("menu_btn");

const humburger_menu = document.getElementById("humburger_menu");
const navbar = document.getElementById("nav");
const back = document.getElementById("back");
for (var i = 0; i < menu_btn.length; i++) {
    menu_btn[i].addEventListener('click', function(event) {

        var current = document.getElementsByClassName('active-menu');
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active-menu", "");
        }
        this.className += " active-menu";

        if (window.innerWidth <= 600) {
            navbar.style.height = "0vh";
        }

    });
}


// hide menu bar
back.onclick = () => {
        navbar.style.height = "0vh";


    }
    // show menu bar
humburger_menu.onclick = () => {
    navbar.style.height = "100vh";

}