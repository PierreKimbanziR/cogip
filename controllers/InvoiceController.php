<?php

function showInvoices()
{
    require("models/InvoiceModel.php");
    $invoices = getInvoices();
    require("views/InvoicesView.php");
}

function showInvoiceId($id)
{
    require("models/InvoiceModel.php");
    $invoices = getInvoice($id);
    require("views/InvoicesView.php");
}
