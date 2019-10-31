<?php

require "components/header.php";
require "components/navbar.php";
$date = explode(" ", $invoice['createdAt']);
?>
<div class="container pt-5">
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
            Je remplirais les infos du client plus tard
        </div>
        <div class="col-md-3 offset-6">
            <?= $date[0] ?><br>
            Facture n° <?= htmlspecialchars($invoice['invoiceNumber']) ?><br>
            Type : <?= ($invoice['type'] == 0) ? "OUT" : "IN" ?>

        </div>
    </div>
    <div class="row pt-5">
        <div class="col-12"><?= htmlspecialchars($invoice['description']) ?></div>
    </div>
    <div class="row d-flex pt-5 justify-content-between">
        <div class="col-3">
            <img src="/cogip/static/img/code-barre.png" height="100px">
        </div>
        <div class="col-2">
            <?= htmlspecialchars($invoice['amount'] . "€") ?>
        </div>
    </div>

</div> <?php


        require "components/footer.php";
