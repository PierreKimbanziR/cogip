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
        <span class="delete pointer toggleModal" data-toggle="modal" data-target="#deleteModal" data-itemid="<?=$id;?>"
            data-itemname="<?=$contact['firstname'] . ' ' . $contact['lastname']?>" data-item="contacts">Delete</span>
    </p>
</div>

<?php
// Inclure Footer ...
include "components/scripts.php";
include "components/footer.php";

?>