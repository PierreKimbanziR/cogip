<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
$email=$contact['email'];
?>

<div class="container col-8 border ">
    <h1 class="text-center "><strong>Contact :</strong><?php echo $contact['firstname'].' '.$contact['lastname'];?></h1>
    <p><strong>Contact : </strong><?php echo $contact['firstname'].' '.$contact['lastname'];?></p>
    <p><strong>Company : </strong>
    
    <a href="../companies/<?php echo $contact['workingAt'];?>">
    <?php echo $contact['companyName'];?>
    
    </a></p>
    
    <p><strong>Email : </strong><?php echo "<a href='mailto:$email'>$email</a>"; ?></p>
    <p><strong>Phone : </strong><?php echo $contact['telephone'];?></p>

</div>

<?php
// Inclure Footer ...
include "components/footer.php";

?>

