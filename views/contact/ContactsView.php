<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container">
    <h1 class="text-center">List of contacts</h1>
    <div class="table-responsive">

        <table id="searchShow" class="table table-striped table-bordered table-sm">

            <!-- SESSION ADMIN -->
            <?php if ($_SESSION['level'] == 3): ?>

            <a href="/cogip/contacts/create"><button type="button" class="btn btn-outline-danger waves-effect"><i
                        class="fas fa-plus-circle"></i> Add contact</button></a>

            <?php endif?>
            <thead class="grey darken-3 white-text">
                <tr>
                    <th class="th-sm">Firstname</th>
                    <th class="th-sm">Lastname</th>
                    <th class="th-sm">Email</th>
                    <th class="th-sm">Telephone</th>
                    <th class="th-sm">Companies</th>
                    <th class="th-sm">Created</th>
                </tr>
            </thead>
            <tbody>

                <!-- On pourrait utiliser { ... } à la place de :  -->
                <?php foreach ($contacts as $contact): ?>

                <!-- id dans le tr pour appliquer un JS quand on clic sur tr-->
                <tr id="<?=$contact['id'];?>" class="example hoverable click">
                    <td><?=$contact['firstname']?></td>
                    <td><?=$contact['lastname']?></td>
                    <td><?=$contact['email']?></td>
                    <td><?=$contact['telephone']?></td>
                    <td><?=$contact['name']// name Table companies         ?></td>
                    <td><?=explode(" ", $contact['createdAt'])[0]?></td>
                </tr>
                <!-- Fin de endforeach  -->
                <?php endforeach?>

            </tbody>
        </table>
    </div>
</div>


<!-- Script bootstrap  -->
<?php include 'components/scripts.php'?>

<!-- Script création Search, Pagination  -->
<script>
$(document).ready(function() {
    $('#searchShow').DataTable();
    $('.dataTables_length').addClass('bs-select');
});
</script>
<!-- Fin Script -->

<!-- Script appliquer un lien et variable id sur <tr>-->
<script>
var linkTo = (id) => {
    //console.log(id);
    document.location = `/cogip/contacts/${id}`;
}

Array.from(document.querySelectorAll('tr.click')).forEach($btn => {
    console.log($btn);
    $btn.addEventListener('click', () => (linkTo($btn.id), false));
});
</script>
<!-- Fin Script-->

<?php
// Inclure Footer ...
include "components/footer.php";
?>