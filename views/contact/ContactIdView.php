<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
$email = $contact['email'];
?>

<div class="container">
    <h1 class="text-center">Contact Info</h1>
    <div class="container d-flex justify-content-center">
        <div class="row d-flex justify-content-center col-12 col-md-5 py-3 border shadow">
            <div class="">
                <div class="contact-box text-center">
                    <a href="/cogip/contacts">Return to contacts</a>

                    <!-- SESSION ADMIN -->
                    <?php if ($_SESSION['level'] == 3): ?>
                    |
                    <a href="/cogip/contacts/update/<?php echo $id; ?>">Modify <i class="fas fa-lg fa-edit"></i></a> |
                    <span class="delete pointer toggleModal" data-toggle="modal" data-target="#deleteModal"
                        data-itemid="<?=$id;?>" data-itemname="<?=$contact['firstname'] . ' ' . $contact['lastname']?>"
                        data-item="contacts">Delete <i class="fas fa-lg fa-trash-alt pointer"></i></span>

                    <?php endif?>
                    <!-- FIN SESSION ADMIN -->
                    <hr>
                    <img alt="image" class="rounded-circle" src="/cogip/static/img/avatar.png">
                    <h3 class="m-b-xs"><strong><?=$contact['firstname'] . ' ' . $contact['lastname']?></strong></h3>

                    <div class="font-bold"><?=$contact['telephone']?></div>
                    <address class="m-t-md">
                        Company : <?=$contact['companyName']?><br>
                        email :
                        <?php echo "<a href='mailto:" . $contact['email'] . "'>" . $contact['email'] . "</a>"; ?><br>
                        Contact since : <?=$contact['createdAt']?><br>
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
// Inclure Footer ...
include "components/scripts.php";
include "components/footer.php";
?>