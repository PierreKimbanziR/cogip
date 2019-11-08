<?php
require "components/header.php";
require "components/navbar.php";

$invoicescomp = $invoices['0'];
$invoicescont = $invoices['1'];

?>
<div class="container">
    <h1 class="text-center">Invoices</h1>
    <?php if (isset($_GET['valide']) && $_GET['valide'] == "0"): ?>
    <div class="alert alert-success" role="alert">
        Invoice added !
    </div>
    <?php endif?>
    <?php if (isset($_GET['valide']) && $_GET['valide'] == "1"): ?>
    <div class="alert alert-success" role="alert">
        Invoice modified !
    </div>
    <?php endif?>
    <a href="/cogip/invoices/create"><button type="button" class="btn cogipBtn waves-effect">
            <i class="fas fa-plus-circle"></i> Add an invoice</button>
    </a>
    <div class="table-responsive col-12">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead class="grey darken-3 white-text">
                <tr>
                    <th class="th-sm">Created At
                    </th>
                    <th class="th-sm">Invoice number
                    </th>
                    <th class="th-sm">Client
                    </th>
                    <th class="th-sm">Amount
                    </th>
                    <th class="th-sm">Type
                    </th>
                    <th class="th-sm">Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invoicescomp as $invoice): ?>
                <tr id="<?=$invoice['id']?>" class="hoverable">
                    <td><?=htmlspecialchars(explode(" ", $invoice['createdAt'])[0])?></td>
                    <td><?=htmlspecialchars($invoice['invoiceNumber'])?></td>
                    <td><?=htmlspecialchars($invoice['name'])?></td>
                    <td><?=($invoice['type'] == 1) ? "- " : "+ "?><?=htmlspecialchars($invoice['amount'] . "€")?></td>
                    <td><?=($invoice['type'] == 1) ? "OUT" : "IN"?></td>
                    <td
                        class="text-center d-flex <?=($_SESSION['level'] > 2) ? 'justify-content-around' : 'justify-content-center'?>">
                        <a href="/cogip/invoices/<?=htmlspecialchars($invoice['id'])?>">
                            <i class="far fa-lg fa-eye"></i>
                        </a>
                        <i data-printid="<?=$invoice['id']?>" class="fas fa-lg fa-print pointer"></i>
                        <?php if (($_SESSION['level'] > 2)): ?>
                        <a href="/cogip/invoices/update/<?=htmlspecialchars($invoice['id'])?>">
                            <i class="fas fa-lg fa-edit"></i>
                        </a>
                        <i class="fas fa-lg fa-trash-alt pointer toggleModal" data-itemid="<?=$invoice['id']?>"
                            data-itemname="<?=$invoice['invoiceNumber']?>" data-item="invoices" data-toggle="modal"
                            data-target="#deleteModal"></i>
                        <?php endif?>
                    </td>
                </tr>
                <?php endforeach;?>
                <?php foreach ($invoicescont as $invoice): ?>
                <tr id="<?=$invoice['id']?>" class="hoverable">
                    <td><?=htmlspecialchars(explode(" ", $invoice['createdAt'])[0])?></td>
                    <td><?=htmlspecialchars($invoice['invoiceNumber'])?></td>
                    <td><?=htmlspecialchars($invoice['lastname'])?><?=" "?><?=htmlspecialchars($invoice['firstname'])?>
                    </td>
                    <td><?=($invoice['type'] == 1) ? "- " : "+ "?><?=htmlspecialchars($invoice['amount'] . "€")?></td>
                    <td><?=($invoice['type'] == 0) ? "OUT" : "IN"?></td>
                    <td
                        class="text-center d-flex <?=($_SESSION['level'] > 2) ? 'justify-content-around' : 'justify-content-center'?>">
                        <a href="/cogip/invoices/<?=htmlspecialchars($invoice['id'])?>">
                            <i class="far fa-lg fa-eye"></i>
                        </a>
                        <i data-printid="<?=$invoice['id']?>" class="fas fa-lg fa-print pointer"></i>
                        <?php if (($_SESSION['level'] > 2)): ?>
                        <a href="/cogip/invoices/update/<?=htmlspecialchars($invoice['id'])?>">
                            <i class="fas fa-lg fa-edit"></i>
                        </a>
                        <i class="fas fa-lg fa-trash-alt pointer toggleModal" data-itemid="<?=$invoice['id']?>"
                            data-itemname="<?=$invoice['invoiceNumber']?>" data-item="invoices" data-toggle="modal"
                            data-target="#deleteModal">
                        </i><?php endif?>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</div>

<?php
require "components/scripts.php";
require "static/js/invoiceScript.php";
require "components/footer.php";