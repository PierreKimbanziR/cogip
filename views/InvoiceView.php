<?php

require "components/header.php";
require "components/navbar.php";
$date = explode(" ", $invoice['createdAt']);
?>
<div class="container">
    <a href="/cogip/invoices"><button type="button" class="btn btn-outline-danger waves-effect"><i class="fas fa-angle-double-left"></i> Return to Invoices</button></a>
</div>
<div class="container p-5 mt-5 mb-5 border border-light shadow">
    <div class="row d-flex align-items-end justify-content-between mb-5">
        <div class="col-md-2 ">
            <b>COGIP</b><br>
            Rue de BEcode 666<br>
            6000 Bruxelles
        </div>
        <div class="col-md-2">
            <img src="/cogip/static/img/cogip-logo2.png" width="80%">
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-3">
            <?php if ($invoice['firstname'] != NULL) {
                ?>
                Name : <?= htmlspecialchars($invoice['lastname']) ?> <?= htmlspecialchars($invoice['firstname']) ?><br>
                Mail : <?= htmlspecialchars($invoice['email']) ?><br>
                Telephone : <?= htmlspecialchars($invoice['telephone']) ?>
            <?php
            } else { ?>
                Company : <?= htmlspecialchars($invoice['name']) ?><br>
                Country : <?= htmlspecialchars($invoice['country']) ?><br>
                VAT : <?= htmlspecialchars($invoice['vat']) ?>
            <?php } ?>
        </div>
        <div class="col-md-3 offset-6">
            <?= $date[0] ?><br>
            Invoice n° <?= htmlspecialchars($invoice['invoiceNumber']) ?><br>
            Type : <?= ($invoice['type'] == 0) ? "OUT" : "IN" ?>

        </div>
    </div>
    <div class="row pt-5 pb-5">
        <div class="col-12"><?= htmlspecialchars($invoice['description']) ?></div>
    </div>
    <div class="row d-flex pt-5 justify-content-between">
        <div class="col-3">
            <img src="/cogip/static/img/code-barre.png" height="100px">
        </div>
        <div class="col-4 text-right">
            <h1> <?= htmlspecialchars($invoice['amount'] . ",00 €") ?></h1>
        </div>
    </div>

</div> <?php
        require "components/scripts.php";

        require "components/footer.php";
