<?php
 function getCompany($id){

    require 'config/db.php';

    $stmt=$conn->prepare("SELECT * FROM companies WHERE id='$id'");
    $stmt->execute();

    $row=$stmt->fetch();
    return $row; 
 }