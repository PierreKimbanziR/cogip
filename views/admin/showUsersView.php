<?php
include "components/header.php";
include "components/navbar.php";
?>
<div class="container">

    <h1 class="text-center">List of users</h1>
    <div class="py-4 row d-flex justify-content-center">

        <button type="button" onclick="window.location.href = '/cogip/admin/users/create'"
            class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> Add New User</button>

    </div>
    <table id="searchShow" class="table table-striped table-bordered table-sm">
        <thead class="grey darken-3 white-text">
            <tr>
                <th class="th-sm">Username</th>
                <th class="th-sm">Firstname</th>
                <th class="th-sm">Lastname</th>
                <th class="th-sm">Email</th>
                <th class="th-sm">Level</th>
                <th class="th-sm">Created</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <!-- On pourrait utiliser { ... } à la place de :  -->
            <?php foreach ($users as $user): ?>

            <!-- id dans le tr pour appliquer un JS quand on clic sur tr-->
            <tr id="<?=$user['id'];?>" class="example hoverable">
                <td><?=$user['username']?></td>
                <td><?=$user['firstname']?></td>
                <td><?=$user['lastname']?></td>
                <td><?=$user['email']?></td>
                <td><?=($user['userLevel'] == 3) ? 'SuperAdmin' : 'COGIP Employee' // name Table companies              ?>
                </td>
                <td><?=$user['createdAt']?></td>
                <td class="d-flex justify-content-between"><a href="/cogip/admin/users/<?=$user['id']?>"><i
                            class="far fa-lg fa-eye"></i></a> <a href="/cogip/admin/users/update/<?=$user['id']?>"><i
                            class="fas fa-lg fa-user-edit"></i></a>
                    <i class="fas fa-lg fa-trash-alt pointer" itemid="<?=$user['id']?>"
                        itemname="<?=$user['username']?>" onClick="showModal()" data-toggle="modal"
                        data-target="#deleteModal"></i></td>
            </tr>
            <!-- Fin de endforeach  -->
            <?php endforeach?>

        </tbody>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php
include "components/scripts.php";?>
<script>
    function showModal() {

console.log("haaaaa");
    }
</script>
<?php
include "components/footer.php";