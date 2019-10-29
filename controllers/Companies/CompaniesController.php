<?php

require 'models/CompaniesModel.php'

function listCompanies() {
    
{
    $companies = getCompanies();
    require 'companiesView.php';
}

function showCompanies()
{
    $contact = getCompany(id);
    require 'companyView.php';

}


}