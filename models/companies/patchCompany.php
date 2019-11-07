<?php

$name=$country=$vat=$role="";
$name_error=$country_error=$vat_error=$role_error="";

function patchCompanies($id)
{
$name=$_POST["name"];
$country=$_POST["country"];
$vat=$_POST["vat"];
$role=$_POST["role"];

global $conn; 
$stmt = $conn -> prepare("UPDATE companies SET name=?, country=?, vat=?, role=? WHERE id ='$id' ");
$stmt->execute ([$name, $country, $vat, $role]);

header('location: /cogip/contacts');