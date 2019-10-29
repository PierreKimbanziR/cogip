<?php
require_once("../config/db.php");

//Show all invoices
function getInvoices()
{
    $sql = $conn->prepare("SELECT invoiceNumber, description, createdAt IN invoices ORDER BY createdAt");
    $sql->execute(array());
    $getInvoices = $sql->fetch();
    return $getInvoices;
}

//Show an invoice
function getInvoice($invoiceID)
{
    $sql = $conn->prepare("SELECT * IN invoices WHERE id = ?");
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
