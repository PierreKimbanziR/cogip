<?php
function dropContact($id)

{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = '$id'");
    $stmt->execute();
    header('location: /cogip/contacts');
}