<?php
require "components/header.php";
require "components/navbar.php";

?>

<div class="container">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
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
            </tr>
        </tfoot>
    </table>

</div>
<?php require "components/scripts.php" ?>
<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable({
            "order": [
                [1, "asc"]
            ]
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script>
    var linkTo = (id) => {
        //console.log(id);
        document.location = `/cogip/invoices/${id}`;
    }

    Array.from(document.querySelectorAll('tr.click')).forEach($btn => {
        console.log($btn);
        $btn.addEventListener('click', () => (linkTo($btn.id), false));
    });
</script>




<?php
require "components/footer.php";
