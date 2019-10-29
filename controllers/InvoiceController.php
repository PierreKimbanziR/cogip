<?php
require("../components/header.php");
require("../components/navbar.php");
require("../models/InvoiceModel.php");
$invoices = getInvoices();
require("../views/InvoicesView.php");
require("../components/footer.php");
