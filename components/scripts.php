<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
</script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
<script type="text/javascript" src="/cogip/static/js/datatables.min.js"></script>
<script src="/cogip/static/js/select2.min.js"></script>
<script>
$('.fa-trash-alt').click(e => {
    let id = $(e.currentTarget).data('itemid');
    let name = $(e.currentTarget).data('itemname');
    let item = $(e.currentTarget).data('item');

    let link = `/cogip/${item}/delete/${id}`;

    $('#deleteModalName').text(name);
    $('#deleteModalLabel').text("Delete " + item);
    $('#deleteModalAction').attr("action", link);
})

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.selectSearch').select2();
});
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.selectSearch2').select2();
});
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.selectSearch3').select2();
});
</script>