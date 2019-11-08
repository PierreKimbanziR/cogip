<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";

?>
<div class="container">
    <h1 class="text-center">Company Infos</h1>
    <div class="container d-flex justify-content-center">
        <div class="row d-flex justify-content-center col-12 col-md-5 py-3 border shadow">
            <div class="">
                <div class="contact-box text-center">
                    <a href="/cogip/companies">Return to companies</a>
                    <?php if ($_SESSION['level'] == 3): ?>
                    |
                    <a href="/cogip/companies/update/<?=$id;?>">Modify <i class="fas fa-lg fa-edit"></i></a> |
                    <span class="delete pointer toggleModal" data-toggle="modal" data-target="#deleteModal"
                        data-itemid="<?=$company['id'];?>" data-itemname="<?=$company['name']?>"
                        data-item="companies">Delete <i class="fas fa-lg fa-trash-alt pointer"></i></span>
                    <?php endif?>
                    <hr>
                    <img alt="companyIcon" src="/cogip/static/img/company.png" height="100px">
                    <h3 class="m-b-xs"><strong>Company Name : </strong><?=$company['name'];?></h3>
                    <address class="m-t-md">
                        Vat number : <?=$company['vat'];?><br>
                        Role : <?=($invoice['role'] == 0) ? "Client" : "Provider"?><br>
                        Country : <?=$company['country'];?><br>
                        In collaboration since : <?=explode(" ", $company['createdAt'])[0]?>
                    </address>
                    </p>
                </div>
            </div>
            <?php
// Inclure Footer ...
include "components/scripts.php";
include "components/footer.php";
?>