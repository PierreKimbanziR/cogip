<?php

require 'models/Model.php';

function showHome()
{
    $firstname  = getHome();
    $page_title = 'Home';
    require 'views/HomePageView.php';
}

function dashboardPage()
{
    require 'models/contact/contactsModel.php';
    require 'models/InvoiceModel.php';
    require 'models/companies/CompanyModel.php';

    $lastInvoices  = showLatestsInvoices();
    $lastContacts  = getLastContacts();
    $lastCompanies = getLastCompanies();
    require 'views/AdminDashboardView.php';
}