<?php
function dropCompany($id)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM companies WHERE id = '$id'");
    $stmt->execute();
    header('location: /cogip/companies');
}
