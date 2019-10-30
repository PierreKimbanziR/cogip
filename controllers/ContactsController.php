<?php

function showContacts()
{
    // importer Modèle contactS
    require 'models/contact/ContactsModel.php';
    $contacts = getContacts();
    $page_title='View Contacts';
    //print_r($contacts);
    // importer View contactS
    include 'views/contact/ContactsView.php';
}


// ----------------------------------------------------------
// Affichage ID

function showContactId($id)
{
    // importer Modèle contactS
    require 'models/contact/ContactIdModel.php';
    $contact = getContact($id);
    $page_title='View Contact';
    $email=$contact['email'];
    //print_r($contact);

    // importer View contactS
    include 'views/contact/ContactIdView.php';
}

