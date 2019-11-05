<?php

//Initialiser variables
$firstname=$lastname=$company=$email=$telephone="";
$firstname_Error=$lastname_Error=$company_Error=$email_Error=$telephone_Error="";


// Afficher contenu dans Form

global $conn;
$conn->exec('SET NAMES utf8');

    // recherche ID
$sql = "SELECT * FROM contacts WHERE id='$id'";
$stmt = $conn->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

    $firstname=$row["firstname"];
    $lastname=$row["lastname"];
    $email=$row["email"];
    $workingAt=$row["workingAt"];
    $telephone=$row["telephone"];
    $createdAt=$row["createdAt"];

    // echo '<pre>';
    // echo var_dump($row);
    // echo '</pre>';
