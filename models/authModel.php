<?php

$new_password_err = $confirm_password_err = "";
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
            $_SESSION["level"]     = $row['userLevel'];

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

function resetPassword()
{
    global $new_password_err;
    global $reset_password_err;
    $new_password;
    // Validate new password
    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Please enter the new password.";
    } elseif (strlen(trim($_POST["new_password"])) < 4) {
        $new_password_err = "Password must have atleast 4 characters.";
    } else {
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm the password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before updating the database
    if (empty($new_password_err) && empty($confirm_password_err)) {
        global $conn;
        $param_password = password_hash($new_password, PASSWORD_DEFAULT);
        $param_id       = $_SESSION["id"];

        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        $stmt->execute([$param_password, $param_id]);

        header('location: /cogip/auth/account');

    }
}

function getUser($id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE id='$id'");
    $stmt->execute();

    $row = $stmt->fetch();
    return $row;
}