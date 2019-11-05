<?php
require "components/header.php";
require "components/navbar.php";

?>

<div class="container">
    <a href="/cogip/invoices/create"><button type="button" class="btn btn-outline-danger waves-effect"><i class="fas fa-plus-circle"></i> Add an invoice</button></a>
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
                <th class="th-sm">View
                </th>
                <th class="th-sm">Modify
                </th>
                <th class="th-sm">Delete
                </th>
            </tr>
        </thead>
        <tbody>




            <?php
            $invoicescomp = $invoices['0'];
            $invoicescont = $invoices['1'];

            foreach ($invoicescomp as $invoice) :
                $date = explode(" ", $invoice['createdAt']);
                ?>
                <tr id="<?= $invoice['id'] ?>" class="click hoverable">
                    <td><?= htmlspecialchars($date[0]) ?></td>
                    <td><?= htmlspecialchars($invoice['invoiceNumber']) ?></td>
                    <td><?= htmlspecialchars($invoice['name']) ?></td>
                    <td><?= htmlspecialchars($invoice['amount'] . "€") ?></td>
                    <td><?= ($invoice['type'] == 0) ? "OUT" : "IN" ?></td>
                    <td><a href="/cogip/invoices/<?= htmlspecialchars($invoice['id']) ?>">Voir</a></td>
                    <td>Boutton modifier</td>
                    <td><button type="button" class="btn btn-primary" invoiceNumber="<?= htmlspecialchars($invoice['invoiceNumber']) ?>" invoiceId="<?= htmlspecialchars($invoice['id']) ?>" data-toggle="modal" data-target="#basicExampleModal">
                            Launch demo modal
                        </button></td>
                </tr>



            <?php endforeach;

            foreach ($invoicescont as $invoice) :
                $date = explode(" ", $invoice['createdAt']);
                ?>
                <tr id="<?= $invoice['id'] ?>" class="click hoverable">
                    <td><?= htmlspecialchars($date[0]) ?></td>
                    <td><?= htmlspecialchars($invoice['invoiceNumber']) ?></td>
                    <td><?= htmlspecialchars($invoice['lastname']) ?><?= " " ?><?= htmlspecialchars($invoice['firstname']) ?></td>
                    <td><?= htmlspecialchars($invoice['amount'] . "€") ?></td>
                    <td><?= ($invoice['type'] == 0) ? "OUT" : "IN" ?></td>
                    <td><a href="/cogip/invoice/<?= htmlspecialchars($invoice['id']) ?>">Voir</a></td>
                    <td>Boutton modifier</td>
                    <td><button type="button" class="btn btn-primary" invoiceNumber="<?= htmlspecialchars($invoice['invoiceNumber']) ?>" invoiceId="<?= htmlspecialchars($invoice['id']) ?>" data-toggle="modal" data-target="#basicExampleModal">
                            Launch demo modal
                        </button></td>
                </tr>

            <?php endforeach ?>





        </tbody>
        <tfoot>
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
                <th class="th-sm">View
                </th>
                <th class="th-sm">Modify
                </th>
                <th class="th-sm">Delete
                </th>
            </tr>
        </tfoot>
    </table>

</div>
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the invoice <?= htmlspecialchars($invoice['invoiceNumber']) ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php

require "components/scripts.php";
require "static/js/invoiceScript.php";
require "components/footer.php";
