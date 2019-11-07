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
                <a href="../companies">Return to companies</a>
                
    
    
    <?php if ($_SESSION['level'] == 3) : ?>
        |
        <a href="../companies/update/<?php echo $id; ?>">Modify <i class="fas fa-lg fa-edit"></i></a>  |
        <span class="delete pointer toggleModal" data-toggle="modal" data-target="#deleteModal" data-itemid="<?=$company['id'];?>"data-itemname="<?=$company['name']?>" data-item="companies">Delete <i class="fas fa-lg fa-trash-alt pointer"></i></span>
        
    <?php endif ?>
    <hr> 
    <img alt="companyIcon" src="../design/img/company.png" class="rounded-circle">
    <h3 class="m-b-xs"><strong>Company Name : </strong><?php echo $company['name'];?></h3>
    
    <address class="m-t-md">
    Vat number : <?php echo $company['vat'];?><br>
    Role : <?php echo $company['role'];?><br>
    Country : <?php echo $company['country'];?><br>
    In collaboration since : <?php echo $company['createdAt'];?>
    </address>
   

    
   
    </p>
</div>


</div>
<?php
// Inclure Footer ...
include "components/scripts.php";
include "components/footer.php";
?>