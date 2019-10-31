<?php
function getCompany($id)
{

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM companies WHERE id='$id'");
    $stmt->execute();

    $row = $stmt->fetch();
    return $row;
}

function getLastCompanies()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM companies ORDER BY createdAt DESC LIMIT 5");
    $stmt->execute();

    $row = $stmt->fetchAll();
    return $row;

}