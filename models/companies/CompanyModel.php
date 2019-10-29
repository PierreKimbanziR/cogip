<?php
 function getCompany(){

    require '../../config/db.php';

    $stmt=$conn->prepare("SELECT * FROM companies WHERE [id]");
    $stmt->execute();

    $row=$stmt->fetchAll();
 }