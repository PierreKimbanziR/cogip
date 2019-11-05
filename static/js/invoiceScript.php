<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable({
            "order": [
                [0, "desc"]
            ]
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script>
    var linkTo = (id) => {
        console.log(id);
        //document.location = `/cogip/invoices/${id}`;
    }

    Array.from(document.querySelectorAll('tr.click')).forEach($btn => {
        $btn.addEventListener('click', () => (linkTo($btn.id), false));
    });
</script>
<?php /*<script>
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('invoiceId')
    var number = button.data('invoiceNumber')
    var modal = $(this)
    modal.find('.modal-title').text('Voulez vous vraiment supprimer la facture ' + number)
</script> */
