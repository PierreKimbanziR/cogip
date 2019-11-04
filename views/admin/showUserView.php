<?php
include "components/header.php";
include "components/navbar.php";
?>
<div class="container">

    <h1 class="text-center">User info</h1>
    <div class="container d-flex justify-content-center">
        <div class="row d-flex justify-content-center col-12 col-md-5 py-3 border shadow">
            <div class="">
                <div class="contact-box text-center">
                    <img alt="image" class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    <h3 class="m-b-xs"><strong><?=$user['firstname'] . ' ' . $user['lastname']?></strong></h3>

                    <div class="font-bold"><?=$user['function']?></div>
                    <address class="m-t-md">
                        <strong>COGIP</strong><br>
                        username : <?=$user['username']?><br>
                        email : <?=$user['email']?><br>
                        User since : <?=$user['createdAt']?><br>
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "components/scripts.php";
include "components/footer.php";