<?php

function showCompanies() {
    
{
    require 'models/companies/CompaniesModel.php';
    $companies = getCompanies();
    //print_r($companies);
    include 'views/companies/CompaniesView.php';
}
//showCompanies();


function showCompanyId($id)
{
    require 'models/contact/CompanyModel.php';
    $contact = getCompany($id);
    print_r($company);
    include 'views/companies/companyView.php';

}
//showCompany();


}