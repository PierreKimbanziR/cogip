<?php

include "components/header.php";
include "components/navbar.php";
?>

<div class="container" >
<h1 class="text-center ">List of companies</h1>
<table class="table table-striped">
    <thead class="black white-text">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Company name</th>
            <th scope="col">Country</th>
            <th scope="col">Vat number</th>
            <th scope="col">Type</th>
        </tr>
    </thead>
    <tbody>
    
        <!-- On pourrait utiliser { ... } à la place de :  -->
        <?php foreach ($companies as $company): ?>

        <!-- id dans le tr pour appliquer un JS quand on clic sur tr-->
        <tr id="<?php echo $company['id'];?>" class="example hoverable">   
            
            <th scope="row">  
            <a href='company/<?php echo $company['id'];?>'>
            <?php echo $company["id"];?></a>
            </th>

            <td><?php echo $company['companyname'] ?></td>
            <td><?php echo $company['country'] ?></td>
            <td><?php echo $company['vatnumber'] ?></td>
            <td><?php echo $company['type'] ?></td>
        </tr>


        <!-- Fin de endforeach  -->
        <?php endforeach?>

    </tbody>
</table>
</div>

<?php
// Inclure Footer ...
include "components/scripts.php";
include "components/footer.php";
?>