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

function deleteInvoice($id)
{
    require "models/InvoiceModel.php";
    $delete = dropInvoice($id);
    $invoices   = getInvoices();
    $page_title = 'Invoices';
    require "views/InvoicesView.php";
}
function createInvoice()
{
    require "models/InvoiceModel.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        addInvoice();
        showInvoices();
    }
}
