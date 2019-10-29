<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container col-8 border">
    <h1 class="text-center"><strong>Contact :</strong><?php echo $contact['firstname'].' '.$contact['lastname'];?></h1>
    <p><strong>Contact : </strong><?php echo $contact['firstname'].' '.$contact['lastname'];?></p>
    <p><strong>Company : </strong><?php echo $contact['workingAt'];?></p>
    <p><strong>Email : </strong><?php echo $contact['email'];?></p>
    <p><strong>Phone : </strong><?php echo $contact['telephone'];?></p>
</div>

<?php
// Inclure Footer ...
include "components/footer.php";
?>