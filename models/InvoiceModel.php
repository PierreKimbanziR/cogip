<?php
//Show all invoices
function getInvoices()
{
    global $conn;
    $sqlcomp = $conn->prepare("SELECT invoices.*, companies.name FROM invoices INNER JOIN companies ON companyId = companies.id ORDER BY invoices.createdAt ASC");
    $sqlcomp->execute();
    $getInvoicescomp = $sqlcomp->fetchAll();
    $sqlcont         = $conn->prepare("SELECT invoices.*, contacts.firstname, contacts.lastname FROM invoices INNER JOIN contacts ON contactId = contacts.id ORDER BY invoices.createdAt ASC");
    $sqlcont->execute();
    $getInvoicescont = $sqlcont->fetchAll();
    $getInvoices     = array($getInvoicescomp, $getInvoicescont);
    return $getInvoices;
}

//Show an invoice
function getInvoice($invoiceID)
{
    global $conn;
    $sql = $conn->prepare("SELECT invoices.clientType clientType,invoices.companyId companyId, invoices.contactId contactId, invoices.invoiceNumber invoiceNumber, invoices.description description, invoices.amount amount, invoices.type type, invoices.createdAt createdAt, contacts.firstname firstname, contacts.lastname lastname, contacts.email email, contacts.telephone telephone, contacts.workingAt workingAt, companies.name name, companies.country country, companies.vat vat FROM invoices LEFT JOIN companies ON invoices.clientType = 0 AND invoices.companyId = companies.id LEFT JOIN contacts ON invoices.clientType = 1 AND invoices.contactId = contacts.id WHERE invoices.id = ?");
    $sql->execute(array($invoiceID));
    $getInvoice = $sql->fetch();
    return $getInvoice;
}

//Delete an invoice from database
function dropInvoice($invoiceID)
{
    if ($_SESSION['level'] != "3") {
        header('location: /cogip/DONT_TRY_TO_HACK_ME');
        return;
    }

    global $conn;
    $sql = $conn->prepare("DELETE FROM invoices WHERE id = ?");
    $sql->execute(array($invoiceID));
}

//Add an invoice to the database
function addInvoice()
{
    global $conn;
    $invoiceNumber = $_POST["invoiceNumber"];
    $clientType    = $_POST["clientType"];
    $description   = $_POST["description"];
    $description   = preg_replace("/\<script(?:.*?)\<\/script\>/", "", $description);
    $amount        = $_POST["amount"];
    $type          = $_POST["type"];
    if ($clientType == "1") {
        $companie = null;
        $contact  = $_POST["contact"];
    } elseif ($clientType == "0") {
        $companie = $_POST["companie"];
        $contact  = null;
    }
    $sql = $conn->prepare("INSERT INTO invoices(invoiceNumber, companyId, contactId, clientType, description, amount, type) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $sql->execute(array($invoiceNumber, $companie, $contact, $clientType, $description, $amount, $type));
}

//Modify an invoice in the database
function modifyInvoice($id)
{
    if ($_SESSION['level'] != "3") {
        header('location: /cogip/DONT_TRY_TO_HACK_ME');
        return;
    }

    global $conn;
    $invoiceNumber = $_POST["invoiceNumber"];
    $clientType    = $_POST["clientType"];
    $description   = $_POST["description"];
    $description   = preg_replace("/\<script(?:.*?)\<\/script\>/", "", $description);
    $amount        = $_POST["amount"];
    $type          = $_POST["type"];
    if ($clientType == "1") {
        $companie = null;
        $contact  = $_POST["contact"];
    } elseif ($clientType == "0") {
        $companie = $_POST["companie"];
        $contact  = null;
    }
    $sql = $conn->prepare("UPDATE invoices SET invoiceNumber = ?, companyId = ?, contactId = ?, clientType = ?, description = ?, amount = ?, type = ? WHERE ID = ?");
    $sql->execute(array($invoiceNumber, $companie, $contact, $clientType, $description, $amount, $type, $id));
}

function showLatestsInvoices()
{
    global $conn;
    $sql = $conn->prepare("SELECT invoices.*, companies.name companyName, contacts.firstname contactFirst, contacts.lastname contactLast FROM invoices LEFT JOIN companies ON invoices.clientType = 0 AND invoices.companyId = companies.id LEFT JOIN contacts ON invoices.clientType = 1 AND invoices.contactId = contacts.id ORDER BY invoices.createdAt DESC LIMIT 5");
    $sql->execute();
    $showLatestsInvoices = $sql->fetchAll();
    return $showLatestsInvoices;
}

//data for contact select input
function selectContacts()
{
    global $conn;
    $sql = $conn->prepare("SELECT firstname, lastname, id FROM contacts ORDER BY lastname ASC");
    $sql->execute();
    $contacts = $sql->fetchAll();
    return $contacts;
}

//data for companie select input
function selectCompanies()
{
    global $conn;
    $sql = $conn->prepare("SELECT name, id FROM companies ORDER BY name ASC");
    $sql->execute();
    $companies = $sql->fetchAll();
    return $companies;
}

//id of the last invoice
function lastIdInvoice()
{
    global $conn;
    $sql = $conn->prepare("SELECT id FROM invoices ORDER BY id DESC LIMIT 1");
    $sql->execute();
    $lastIdInvoice = $sql->fetch();
    return $lastIdInvoice;
}

//verify data of invoices form
function validationInvoice()
{
    global $verify;
    global $invoice;
    global $invoiceNumberMessage;
    global $amountMessage;
    global $typeMessage;
    global $clientTypeMessage;
    global $contactMessage;
    global $companieMessage;
    global $descriptionMessage;

    $invoiceNumber = $_POST["invoiceNumber"];
    $clientType    = $_POST["clientType"];
    $description   = $_POST["description"];
    $amount        = $_POST["amount"];
    $type          = $_POST["type"];
    if ($clientType == "1") {
        $companie = null;
        $contact  = $_POST["contact"];
    } elseif ($clientType == "0") {
        $companie = $_POST["companie"];
        $contact  = null;
    }

    $invoice['invoiceNumber'] = $invoiceNumber;
    $invoice['amount']        = $amount;
    $invoice['type']          = $type;
    $invoice['clientType']    = $clientType;
    $invoice['contactId']     = $contact;
    $invoice['companyId']     = $companie;
    $invoice['description']   = $description;
    $invoiceNumberTemplate    = "COG" . date('Y') . "-";
    if (!strstr($invoiceNumber, $invoiceNumberTemplate)) {
        $verify = false;

        $invoiceNumberMessage = "Please enter an invoice number with this format " . $invoiceNumberTemplate;
    }
    if (is_numeric($amount) == false) {
        $verify = false;

        $amountMessage = "Please enter a number ";
    }
    if (is_numeric($type) == false) {
        $verify = false;

        $typeMessage = "Please select a type of invoice";
    }
    if (is_numeric($clientType) == false) {
        $verify = false;

        $clientTypeMessage = "Please select a type of client";
    }
    if (is_numeric($contact) == false && !is_null($contact)) {
        $verify = false;

        $contactMessage = "Please select a contact";
    }
    if (is_numeric($companie) == false && !is_null($companie)) {
        $verify = false;

        $companieMessage = "Please select a companie";
    }
    $description = preg_replace("/\<script(?:.*?)\<\/script\>/", "", $description);
    if ($description == "") {
        $verify = false;

        $descriptionMessage = "Please enter a description";
    }
}