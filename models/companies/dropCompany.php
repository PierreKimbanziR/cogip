<?php
function dropCompany($id)
{
    if ($_SESSION['level'] != "3") {
        echo 'no no no !!!!';
        return;
    }

    global $conn;
    $stmt = $conn->prepare("DELETE FROM companies WHERE id = '$id'");
    $stmt->execute();
    header('location: /cogip/companies');
}