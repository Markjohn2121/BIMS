<?php
session_start();

if(isset($_SESSION['loggedIn'])){

    die();

}else{

    include_once("login/login.html");
die();

}





?>