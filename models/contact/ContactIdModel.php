<?php

function getContact($id)
{
    // Connexion à la DB Mdp, Host ...
    include "config/db.php";

    // Prepare la conn, Selection de tous de la table contacts
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE id='$id'");
    $stmt->execute();

    // FetchAll ramène tout de ma DB et mettre le résultat dans $row
    $row = $stmt->fetch();
    return $row;
}
// Appel de la fonction appel DB
// Retourner le résultat dans $row