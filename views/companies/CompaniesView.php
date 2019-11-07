<?php

include "components/header.php";
include "components/navbar.php";
?>

<div class="container">

    <h1 class="text-center ">List of <?= $page_title?></h1>
    <div class="table-responsive">



    <?php if ($_SESSION['level'] == 3) : ?>

<a href="/cogip/companies/create"><button type="button" class="btn btn-outline-danger waves-effect"><i class="fas fa-plus-circle"></i> Add a company</button></a>

<?php endif ?>

    <table id="searchCompany" class="table table-striped table-bordered table-sm">

        <thead class="grey darken-3 white-text">
            <tr>
                <th class="th-sm">Company name</th>
                <th class="th-sm">Country</th>
                <th class="th-sm">Vat</th>
                <th class="th-sm">Role</th>
                <th class="th-sm">Date</th>
            </tr>
        </thead>
        <tbody>

            <!-- On pourrait utiliser { ... } à la place de :  -->
            <?php foreach ($companies as $company): ?>

            <!-- id dans le tr pour appliquer un JS quand on clic sur tr-->
            <tr id="<?php echo $company['id']; ?>" class="example hoverable click">
                <td><?php echo $company['name'] ?></td>
                <td><?php echo $company['country'] ?></td>
                <td><?php echo $company['vat'] ?></td>
                <td><?php echo ($company['role'] == 0) ? "Client" : "Provider" ?></td>
                <td><?php echo $company['createdAt'] ?></td>
            </tr>


            <!-- Fin de endforeach  -->
            <?php endforeach?>

        </tbody>
    </table>
</div>
</div>

<?php include 'components/scripts.php'?>
<script>
$(document).ready(function() {
    $('#searchCompany').DataTable();
    $('.dataTables_length').addClass('bs-select');
});
</script>


<script>
var linkTo = (id) => {
    //console.log(id);
    document.location = `/cogip/companies/${id}`;
}

Array.from(document.querySelectorAll('tr.click')).forEach($btn => {
    console.log($btn);
    $btn.addEventListener('click', () => (linkTo($btn.id), false));
});
</script>

<?php
// Inclure Footer ...

include "components/footer.php";
?>