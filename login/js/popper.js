const goregister_btn = document.getElementById("goregister_btn");
const register_btn = document.getElementById("register_btn");
const register_form = document.getElementById("register_form");

const gologin_btn = document.getElementById("gologin_btn");
const login_btn = document.getElementById("login_btn");
const login_form = document.getElementById("login_form");


// go to register page
goregister_btn.onclick = () => {
        hideElement(login_form);
        showElement(register_form, "flex");
    }
    // go to login page
gologin_btn.onclick = () => {
    hideElement(register_form);
    showElement(login_form, "flex");
}



// Hide element function
function hideElement(element) {
    element.style.display = "none";
}
// show element function
function showElement(element, option) {
    element.style.display = option;
}