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
    $invoice = getInvoice($id);
    require "views/invoices/InvoiceView.php";
}

function createInvoice()
{
    $page_title = "Add Invoice";
    require "models/InvoiceModel.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        global $verify;
        $verify = true;
        validationInvoice();
        global $invoice;
        global $invoiceNumberMessage;
        global $amountMessage;
        global $typeMessage;
        global $clientTypeMessage;
        global $contactMessage;
        global $companieMessage;
        global $descriptionMessage;

        if ($verify == true) {
            addInvoice();
            header('Location: /cogip/invoices?valide=0');
        } else {
            $companies = selectCompanies();
            $contacts  = selectContacts();
            require "views/invoices/InvoiceAddView.php";
        }
    } else {
        $companies = selectCompanies();
        $contacts  = selectContacts();
        $lastId    = lastIdInvoice();
        $lastId    = $lastId['id'] + 1;
        require "views/invoices/InvoiceAddView.php";
    }
}
function updateInvoice($id)
{
    if ($_SESSION['level'] != "3") {
        header('location: /cogip/DONT_TRY_TO_HACK_ME');
        return;
    }

    $page_title = "Update Invoice";
    require "models/InvoiceModel.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        global $verify;
        $verify = true;
        validationInvoice();
        global $invoice;
        global $invoiceNumberMessage;
        global $amountMessage;
        global $typeMessage;
        global $clientTypeMessage;
        global $contactMessage;
        global $companieMessage;
        global $descriptionMessage;

        if ($verify == true) {
            modifyInvoice($id);
            header('Location: /cogip/invoices?valide=1');
        } else {
            $companies = selectCompanies();
            $contacts  = selectContacts();
            require "views/invoices/InvoiceAddView.php";
        }
    } else {
        $titre     = "1";
        $companies = selectCompanies();
        $contacts  = selectContacts();
        $invoice   = getInvoice($id);
        require "views/invoices/InvoiceAddView.php";
    }
}

function deleteInvoice($id)
{
    if ($_SESSION['level'] != "3") {
        header('location: /cogip/DONT_TRY_TO_HACK_ME');
        return;
    }

    $page_title = "Show Invoices";
    require "models/InvoiceModel.php";
    $delete   = dropInvoice($id);
    $invoices = getInvoices();
    require "views/invoices/InvoicesView.php";
}
