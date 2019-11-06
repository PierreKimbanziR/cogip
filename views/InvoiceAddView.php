<?php
require "components/header.php";
require "components/navbar.php";

?>
<div class="container">
    <form method="POST" action="">
        <div class="form-group row">
            <div class="col-sm-12 col-md-4">
                <label for="invoiceNumber" class="grey-text font-weight-light">Invoice Number</label>
                <input type="text" id="invoiceNumber" name="invoiceNumber" class="form-control" value="COG<?= date('Y') ?>-<?= htmlspecialchars($lastId) ?>">
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="amount" class="grey-text font-weight-light">Amount</label>
                <input type="text" id="amount" name="amount" class="form-control">
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="amount" class="grey-text font-weight-light">Type</label>
                <select name="type" id="type" class="custom-select">
                    <option value="">Please select</option>
                    <option value="0">IN</option>
                    <option value="1">OUT</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="clientType" class="grey-text font-weight-light">Client Type</label>
            <select name="clientType" id="clientType" class="custom-select">
                <option value="">Please select</option>
                <option value="1">Contact</option>
                <option value="0">Companie</option>
            </select>
        </div>
        <div class="form-group" id="companieList">
            <label for="companie" class="grey-text font-weight-light">Companie</label>
            <select name="companie" id="companie" class="custom-select selectSearch">
                <option value="">Please select</option>
                <?php
                foreach ($companies as $companie) :
                    ?>
                    <option value="<?= htmlspecialchars($companie['id']) ?>"><?= htmlspecialchars($companie['name']) ?></option>
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
                    <option value="<?= htmlspecialchars($contact['id']) ?>"><?= htmlspecialchars($contact['lastname']) ?> <?= htmlspecialchars($contact['firstname']) ?></option>
                <?php endforeach;
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description" class="grey-text font-weight-light">Description</label>
            <textarea class="form-control" id="description" rows="7" name="description"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-danger waves-effect" value="Add the invoice">
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