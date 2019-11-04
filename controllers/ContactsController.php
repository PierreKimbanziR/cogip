<?php

function showContacts()
{
    // importer Modèle contactS / liaison DB
    require 'models/contact/ContactsModel.php';
    $contacts   = getContacts();
    $page_title = 'Contacts';

    //print_r($contacts);
    // importer View contactS
    include 'views/contact/ContactsView.php';
}

// ----------------------------------------------------------
// Affichage ID

function showContactId($id)
{
    // importer Modèle contactId /  / liaison DB
    require 'models/contact/ContactIdModel.php';
    $contact    = getContact($id);
    $page_title = 'Contacts';
    $email      = $contact['email'];
    //print_r($contact);
    // importer View contactS
    include 'views/contact/ContactIdView.php';
}

// ----------------------------------------------------------
// Affichage Add Contact

function createContact()
{
    // importer Modèle ContactAddModel / liaison DB
    require 'models/contact/ContactAddModel.php';

    // Reprendre requète existante CompaniesModel.php
    require 'models/companies/CompaniesModel.php';
    $compagnies=getCompanies();
    
    $page_title = 'Add Contact';
    // importer View Add - Va servir également pour Update
    include 'views/contact/ContactAddView.php';
}

// ----------------------------------------------------------
// Affichage Update Contact


function updateContact($id)
{
    // importer Modèle ContactAddModel / liaison DB
    require 'models/contact/ContactPatchModel.php';
    echo $id;
    $page_title = 'Modify Contact';
    // importer View Add - Va servir également pour Update
    include 'views/contact/ContactAddView.php';
}