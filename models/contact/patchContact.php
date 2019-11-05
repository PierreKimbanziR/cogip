<?php

//Initialiser variables
$firstname=$lastname=$company=$email=$telephone="";
$firstname_Error=$lastname_Error=$company_Error=$email_Error=$telephone_Error="";



    // echo '<pre>';
    // echo var_dump($row);
    // echo '</pre>';

// Quand envoi de POST
function patchContact($id)
{ 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $workingAt = $_POST['workingAt'];
    $telephone = $_POST['telephone'];

    // Connection DB
    global $conn;
    $stmt = $conn->prepare("UPDATE contacts SET  firstname= ?, lastname= ?, email= ?, workingAt= ?, telephone= ? WHERE id = '$id' ");
    $stmt->execute([$firstname, $lastname, $email, $workingAt, $telephone]);
}