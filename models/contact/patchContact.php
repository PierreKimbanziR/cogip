<?php
// Page sans sanitize
//Initialiser variables
$firstname       = $lastname       = $company       = $email       = $telephone       = "";
$firstname_Error = $lastname_Error = $company_Error = $email_Error = $telephone_Error = "";

// Quand envoi via POST (getContact ID )
function patchContact($id)
{
    if ($_SESSION['level'] != "3") {
        header('location: /cogip/DONT_TRY_TO_HACK_ME');
        return;
    }

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $workingAt = $_POST['workingAt'];
    $telephone = $_POST['telephone'];

    // Connection DB
    global $conn;
    $stmt = $conn->prepare("UPDATE contacts SET  firstname= ?, lastname= ?, email= ?, workingAt= ?, telephone= ? WHERE id = '$id' ");
    $stmt->execute([$firstname, $lastname, $email, $workingAt, $telephone]);

    header('location: /cogip/contacts');
}