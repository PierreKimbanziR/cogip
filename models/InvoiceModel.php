<?php


//Show all invoices
function getInvoices()
{
    include("config/db.php");
    $sql = $conn->prepare("SELECT invoiceNumber, description, createdAt FROM invoices ORDER BY createdAt ASC");
    $sql->execute();
    $getInvoices = $sql->fetchAll();
    return $getInvoices;
}

//Show an invoice
function getInvoice($invoiceID)
{
    include("config/db.php");
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
{ }

//Modify an invoice in the database
function modifyInvoice($invoiceNumber)
{ }
