<?php

require 'models/Model.php';

function listContacts()
{
    $contacts = getContacts();
    require 'views/contact/contactsView.php';
    require 'models/contact/ContactIdModel.php';
}

function showContact()
{
    $contact = getContact(id);
    require 'models/contact/ContactsModel.php';
    require 'views/contact/contactId.php';

}
