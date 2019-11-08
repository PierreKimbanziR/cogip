<?php
function showInvoices()
{
    $page_title = "Show Invoices";
    require "models/InvoiceModel.php";
    $invoices   = getInvoices();
    $page_title = 'Invoices';
    require "views/invoices/InvoicesView.php";
}

function showInvoiceId($id)
{
    $page_title = "Show Invoice";
    require "models/InvoiceModel.php";
    $invoice    = getInvoice($id);
    require "views/invoices/InvoiceView.php";
}

function deleteInvoice($id)
{
    $page_title = "Show Invoices";
    require "models/InvoiceModel.php";
    $delete = dropInvoice($id);
    $invoices   = getInvoices();
    require "views/invoices/InvoicesView.php";
}
function createInvoice()
{
    $page_title = "Add Invoice";
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
            require "views/invoices/InvoiceAddView.php";
        }
    } else {
        $companies = selectCompanies();
        $contacts = selectContacts();
        $lastId = lastIdInvoice();
        $lastId = $lastId['id'] + 1;
        require "views/invoices/InvoiceAddView.php";
    }
}
function updateInvoice($id)
{
    $page_title = "Update Invoice";
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
            modifyInvoice($id);
            header('Location: /cogip/invoices?valide=1');
        } else {
            $companies = selectCompanies();
            $contacts = selectContacts();
            require "views/invoices/InvoiceAddView.php";
        }
    } else {
        $titre = "1";
        $companies = selectCompanies();
        $contacts = selectContacts();
        $invoice    = getInvoice($id);
        require "views/invoices/InvoiceAddView.php";
    }
}
