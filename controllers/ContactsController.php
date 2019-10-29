<?php


    function showContacts() {
        // importer Modèle contactS
        require '../models/contact/ContactsModel.php';
        $contacts = getContacts();
        //print_r($contacts);
        // importer View contactS
        include '../views/contact/ContactsView.php';
    }

    // Appel fonction
   // showContacts();


// ----------------------------------------------------------
// Affichage ID

function showContactId($id) {
    // importer Modèle contactS
    require '../models/contact/ContactIdModel.php';
    $contact = getContact();
    //print_r($contact);
    // importer View contactS
    include '../views/contact/ContactIdView.php';
}

// Appel fonction
showContactId(1);

// ----------------------------------------------------------




// function getContact(id) {
//     // importer Modèle contact ID
//     require 'models/contact/ContactIdModel.php';

//     // importer View contact ID
//     require 'views/contact/ContactId.php';

// }

