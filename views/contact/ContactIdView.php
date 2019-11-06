<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
$email = $contact['email'];
?>

<div class="container col-8 border example hoverable ">
    <div class="black white-text">
        <h1 class="text-center "><strong>Contact
                :</strong><?php echo $contact['firstname'] . ' ' . $contact['lastname']; ?></h1>
    </div>
    <p><strong>Contact : </strong><?php echo $contact['firstname'] . ' ' . $contact['lastname']; ?></p>
    <p><strong>Company : </strong>

        <a href="../companies/<?php echo $contact['workingAt']; ?>">
            <?php echo $contact['companyName']; ?>

        </a></p>

    <p><strong>Email : </strong><?php echo "<a href='mailto:$email'>$email</a>"; ?></p>
    <p><strong>Phone : </strong><?php echo $contact['telephone']; ?></p>
    <p>
        <a href="../contacts">Return to contacts</a> |
        <a href="../contacts/update/<?php echo $id; ?>">Modify</a> | 
        <span class="delete pointer" data-toggle="modal" data-target="#deleteModal" data-itemid="<?= $id;?>" data-itemname="<?= $contact['firstname'] . ' ' . $contact['lastname']?>" data-item="contacts">Delete</span></p>

</div>

<!-- Modal PopUP pour signaler que l'on va effacer ID -->
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




<?php
// Inclure Footer ...
include "components/scripts.php";

?>

<script>
$('.delete').click(e => {
    let id = $(e.currentTarget).data('itemid');
    let name = $(e.currentTarget).data('itemname');
    let item = $(e.currentTarget).data('item');
    let link = `/cogip/contacts/delete/${id}`;
    $('#deleteModalName').text(name);
    $('#deleteModalLabel').text("Delete " + item);
    $('#deleteModalAction').attr("action", link);
})
</script>
<?php
include "components/footer.php";

?>