<?php

function getCompanies()
{

    global $conn;

    $stmt = $conn->prepare("SELECT * FROM companies");
    $stmt->execute();

    $row = $stmt->fetchAll();
    return $row;
}

function getCompaniesRole($role)
{

   global $conn; 

    $stmt = $conn->prepare("SELECT * FROM companies WHERE role='$role'");
    $stmt->execute();

    $row = $stmt->fetchAll();
    return $row;
}
