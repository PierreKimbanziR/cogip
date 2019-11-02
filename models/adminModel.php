<?php

function getUsers()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $row = $stmt->fetchAll();
    return $row;

}

function getUser($id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE id='$id'");
    $stmt->execute();
    $row = $stmt->fetch();
    return $row;
}

function createUser()
{
    //
}

function updateUser($id)
{
    //
}

function deleteUser($id)
{
    //
}