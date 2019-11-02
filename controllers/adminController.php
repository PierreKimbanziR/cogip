<?php

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
    //
}

function showUserId($id)
{
    //
}

function createUser()
{
    //
}

function updateUser($id)
{
    //
}

function deleteUser($id)
{

}