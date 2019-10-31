<?php

function showContacts()
{
    // importer Modèle contactS / liaison DB
    require 'models/contact/ContactsModel.php';
    $contacts   = getContacts();
    $page_title = 'View Contacts';
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
    $page_title = 'View Contact';
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
    $page_title = 'Add Contact';
    // importer View Add - Va servir également pour Update
    include 'views/contact/ContactAddView.php';
}

// ----------------------------------------------------------
// Affichage Update Contact