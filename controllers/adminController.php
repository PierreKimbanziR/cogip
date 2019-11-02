<?php

require 'models/adminModel.php';

function showDashboard()
{
    require 'models/contact/contactsModel.php';
    require 'models/InvoiceModel.php';
    require 'models/companies/CompanyModel.php';

    $lastInvoices  = showLatestsInvoices();
    $lastContacts  = getLastContacts();
    $lastCompanies = getLastCompanies();
    require 'views/AdminDashboardView.php';
}

function showUsers()
{
    $users = getUsers();
}

function showUserId($id)
{
    $user = getUser($id);
}

function createUser()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        addUser();
    } else {
        createUserView();
    }
}

function updateUser($id)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        patchUser();
    } else {
        getUser($id);
        createUserView();
    }

}

function deleteUser($id)
{
    dropUser($id)();
}