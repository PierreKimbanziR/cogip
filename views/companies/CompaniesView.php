<?php

include "components/header.php";
include "components/navbar.php";
?>

<div class="container" >
<h1 class="text-center ">List of companies</h1>
<table id ="searchCompany" class="table table-striped">
    <thead class="black white-text">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Company name</th>
            <th scope="col">Country</th>
            <th scope="col">Vat</th>
            <th scope="col">Role</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
    
        <!-- On pourrait utiliser { ... } à la place de :  -->
        <?php foreach ($companies as $company): ?>

        <!-- id dans le tr pour appliquer un JS quand on clic sur tr-->
        <tr id="<?php echo $company['id'];?>" class="example hoverable click">   
            
            <th scope="row">  
            <a href='companies/<?php echo $company['id'];?>'>
            <?php echo $company["id"];?></a>
            </th>

            <td><?php echo $company['name'] ?></td>
            <td><?php echo $company['country'] ?></td>
            <td><?php echo $company['vat'] ?></td>
            <td><?php echo $company['role'] ?></td>
            <td><?php echo $company['createdAt'] ?></td>
        </tr>


        <!-- Fin de endforeach  -->
        <?php endforeach?>

    </tbody>
</table>
</div>

<?php include('components/scripts.php') ?>
<script>
    $(document).ready(function() {
        $('#searchCompany').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>


<script>
var linkTo = (id) => {
    //console.log(id);
    document.location = `companies/${id}`;
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