<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>

        <!-- On pourrait utiliser { ... } à la place de : -->
        <?php foreach ($contacts as $contact): ?>
        <tr>
            <th scope="row"><?php echo $contact['id'] ?></th>
            <td><?php echo $contact['firstname'] ?></td>
            <td><?php echo $contact['lastname'] ?></td>
            <td>@<?php echo $contact['email'] ?></td>
        </tr>

        <!-- Fin de endforeach  -->
        <?php endforeach?>

    </tbody>
</table>


<?php
// Inclure Footer ...
include "components/footer.php";
?>