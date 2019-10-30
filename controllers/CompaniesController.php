<?php


function showCompanies() 
{
    require 'models/companies/CompaniesModel.php';
    $companies = getCompanies();
    //print_r($companies);
    include 'views/companies/CompaniesView.php';
}

function showCompanyId($id)
{
    require 'models/companies/CompanyModel.php';
    $company = getCompany($id);
    include 'views/companies/CompanyView.php';

}

