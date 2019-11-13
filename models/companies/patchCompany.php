<?php

$name       = $country       = $vat       = $role       = "";
$name_error = $country_error = $vat_error = $role_error = "";

function patchCompany($id)
{
    if ($_SESSION['level'] != "3") {
        echo 'no no no !!!!';
        return;
    }

    global $name_error;
    global $country_error;
    global $vat_error;
    global $role_error;

    global $name;
    global $country;
    global $vat;
    global $role;

    if (empty(trim($_POST['name']))) {
        $name_error = "Name of the company is required.";
    } else {
        $name = htmlspecialchars($_POST['name']);
        if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
            $name_error = "Only letters and white space allowed.";
        }
    }

    if ($_POST['country'] == '0') {
        $country_error = 'You must select a country.';

    } else {
        $country = htmlspecialchars($_POST['country']);
    }

    if (empty(trim($_POST['vat']))) {
        $vat_error = 'Vat number is required.';
        echo $vat_error;
    } else {
        $vat = htmlspecialchars($_POST['vat']);

        if (!preg_match('/^[0-9]*$/', $vat)) {
            $vat_error = 'Only numbers are allowed.';
        }
    }

    $role = htmlspecialchars($_POST['role']);

    if (empty($name_error) && empty($country_error) && empty($vat_error)) {
        global $conn;
        $stmt = $conn->prepare("UPDATE companies SET name=?, country=?, vat=?, role=? WHERE id ='$id' ");
        $stmt->execute([$name, $country, $vat, $role]);

        header('location: /cogip/companies');
    }
}