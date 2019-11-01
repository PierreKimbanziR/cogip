<?php
echo $id;

function showInvoices()
{
    require "models/InvoiceModel.php";
    $invoices   = getInvoices();
    $page_title = 'Invoices';
    require "views/InvoicesView.php";
}

function showInvoiceId($id)
{
    require "models/InvoiceModel.php";
    $invoice    = getInvoice($id);
    $page_title = 'Invoices';
    require "views/InvoiceView.php";
}