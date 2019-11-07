<?php
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
        global $verify;
        $verify = TRUE;
        validationInvoice();
        global $invoice;
        global $invoiceNumberMessage;
        global $amountMessage;
        global $typeMessage;
        global $clientTypeMessage;
        global $contactMessage;
        global $companieMessage;
        global $descriptionMessage;

        if ($verify == TRUE) {
            addInvoice();
            header('Location: /cogip/invoices?valide=0');
        } else {
            $companies = selectCompanies();
            $contacts = selectContacts();
            require "views/InvoiceAddView.php";
        }
    } else {
        $companies = selectCompanies();
        $contacts = selectContacts();
        $lastId = lastIdInvoice();
        $lastId = $lastId['id'] + 1;
        require "views/InvoiceAddView.php";
    }
}
function updateInvoice($id)
{
    require "models/InvoiceModel.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $verify = TRUE;
        validationInvoice();
        if ($verify == TRUE) {
            modifyInvoice($id);
            header('Location: /cogip/invoices?valide=1');
        } else {
            require "views/InvoiceAddView.php";
        }
    } else {
        $companies = selectCompanies();
        $contacts = selectContacts();
        $invoice    = getInvoice($id);
        require "views/InvoiceAddView.php";
    }
}
