<?php

function getContact($id)
{
    // Connexion à la DB Mdp, Host ...
    include "config/db.php";

      $stmt = $conn->prepare("SELECT contacts.*, companies.name as companyName FROM contacts LEFT JOIN companies ON contacts.workingAt=companies.id WHERE contacts.id = '$id'");

    $stmt->execute();

    $row = $stmt->fetch();
    return $row;
}
