<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container" >
<h1 class="text-center">Admin Dashboard</h1>

</div>


<!-- Script bootstrap  -->
<?php include 'components/scripts.php'?>

<!-- Script appliquer un lien et variable id sur <tr>-->
<!-- <script>
    var linkTo = (id) => {
        //console.log(id);
        document.location = `contacts/${id}`;
    }

    Array.from(document.querySelectorAll('tr.click')).forEach($btn => {
        console.log($btn);
        $btn.addEventListener('click', () => (linkTo($btn.id), false));
    });

</script> -->
<!-- Fin Script-->

<?php
// Inclure Footer ...
include "components/footer.php";
?>