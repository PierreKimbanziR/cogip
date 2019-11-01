<?php

require "models/authModel.php";

function login()
{
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: /cogip/home");
        exit;
    }

    // Define variables and initialize with empty values
    $username     = $password     = "";
    $username_err = $password_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        checkLogin();
    }
    $page_title = "Login";

    require "views/auth/loginView.php";
}

function logout()
{
    logMeOut();
}