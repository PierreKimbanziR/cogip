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
    $sql = $conn->prepare("SELECT invoices.invoiceNumber invoiceNumber, invoices.description description, invoices.amount amount, invoices.type type, invoices.createdAt createdAt, contacts.firstname firstname, contacts.lastname lastname, contacts.email email, contacts.telephone telephone, contacts.workingAt workingAt, companies.name name, companies.country country, companies.vat vat FROM invoices LEFT JOIN companies ON invoices.clientType = 0 AND invoices.companyId = companies.id LEFT JOIN contacts ON invoices.clientType = 1 AND invoices.contactId = contacts.id WHERE invoices.id = ?");
    $sql->execute(array($invoiceID));
    $getInvoice = $sql->fetch();
    return $getInvoice;
}

//Delete an invoice from database
function deleteInvoice($invoiceID)
{
    $sql = $conn->prepare("DELETE FROM invoices WHERE id = ?");
    $sql->execute(array($invoiceID));
}

//Add an invoice to the database
function addInvoice($invoiceNumber, $clientID, $clientType, $description, $amount, $type)
{}

//Modify an invoice in the database
function modifyInvoice($invoiceNumber)
{}

function showLatestsInvoices()
{
    global $conn;
    $sql = $conn->prepare("SELECT invoices.*, companies.name companyName, contacts.firstname contactFirst, contacts.lastname contactLast FROM invoices LEFT JOIN companies ON invoices.clientType = 0 AND invoices.companyId = companies.id LEFT JOIN contacts ON invoices.clientType = 1 AND invoices.contactId = contacts.id ORDER BY invoices.createdAt DESC LIMIT 5");
    $sql->execute();
    $showLatestsInvoices = $sql->fetchAll();
    return $showLatestsInvoices;
}