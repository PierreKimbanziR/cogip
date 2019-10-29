<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: auth/login");
    exit;
}

require 'controllers/Controller.php';

$url         = $_GET['p'];
$explode_url = explode('/', $url);

// Debug router
// echo "<pre>";
// print_r($explode_url);
// echo "</pre>";

//----------
//  HOME
//----------

if ($explode_url[0] == 'home') {
    homePage();

//----------
    //  CONTACTS
    //----------

} elseif ($explode_url[0] == 'contacts') {
    require 'controllers/ContactsController.php';
    if (!empty($explode_url[1])) {
        showContactId($explode_url[1]);
    } else {
        showContacts();

    }

//----------
    //  COMPANIES
    //----------

} elseif ($explode_url[0] == 'companies') {
    if (isset($explode_url[1])) {
        echo "this is the company n°" . $explode_url[1] . " page";
    } else {
        echo 'show all companies';
    }
//----------
    //  INVOICES
    //----------

} elseif ($explode_url[0] == 'invoices') {
    require 'controllers/InvoiceController.php';
    if (isset($explode_url[1])) {
        showInvoiceId($explode_url[1]);
    } else {
        showInvoices();
    }

} else {
    header('Location: home');
}