<?php

function getContact($id)
{
    // Connexion à la DB Mdp, Host ...
    include "config/db.php";

    // Prepare la conn, Selection de tous de la table contacts

    // $stmt = $conn->prepare("SELECT contacts.id, firstname, lastname, telephone, email, workingAt, contacts.createdAt, companies.name FROM contacts INNER JOIN companies ON contacts.id = companies.id WHERE contacts.id='$id'");
    // Mettre 'name' 

    // Sélection tous * de contact que l'on met dans AS companyName
      $stmt = $conn->prepare("SELECT contacts.*, companies.name as companyName FROM contacts LEFT JOIN companies ON contacts.workingAt=companies.id WHERE contacts.id = '$id'");

    $stmt->execute();

    // FetchAll ramène tout de ma DB et mettre le résultat dans $row
    // attention crée array dans array

    $row = $stmt->fetch();
    return $row;
}
// Appel de la fonction appel DB
// Retourner le résultat dans $row