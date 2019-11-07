<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
echo $company
?>

<div class="container col-8 border example hoverable">
    <div class="black white-text">
    <h1 class="text-center"><strong>Company:</strong><?php echo $company['name'];?></h1>
    <p><strong>Company Name : </strong><?php echo $company['name'];?></p>
    <p><strong>Vat number : </strong><?php echo $company['vat'];?></p>
    <p><strong>Role: </strong><?php echo $company['role'];?></p>
    <p><strong>Country: </strong><?php echo $company['country'];?></p>
    <p>
    <a href="../companies">Return to companies</a> | 
    
    <?php if ($_SESSION['level'] == 3) : ?>
        |
        <a href="../companies/update/<?php echo $id; ?>">Modify <i class="fas fa-lg fa-edit"></i></a> |
        <span class="delete pointer toggleModal" data-toggle="modal" data-target="#deleteModal" data-itemid="<?=$company['id'];?>"data-itemname="<?=$company['name']?>" data-item="companies">Delete <i class="fas fa-lg fa-trash-alt pointer"></i></span>
        
    <?php endif ?>

    
   
    </p>
</div>


</div>
<?php
// Inclure Footer ...
include "components/scripts.php";
include "components/footer.php";
?>