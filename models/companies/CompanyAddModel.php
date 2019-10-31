<?php


function addCompany(){
    
    include 'config/db.php';
    $stmt = $conn->prepare("SELECT * FROM companies");
    $stmt->execute();

    $row = $stmt->fetchAll();
    return $row;
}

addCompany();