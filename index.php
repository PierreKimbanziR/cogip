<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: auth/login");
    exit;
}

include "config/db.php";

require 'controllers/Controller.php';

$url         = $_GET['p'];
$explode_url = explode('/', $url);

//----------
//  HOME
//----------

if ($explode_url[0] == 'home') {
    showHome();

//----------
    //  CONTACTS
    //----------

} elseif ($explode_url[0] == 'contacts') {
    require 'controllers/ContactsController.php';
    if (!empty($explode_url[1])) {
        if ($explode_url[1] == 'create') {
            createContact();
        } elseif ($explode_url[1] == 'update') {
            updateContact($explode_url[2]);
        } elseif ($explode_url[1] == 'delete') {
            deleteContact($explode_url[2]);
        } elseif (is_numeric($explode_url[1])) {
            showContactId($explode_url[1]);
        } else {
            echo "Bad request";
        }
    } else {
        showContacts();
    }

//----------
    //  COMPANIES
    //----------

} elseif ($explode_url[0] == 'companies') {
    require 'controllers/CompaniesController.php';
    if (!empty($explode_url[1])) {
        if ($explode_url[1] == 'create') {
            createCompany();
        } elseif ($explode_url[1] == 'update') {
            updateCompany($explode_url[2]);
        } elseif ($explode_url[1] == 'delete') {
            deleteCompany($explode_url[2]);
        } elseif (is_numeric($explode_url[1])) {
            showCompanyId($explode_url[1]);
        } else {
            echo "Bad request";
        }

    } else {
        showCompanies();

    }
//----------
    //  INVOICES
    //----------

} elseif ($explode_url[0] == 'invoices') {
    require 'controllers/InvoiceController.php';
    if (isset($explode_url[1])) {
        if ($explode_url[1] == 'create') {
            createInvoice();
        } elseif ($explode_url[1] == 'update') {
            updateInvoice($explode_url[2]);
        } elseif ($explode_url[1] == 'delete') {
            deleteInvoice($explode_url[2]);
        } elseif (is_numeric($explode_url[1])) {
            showInvoiceId($explode_url[1]);
        } else {
            echo "Bad request";
        }
    } else {
        showInvoices();
    }

} elseif ($explode_url[0] == 'admin') {
    showDashboard();
} else {
    header('Location: home');
}