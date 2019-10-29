<?php

function showInvoices()
{

    require("models/InvoiceModel.php");
    $invoices = getInvoices();
    require("views/InvoicesView.php");
}
