<?php
echo $id;

function showInvoices()
{
    require("models/InvoiceModel.php");
    $invoices = getInvoices();
    require("views/InvoicesView.php");
}

function showInvoiceId($id)
{
    require("models/InvoiceModel.php");
    $invoice = getInvoice($id);
    require("views/InvoiceView.php");
}
