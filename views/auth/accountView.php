<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container">
    <h1 class="text-center">My Account</h1>
    <div class="container d-flex justify-content-center">
        <div class="row d-flex justify-content-center col-12 col-md-5 py-3 border shadow">
            <div class="">
                <div class="contact-box text-center">
                    <!-- SESSION ADMIN -->
                    <?php if ($_SESSION['level'] == 3): ?>
                    <a href="/cogip/admin/users/update/<?=$_SESSION['id']?>">Modify <i class="fas fa-lg fa-edit"></i></a>
                    <?php endif?>
                    <!-- FIN SESSION ADMIN -->
                    <hr>
                    <img alt="image" class="rounded-circle" src="../design/img/avatar.png">
                    <h3 class="m-b-xs"><strong><?=$contact['firstname'] . ' ' . $contact['lastname']?></strong></h3>

                    <div class="font-bold"><?=$contact['telephone']?></div>
                    <address class="m-t-md">
                        Username : <?=$user['username']?><br>
                        Name : <?=$user['firstname'] . ' ' . $user['lastname']?><br>
                        Job Title : <?=$user['jobTitle']?><br>
                        Email : <?=$user['email']?><br>
                        Contact since : <?=$user['createdAt']?><br>
                    </address>
                    <button onclick="window.location.href = '/cogip/auth/reset-password'" class="btn btn-outline-danger waves-effect">Change password</button>
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