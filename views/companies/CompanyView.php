<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container col-8 border example hoverable">
    <div class="black white-text">
    <h1 class="text-center"><strong>Company:</strong><?php echo $company['companyname'];?></h1>
    <p><strong>Company Name : </strong><?php echo $company['companyname'];?></p>
    <p><strong>Vat number : </strong><?php echo $company['vatnumber'];?></p>
    <p><strong>Invoices: </strong><?php echo $company['invoices'];?></p>
    <p><strong>Contacts: </strong><?php echo $company['contacts'];?></p>
</div>

<?php
// Inclure Footer ...
include "components/footer.php";
?>