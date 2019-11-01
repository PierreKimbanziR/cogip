<?php

function showCompanies()
{
    require 'models/companies/CompaniesModel.php';
    $companies  = getCompanies();
    $page_title = 'Companies';
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
    require 'models/companies/CompanyAddModel.php';
    $page_title = 'Companies';
    include 'views/companies/CompanyAddView.php';
}