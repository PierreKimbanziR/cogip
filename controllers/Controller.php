<?php

require 'models/Model.php';

function showHome()
{
    require 'models/contact/getContacts.php';
    require 'models/InvoiceModel.php';
    require 'models/companies/CompanyModel.php';

    $lastInvoices  = showLatestsInvoices();
    $lastContacts  = getLastContacts();
    $lastCompanies = getLastCompanies();

    $firstname  = getHome();
    $page_title = 'Home';
    require 'views/HomePageView.php';
}