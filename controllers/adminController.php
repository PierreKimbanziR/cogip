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
    require 'views/admin/AdminDashboardView.php';
}

function showUsers()
{
    $users      = getUsers();
    $page_title = 'Admin - Users';
    include "views/admin/showUsersView.php";
}

function showUserId($id)
{
    $user       = getUser($id);
    $page_title = 'Admin - View User';
    include "views/admin/showUserView.php";

}

function createUser()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        addUser();
    }
    $postPath   = "create";
    $page_title = 'Admin - Create new User';
    include "views/admin/createUserView.php";
}

function updateUser($id)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        patchUser($id);
    }
    $user       = getUser($id);
    $postPath   = "update/$id";
    $page_title = 'Admin - Update User';
    include "views/admin/createUserView.php";

}

function deleteUser($id)
{
    dropUser($id);
}