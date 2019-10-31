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
    $sql = $conn->prepare("SELECT * FROM invoices WHERE id = ?");
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