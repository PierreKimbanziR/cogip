<?php
function checkLogin()
{
    //Define GLOBALS
    global $conn;
    global $username_err;
    global $password_err;
    global $username;
    global $password;

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $stmt = $conn->prepare("SELECT id, username, password, firstname, userLevel FROM users WHERE username = '$username' LIMIT 1");
        $stmt->execute();
        $row = $stmt->fetch();

        if (password_verify($password, $row['password'])) {
            // Password is correct, so start a new session
            session_start();

            // Store data in session variables
            $_SESSION["loggedin"]  = true;
            $_SESSION["id"]        = $row['id'];
            $_SESSION["username"]  = $row['username'];
            $_SESSION["firstname"] = $row['firstname'];
            $_SESSION["level"]     = $row['level'];

            // Redirect user to welcome page
            header("location: /cogip/home");
        } else {
            // Display an error message if password is not valid
            $password_err = "The password you entered is not valid.";
        }
    }
}

function logMeOut()
{
    $_SESSION = array();
    session_destroy();
    header("location: /cogip/auth/login");
    exit;
}