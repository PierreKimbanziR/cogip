<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container col-8 border example hoverable">
    <div class="black white-text">
    <h1 class="text-center"><strong>Company:</strong><?php echo $company['name'];?></h1>
    <p><strong>Company Name : </strong><?php echo $company['name'];?></p>
    <p><strong>Vat number : </strong><?php echo $company['vat'];?></p>
    <p><strong>Role: </strong><?php echo $company['role'];?></p>
    <p><strong>Country: </strong><?php echo $company['country'];?></p>
    <p><a href="../companies">Return to companies</p>
</div>

<?php
// Inclure Footer ...
include "components/footer.php";
?>