<?php

//Initialiser variables
$firstname=$lastname=$company=$email=$telephone="";
$firstname_Error=$lastname_Error=$company_Error=$email_Error=$telephone_Error="";


// Afficher contenu dans Form


// recherche ID
// $sql = "SELECT * FROM contacts WHERE id='$id'";
// $sql = "SELECT contacts.*, companies.name as companyName FROM contacts LEFT JOIN companies ON contacts.workingAt=companies.id WHERE contacts.id = '$id'";

// $stmt = $conn->query($sql);
// $row = $stmt->fetch(PDO::FETCH_ASSOC);

//     $firstname=$row["firstname"];
//     $lastname=$row["lastname"];
//     $email=$row["email"];
//     $workingAt=$row["workingAt"];
//     $telephone=$row["telephone"];
//     $createdAt=$row["createdAt"];
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