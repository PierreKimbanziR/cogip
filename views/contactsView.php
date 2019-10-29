<?php

include '../components/header.php';
include '../components/navbar.php';

$test = array('manu', 'phil', 'pierre', 'guillaume', 'Jeason');

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Firsname</th>
            <th scope="col">Last nale</th>
            <th scope="col">telephone</th>
            <th scope="col">email</th>
            <th scope="col">working at</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($test as $key): ?>
        <tr>
            <th scope="row">1</th>
            <td><?php echo $key ?></td>
            <td>Otto</td>
            <td>telephone N</td>
            <td>email</td>
            <td>macdonalds</td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>


<?php
include '../components/footer.php';