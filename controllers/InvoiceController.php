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
        // if($verify == true){
        addInvoice();
        header('Location: /cogip/invoices?valide=0');
        // }
        /*else{
            require "views/InvoiceAddView.php"
        }*/
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
        // if($verify == true){
        modifyInvoice($id);
        header('Location: /cogip/invoices?valide=1');
        // }
        /*else{
            require "views/InvoiceAddView.php"
        }*/
    } else {
        $companies = selectCompanies();
        $contacts = selectContacts();
        $invoice    = getInvoice($id);
        require "views/InvoiceAddView.php";
    }
}
