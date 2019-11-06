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
    <p>
    <a href="../companies">Return to companies</a> | 

    <?php if ($_SESSION['level'] == 3) : ?>
        
    <a href="../companies/update/<?php echo $id; ?>">Modify</a> | 
    <span data-toggle="modal" data-target="#deleteModal" data-itemid="<?= $id;?>" data-itemname="<?= $company['name'] ?>" data-item="companies">Delete</span>
    </p>
       
    <?php endif ?>

</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete <span class="font-weight-bold" id="deleteModalName"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <form id="deleteModalAction" action="" method="post">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
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