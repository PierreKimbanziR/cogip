<script>
$(document).ready(function() {
    $('#dtBasicExample').DataTable({
        "order": [
            [0, "desc"]
        ]
    });
    $('.dataTables_length').addClass('bs-select');

    $('.fa-print').click((e) => {
        console.log($(e.currentTarget).data('printid'));
        let printid = $(e.currentTarget).data('printid');
        var printWindow = window.open(`/cogip/invoices/${printid}`);
        printWindow.print();
    })
});

let linkTo = (id) => {
    console.log(id);
    //document.location = `/cogip/invoices/${id}`;
}

Array.from(document.querySelectorAll('tr.click')).forEach($btn => {
    $btn.addEventListener('click', () => (linkTo($btn.id), false));
});
</script>