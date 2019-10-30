<?php

function getCompanies()
{

    require 'config/db.php';

    $stmt = $conn->prepare("SELECT * FROM companies");
    $stmt->execute();

    $row = $stmt->fetchAll();
    return $row;

}

getCompanies();