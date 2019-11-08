<?php
require "components/header.php";
require "components/navbar.php";
global $invoiceNumberMessage;
global $amountMessage;
global $typeMessage;
global $clientTypeMessage;
global $contactMessage;
global $companieMessage;
global $descriptionMessage;
?>
<div class="container">
    <?php if ($titre == "1") { ?> <h1 class="text-center">Update an invoice</h1> <?php } else {
                                                                                        ?> <h1 class="text-center">Add an invoice</h1> <?php   } ?>
    <form method="POST" action="">
        <div class="form-row">
            <div class="col-sm-12 col-md-4 <?php echo (!empty($invoiceNumberMessage)) ? 'has-error' : '' ?>">
                <label for="invoiceNumber">Invoice Number</label>
                <input type="text" id="invoiceNumber" name="invoiceNumber" class="form-control" <?php if (!isset($invoice['invoiceNumber'])) { ?> value="COG<?= date('Y') ?>-<?= htmlspecialchars($lastId) ?>" <?php } else {
                                                                                                                                                                                                                    ?> value="<?= htmlspecialchars($invoice['invoiceNumber']) ?>" <?php   } ?>>
                <span class="help-block"><?= $invoiceNumberMessage ?></span>
            </div>
            <div class="col-sm-12 col-md-4 form-group">

                <label for="amount">Amount</label>
                <div class="input-group mb-3 <?php echo (!empty($amountMessage)) ? 'has-error' : '' ?>">
                    <div class="input-group-prepend">
                        <span class="input-group-text">€</span>
                    </div>
                    <input type="number" name="amount" class="form-control" <?php if (isset($invoice['amount'])) { ?> value="<?= htmlspecialchars($invoice['amount']) ?>" <?php } ?>>
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div> <span class="help-block"><?= $amountMessage ?></span>
            </div>
            <div class="col-sm-12 col-md-4 <?php echo (!empty($typeMessage)) ? 'has-error' : '' ?>">
                <label for="type">Type</label>
                <select name="type" id="type" class="custom-select">
                    <option value="">Please select</option>
                    <option value="0" <?php
                                        if (isset($invoice['type']) && $invoice['type'] == "0") { ?> selected <?php } ?>>IN</option>
                    <option value="1" <?php
                                        if (isset($invoice['type']) && $invoice['type'] == "1") { ?> selected <?php } ?>>OUT</option>
                </select>
                <span class="help-block"><?= $typeMessage ?></span>
            </div>
        </div>
        <div class="form-group  <?php echo (!empty($clientTypeMessage)) ? 'has-error' : '' ?>">
            <label for="clientType">Client Type</label>
            <select name="clientType" id="clientType" class="custom-select">
                <option value="">Please select</option>
                <option value="1" <?php
                                    if (isset($invoice['clientType']) && $invoice['clientType'] == "1") { ?> selected <?php } ?>>Contact</option>
                <option value="0" <?php
                                    if (isset($invoice['clientType']) && $invoice['clientType'] == "0") { ?> selected <?php } ?>>Companie</option>
            </select>
            <span class="help-block"><?= $clientTypeMessage ?></span>
        </div>
        <div class="form-group  <?php echo (!empty($companieMessage)) ? 'has-error' : '' ?>" id="companieList">
            <label for="companie">Companie</label>
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
            <span class="help-block"><?= $companieMessage ?></span>
        </div>
        <div class="form-group <?php echo (!empty($contactMessage)) ? 'has-error' : '' ?>" id="contactList">
            <label for="contact">Contact</label>
            <select name="contact" id="contact" class="custom-select selectSearch2">
                <option value="">Please select</option>
                <?php
                foreach ($contacts as $contact) :
                    ?>
                    <option value="<?= htmlspecialchars($contact['id']) ?>" <?php
                                                                                if (isset($invoice['clientType']) && $invoice['clientType'] == "1" && $invoice['contactId'] == $contact['id']) { ?> selected <?php } ?>><?= htmlspecialchars($contact['lastname']) ?>
                        <?= htmlspecialchars($contact['firstname']) ?></option>
                <?php endforeach;
                ?>
            </select>
            <span class="help-block"><?= $contactMessage ?></span>
        </div>
        <div class="form-group <?php echo (!empty($descriptionMessage)) ? 'has-error' : '' ?>">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="7" name="description"><?php if (isset($invoice['amount'])) {
                                                                                            echo htmlspecialchars($invoice['description']);
                                                                                        } ?></textarea>
            <span class="help-block"><?= $descriptionMessage ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-danger waves-effect" value="validate">
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