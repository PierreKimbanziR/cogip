<?php

require 'models/Model.php';

function homePage()
{
    $firstname  = getHome();
    $page_title = 'Home';
    require 'views/HomePageView.php';
}

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