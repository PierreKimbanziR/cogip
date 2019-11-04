<?php

function showContacts()
{
    require 'models/contact/getContacts.php';
    $contacts   = getContacts();
    $page_title = 'Contacts';
    include 'views/contact/ContactsView.php';
}


function showContactId($id)
{
    require 'models/contact/getContact.php';
    $contact    = getContact($id);
    $page_title = 'Contacts';
    $email      = $contact['email'];
    include 'views/contact/ContactIdView.php';
}


function createContact()
{
    // if ($_SERVER['REQUEST_METHOD'] === 'POST')   
    // {  
        //echo"Ceci est un _post";
        require 'models/contact/addContact.php';
        require 'models/companies/CompaniesModel.php';
        $compagnies=getCompanies();       
        $page_title = 'Add Contact';
        include 'views/contact/ContactAddView.php';
    // }
}

function updateContact($id)
{
    require 'models/contact/patchContact.php';
    $page_title = 'Modify Contact';
    include 'views/contact/ContactAddView.php';
}


function deleteContact($id)
{
    $page_title = 'Delete Contact';
}