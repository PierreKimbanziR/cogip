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
    global $conn;
    $sql = $conn->prepare("DELETE FROM invoices WHERE id = ?");
    $sql->execute(array($invoiceID));
}

//Add an invoice to the database
function addInvoice()
{
    global $conn;
    $invoiceNumber = $_POST["invoiceNumber"];
    $clientType = $_POST["clientType"];
    $description = $_POST["description"];
    $amount = $_POST["amount"];
    $type = $_POST["type"];
    if ($clientType == "1") {
        $companie = NULL;
        $contact = $_POST["contact"];
    } elseif ($clientType == "0") {
        $companie = $_POST["companie"];
        $contact = NULL;
    }
    $sql = $conn->prepare("INSERT INTO invoices(invoiceNumber, companyId, contactId, clientType, description, amount, type) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $sql->execute(array($invoiceNumber, $companie, $contact, $clientType, $description, $amount, $type));
}

//Modify an invoice in the database
function modifyInvoice($id)
{
    global $conn;
    $invoiceNumber = $_POST["invoiceNumber"];
    $clientType = $_POST["clientType"];
    $description = $_POST["description"];
    $amount = $_POST["amount"];
    $type = $_POST["type"];
    if ($clientType == "1") {
        $companie = NULL;
        $contact = $_POST["contact"];
    } elseif ($clientType == "0") {
        $companie = $_POST["companie"];
        $contact = NULL;
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
function validationInvoice(){
    $verify = true;
    
}
