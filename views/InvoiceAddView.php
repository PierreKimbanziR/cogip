<?php
require "components/header.php";
require "components/navbar.php";
?>
<div class="container">
<?php if (isset($invoice['invoiceNumber'])) { ?> <h1 class="text-center">Update an invoice</h1> <?php } else {
                                                                                                                                                                ?> <h1 class="text-center">Add an invoice</h1> <?php   } ?>
    <form method="POST" action="">
        <div class="form-group row">
            <div class="col-sm-12 col-md-4">
                <label for="invoiceNumber" class="grey-text font-weight-light">Invoice Number</label>
                <input type="text" id="invoiceNumber" name="invoiceNumber" class="form-control" <?php if (!isset($invoice['invoiceNumber'])) { ?> value="COG<?= date('Y') ?>-<?= htmlspecialchars($lastId) ?>" <?php } else {
                                                                                                                                                                                                                    ?> value="<?= htmlspecialchars($invoice['invoiceNumber']) ?>" <?php   } ?>>
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="amount" class="grey-text font-weight-light">Amount</label>
                <input type="number" id="amount" name="amount" class="form-control" <?php if (isset($invoice['amount'])) { ?> value="<?= htmlspecialchars($invoice['amount']) ?>" <?php } ?>>
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="amount" class="grey-text font-weight-light">Type</label>
                <select name="type" id="type" class="custom-select">
                    <option value="">Please select</option>
                    <option value="0" <?php
                                        if (isset($invoice['type']) && $invoice['type'] == "0") { ?> selected <?php } ?>>IN</option>
                    <option value="1" <?php
                                        if (isset($invoice['type']) && $invoice['type'] == "1") { ?> selected <?php } ?>>OUT</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="clientType" class="grey-text font-weight-light">Client Type</label>
            <select name="clientType" id="clientType" class="custom-select">
                <option value="">Please select</option>
                <option value="1" <?php
                                    if (isset($invoice['clientType']) && $invoice['clientType'] == "1") { ?> selected <?php } ?>>Contact</option>
                <option value="0" <?php
                                    if (isset($invoice['clientType']) && $invoice['clientType'] == "0") { ?> selected <?php } ?>>Companie</option>
            </select>
        </div>
        <div class="form-group" id="companieList">
            <label for="companie" class="grey-text font-weight-light">Companie</label>
            <select name="companie" id="companie" class="custom-select selectSearch">
                <option value="">Please select</option>
                <?php
                foreach ($companies as $companie) :
                    ?>
                    <option value="<?= htmlspecialchars($companie['id']) ?>" <?php
                                                                                    if (isset($invoice['clientType']) && $invoice['clientType'] == "0" && $invoice['companyId'] == $companie['id']) { ?> selected <?php } ?>><?= htmlspecialchars($companie['name']) ?></option>
                <?php endforeach;
                ?>
            </select>
        </div>
        <div class="form-group" id="contactList">
            <label for="contact" class="grey-text font-weight-light">Contact</label>
            <select name="contact" id="contact" class="custom-select selectSearch2">
                <option value="">Please select</option>
                <?php
                foreach ($contacts as $contact) :
                    ?>
                    <option value="<?= htmlspecialchars($contact['id']) ?>" <?php
                                                                                if (isset($invoice['clientType']) && $invoice['clientType'] == "1" && $invoice['contactId'] == $contact['id']) { ?> selected <?php } ?>><?= htmlspecialchars($contact['lastname']) ?> <?= htmlspecialchars($contact['firstname']) ?></option>
                <?php endforeach;
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description" class="grey-text font-weight-light">Description</label>
            <textarea class="form-control" id="description" rows="7" name="description"><?php if (isset($invoice['amount'])) {
                                                                                            echo htmlspecialchars($invoice['description']);
                                                                                        } ?></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-danger waves-effect" <?php if (isset($invoice['invoiceNumber'])) { ?> value="Modify the invoice" <?php } else {
                                                                                                                                                                ?> value="Add the invoice" <?php   } ?>>
        </div>
        
    </form>
</div>


<?php
require "components/scripts.php";
require "static/js/invoiceScript.php";
require "components/footer.php";
?>
<script type="text/javascript">
    $(document).ready(function() {

        $('#companieList').hide();
        $('#contactList').hide();


        if ($('#clientType').val() == "0") {
            $('#companieList').show();
        }
        if ($('#clientType').val() == "1") {
            $('#contactList').show();
        }

        $('select[name="clientType"]').change(function() {
            var valeur = $(this).val();

            if (valeur != '') {
                if (valeur == '1') {
                    $('#contactList').show();
                } else {
                    $('#contactList').hide();
                }
                if (valeur == '0') {
                    $('#companieList').show();
                } else {
                    $('#companieList').hide();
                }
            } else {
                $('#companieList').hide();
                $('#contactList').hide();
            }

        });

    });
</script>