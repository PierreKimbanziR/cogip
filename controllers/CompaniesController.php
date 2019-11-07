<?php

function showCompanies()
{
    require 'models/companies/CompaniesModel.php';
    $companies  = getCompanies();
    $page_title = 'Companies';
    //print_r($companies);
    include 'views/companies/CompaniesView.php';
}

function showClients()
{
    require 'models/companies/CompaniesModel.php';
    $companies  = getCompaniesRole(0);
    $page_title = 'Clients';
    //print_r($companies);
    include 'views/companies/CompaniesView.php';
}

function showProviders()
{
    require 'models/companies/CompaniesModel.php';
    $companies  = getCompaniesRole(1);
    $page_title = 'Providers';
    //print_r($companies);
    include 'views/companies/CompaniesView.php';
}


function showCompanyId($id)
{
    require 'models/companies/CompanyModel.php';
    $company    = getCompany($id);
    $page_title = 'Companies';
    include 'views/companies/CompanyView.php';

}

function createCompany()
{
    if ($_SERVER["REQUEST_METHOD"] =="POST"){
        require 'models/companies/CompanyAddModel.php';
        addCompany();
    }
    $page_title = 'Add Company';
    $update=false;
    include 'views/companies/CompanyAddView.php';
    
    
}

function updateCompany($id)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'models/companies/patchCompany.php';
        patchCompany($id);
    }
    require 'models/companies/CompanyModel.php';
    $company    = getCompany($id);
    $update = true;
    // Amener les noms des sociétes
    
    
    $page_title = 'Modify company';
    include 'views/companies/CompanyAddView.php';
}
function deleteCompany($id)
{
    require 'models/companies/dropCompany.php';
    dropCompany($id);
}