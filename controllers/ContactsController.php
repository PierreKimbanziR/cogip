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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'models/contact/addContact.php';
        addcontact();
    }
    // Amener les noms des sociétes
    require 'models/companies/CompaniesModel.php';
    $compagnies = getCompanies();
    $page_title = 'Add Contact';
    $update     = false;
    include 'views/contact/ContactAddView.php';
}

function updateContact($id)
{
    if ($_SESSION['level'] != "3") {
        header('location: /cogip/DONT_TRY_TO_HACK_ME');
        return;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'models/contact/addContact.php';
        patchContact($id);
    }
    require 'models/contact/getContact.php';
    $contact = getContact($id);
    $update  = true;
    // Amener les noms des sociétes
    require 'models/companies/CompaniesModel.php';
    $compagnies = getCompanies();
    $page_title = 'Modify Contact';
    include 'views/contact/ContactAddView.php';
}

function deleteContact($id)
{
    if ($_SESSION['level'] != "3") {
        header('location: /cogip/DONT_TRY_TO_HACK_ME');
        return;
    }

    require 'models/contact/dropContact.php';
    dropContact($id);
}