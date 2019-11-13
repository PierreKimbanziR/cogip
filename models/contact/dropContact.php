<?php
function dropContact($id)
{
    if ($_SESSION['level'] != "3") {
        echo 'no no no !!!!';
        return;
    }

    global $conn;
    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = '$id'");
    $stmt->execute();
    header('location: /cogip/contacts');
}