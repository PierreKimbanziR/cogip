<?php
require("components/header.php");
require("components/navbar.php");




?>
<div class="container">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Created At
                </th>
                <th class="th-sm">Invoice number
                </th>
                <th class="th-sm">Amount
                </th>
                <th class="th-sm">Type
                </th>
            </tr>
        </thead>
        <tbody>



            <?php foreach ($invoices as $invoice) :
                $date = explode(" ", $invoice['createdAt']);
                ?>
                <tr>
                    <td><?= htmlspecialchars($date[0]) ?></td>
                    <td><?= htmlspecialchars($invoice['invoiceNumber']) ?></td>
                    <td><?= htmlspecialchars($invoice['amount'] . "€") ?></td>
                    <td><?= ($invoice['type'] == 0) ? "OUT" : "IN" ?></td>
                </tr>

            <?php endforeach ?>





        </tbody>
        <tfoot>
            <tr>
                <th class="th-sm">Created At
                </th>
                <th class="th-sm">Invoice number
                </th>
                <th class="th-sm">Amount
                </th>
                <th class="th-sm">Type
                </th>
            </tr>
        </tfoot>
    </table>
</div>
<?php require("components/scripts.php") ?>
<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>




<?php
require("components/footer.php");
