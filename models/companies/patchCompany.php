<?php

$name=$country=$vat=$role="";
$name_error=$country_error=$vat_error=$role_error="";


global $conn; 
$conn -> exec ('SET NAMES utf8');

$sql="SELECT * FROM companies id= '$id'";
$stmt= $conn->query($sql);
$row = $stmt -> fetch(PDO::FETCH_ASSOC);


    
$name=$row["name"];
$country=$row["country"];
$vat=$row["vat"];
$role=$row["role"];
