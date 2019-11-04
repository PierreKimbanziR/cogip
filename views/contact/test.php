<?php
// Inclure Header ...
// Inclure Navbar ...
include "components/header.php";
include "components/navbar.php";

?>

<div class="container">
<?php    
global $conn;

$stmt = $conn->prepare("SELECT companies.id, companies.name  FROM companies");
$stmt->execute();

// FetchAll ramène tout de ma DB et mettre le résultat dans $row
$row = $stmt->fetchAll();
return $row;

foreach ($compagnies as $company){
 echo $company['id'];
 echo $company['name']; 
 }
?>



</div>

<!-- Script bootstrap  -->
<?php
//include('components/scripts.php')

// Inclure Footer ...
//include "components/footer.php";

?>
