<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container" >
<h1 class="text-center ">List of contacts</h1>
<table class="table table-striped table-bordered table-sm">
    <thead class="black white-text">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Companies</th>
            <th scope="col">Telephone</th>
            <th scope="col">Created </th>
        </tr>
    </thead>
    <tbody>
    
        <!-- On pourrait utiliser { ... } à la place de :  -->
        <?php foreach ($contacts as $contact): ?>

        <!-- id dans le tr pour appliquer un JS quand on clic sur tr-->
        <tr id="<?php echo $contact['id'];?>" class="example hoverable click">   
            
            <th scope="row">  
            <a href='contacts/<?php echo $contact['id'];?>'>
            <?php echo $contact["id"];?></a>
            </th>

            <td ><?php echo $contact['firstname'] ?></td>
            <td><?php echo $contact['lastname'] ?></td>
            <td>@<?php echo $contact['email'] ?></td>
            <td ><?php echo $contact['name'] // name Table companies ?></td>
            <td><?php echo $contact['telephone'] ?></td>
            <td><?php echo $contact['createdAt'] ?></td>

        </tr>




        <!-- Fin de endforeach  -->
        <?php endforeach?>

    </tbody>
</table>
</div>

<script>
var linkTo = (id) => {
    //console.log(id);
    document.location = `contacts/${id}`;
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