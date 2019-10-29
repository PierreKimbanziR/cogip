<?php

function getContacts()

{
    // Connexion à la DB Mdp, Host ...
    include "../config/db.php";

    // Prepare la conn, Selection de tous de la table contacts
    $stmt = $conn->prepare("SELECT * FROM contacts");
    $stmt->execute();

    // FetchAll ramène tout de ma DB et mettre le résultat dans $row
    $row = $stmt->fetchAll();
    return $row;
}
// Appel de la fonction appel DB 
// Retourner le résultat dans $row 
getContacts();

?>