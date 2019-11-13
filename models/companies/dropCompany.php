<?php
function dropCompany($id)
{
    if ($_SESSION['level'] != "3") {
        header('location: /cogip/DONT_TRY_TO_HACK_ME');
        return;
    }

    global $conn;
    $stmt = $conn->prepare("DELETE FROM companies WHERE id = '$id'");
    $stmt->execute();
    header('location: /cogip/companies');
}