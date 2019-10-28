<?php

require 'models/Model.php';

function listContacts()
{
    $contacts = getContacts();
    require 'contactsView.php';
}

function showContact()
{
    $contact = getContact(id);
    require 'contactView.php';

}
