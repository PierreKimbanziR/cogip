<?php

function showCompanies() 
    
{
    require 'models/companies/CompaniesModel.php';
    $companies = getCompanies();
    //print_r($companies);
    include 'views/companies/CompaniesView.php';
}
//showCompanies();


function showCompanyId($id)
{
    require 'models/companies/CompanyModel.php';
    $contact = getCompany($id);
    print_r($company);
    include 'views/companies/CompanyView.php';

}
//showCompany();


