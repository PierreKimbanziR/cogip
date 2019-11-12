<?php
session_start();
include "config/db.php";

require 'controllers/Controller.php';

$url         = $_GET['p'];
$explode_url = explode('/', $url);

//First check if need to login or logout

if ($explode_url[0] == 'auth') {
    require 'controllers/authController.php';
    if ($explode_url[1] == 'logout') {
        logout();
        return;
    }
    if ($explode_url[1] == 'login') {
        login();
        return;
    }
}

//IF NOT LOGGED IN => login

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: /cogip/auth/login");
    exit;
}

if (empty($explode_url[0])) {
    header('location: /cogip/home');
}

//----------
//  HOME
//----------

if ($explode_url[0] == 'home') {
    if ($explode_url[1]) {
        header("location: /cogip/home");
        exit;
    }
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
            createCompany($explode_url[2]);
        } elseif ($explode_url[1] == 'update') {
            updateCompany($explode_url[2]);
        } elseif ($explode_url[1] == 'delete') {
            deleteCompany($explode_url[2]);
        } elseif ($explode_url[1] == 'providers') {
            showProviders();
        } elseif ($explode_url[1] == 'clients') {
            showClients();
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
    require "controllers/adminController.php";
    //USERS
    if ($explode_url[1] == "users" && empty($explode_url[2])) {
        showUsers();
        return;
    } elseif ($explode_url[2] == 'create') {
        createUser();
    } elseif ($explode_url[2] == 'update') {
        updateUser($explode_url[3]);
    } elseif ($explode_url[2] == 'delete') {
        deleteUser($explode_url[3]);
    } elseif (is_numeric($explode_url[2])) {
        showUserId($explode_url[2]);
        return;
    } else {
        showDashboard();
    }

} elseif (($explode_url[0] == 'auth') && ($explode_url[1] == 'reset-password')) {
    reset_password();
    return;
} elseif (($explode_url[0] == 'auth') && ($explode_url[1] == 'account')) {
    showAccount($_SESSION['id']);
    return;
} else {
    show404($url);
}