<?php

$name=$country=$vat=$role="";
$name_error=$country_error=$vat_error=$role_error="";

function patchCompanies($id)
{
$name=$row["name"];
$country=$row["country"];
$vat=$row["vat"];
$role=$row["role"];

global $conn; 
$stmt = $conn -> prepare("UPDATE companies SET name=?, country=?, vat=?, role=? WHERE id ='$id' ");
$stmt->execute ([$name, $country, $vat, $role]);