<?php

$lastname     = $firstname     = $username     = $email     = $password     = $password_verify     = $jobTitle     = $level     = "";
$lastname_err = $firstname_err = $username_err = $email_err = $password_err = $jobTitle_err = $level_err = "";

//var_dump($_POST);

function verifyData()
{

    global $lastname;
    global $firstname;
    global $username;
    global $email;
    global $password;
    global $password_verify;
    global $jobTitle;
    global $level;

    global $lastname_err;
    global $firstname_err;
    global $username_err;
    global $email_err;
    global $password_err;
    global $password_verify_err;
    global $jobTitle_err;
    global $level_err;

    // Validate jobTitle
    if (empty(trim($_POST["jobTitle"]))) {
        $jobTitle_err = "Please enter a jobTitle.";
    } else {
        $jobTitle = htmlspecialchars($_POST["jobTitle"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $jobTitle)) {
            $jobTitle_err = "Only letters and white space allowed";
        }
    }

    // Validate firstname
    if (empty(trim($_POST["firstname"]))) {
        $firstname_err = "Please enter a firstname.";
    } else {
        $firstname = htmlspecialchars($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
            $firstname_err = "Only letters and white space allowed";
        }
    }

    // Validate lastname
    if (empty(trim($_POST["lastname"]))) {
        $lastname_err = "Please enter a lastname.";
    } else {
        $lastname = htmlspecialchars($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            $lastname_err = "Only letters and white space allowed";
        }
    }

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = htmlspecialchars($_POST["username"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
            $username_err = "Only letters and white space allowed";
        }
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email address";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "email is invalid";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 4) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

}

function getUsers()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $row = $stmt->fetchAll();
    return $row;

}

function getUser($id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE id='$id'");
    $stmt->execute();
    $row = $stmt->fetch();
    return $row;
}

function addUser()
{
    global $conn;
    $username      = $_POST["username"];
    $checkUsername = $conn->prepare("SELECT id, username FROM users WHERE username = '$username'");
    $checkUsername->execute();
    $exist_user = $checkUsername->fetch();
    if ($exist_user) {
        $username_err = "This username is already taken.";
    }
    verifyData();
    global $lastname_err;
    global $firstname_err;
    global $username_err;
    global $email_err;
    global $password_err;
    global $password_verify_err;
    global $jobTitle_err;
    global $level_err;

    if ((empty($lastname_err)) && (empty($firstname_err)) && (empty($username_err)) && (empty($email_err)) && (empty($password_err)) && (empty($jobTitle_err)) && (empty($level_err))) {
        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $level           = $_POST["userLevel"];

        global $lastname;
        global $firstname;
        global $username;
        global $email;
        global $jobTitle;

        $stmt = $conn->prepare("INSERT INTO users (firstname,lastname,username,password,email,jobTitle,userLevel) VALUES('$firstname','$lastname','$username','$hashed_password','$email','$jobTitle','$level')");
        $stmt->execute();
        header('location: /cogip/admin/users');
    } else {
        return;
    }
}

function patchUser($id)
{
    if ($_SESSION['level'] != "3") {
        return;
    }

    verifyData();
    global $lastname_err;
    global $firstname_err;
    global $username_err;
    global $email_err;
    global $jobTitle_err;
    global $level_err;

    if ((empty($lastname_err)) && (empty($firstname_err)) && (empty($username_err)) && (empty($email_err)) && (empty($jobTitle_err)) && (empty($level_err))) {
        global $conn;
        $userLevel = $_POST["userLevel"];
        global $lastname;
        global $firstname;
        global $username;
        global $email;
        global $jobTitle;

        $stmt = $conn->prepare("UPDATE users SET firstname = ? ,lastname = ? ,username = ? ,email = ? ,jobTitle = ? ,userLevel = ? where id = $id");
        $stmt->execute([$firstname, $lastname, $username, $email, $jobTitle, $userLevel]);
        header('location: /cogip/admin/users');
    } else {
        return;
    }

}

function dropUser($id)
{
    if ($_SESSION['level'] != "3") {
        return;
    }

    global $conn;
    $stmt = $conn->prepare("DELETE FROM users WHERE id = '$id'");
    $stmt->execute();
    header('location: /cogip/admin/users');
}