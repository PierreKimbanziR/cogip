<?php

function showInvoices()
{
    require("../config/db.php");
    require("../models/InvoiceModel.php");
    $invoices = getInvoices();
    require("../views/InvoicesView.php");
}
