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
    <div class="table-responsive">
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
                                class="far fa-lg fa-eye"></i></a> <a
                            href="/cogip/admin/users/update/<?=$user['id']?>"><i class="fas fa-lg fa-user-edit"></i></a>
                        <i class="fas fa-lg fa-trash-alt pointer" data-itemid="<?=$user['id']?>"
                            data-itemname="<?=$user['username']?>" data-item="users" data-toggle="modal"
                            data-target="#deleteModal"></i></td>
                </tr>
                <!-- Fin de endforeach  -->
                <?php endforeach?>

            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
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
<div>
    <input list="brow">
    <datalist id="brow">
        <option value="1" label="aaaaa"></option>
        <option value="2" label="BBB"></option>
        <option value="3" label="ccc"></option>
        <option value="4" label="ddd"></option>
        <option value="5" label="eee"></option>
    </datalist>
</div>

<?php
include "components/scripts.php";?>
<script>
$('.fa-trash-alt').click(e => {
    let id = $(e.currentTarget).data('itemid');
    let name = $(e.currentTarget).data('itemname');
    let item = $(e.currentTarget).data('item');
    let link = `/cogip/admin/users/delete/${id}`;
    $('#deleteModalName').text(name);
    $('#deleteModalLabel').text("Delete " + item);
    $('#deleteModalAction').attr("action", link);
})
</script>
<?php
include "components/footer.php";