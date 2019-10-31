<?php
// Inclure Header ...
// Inclure Navbar ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container">
    <h1 class="text-center">Add a company</h1>
    <form method="post" action="">

    <div>   
    <label for="Cname" class="w-100 p-2">Company Name: </label>
    <input title="Cname" type="text" name="Cname" placeholder="Cname" size="22" maxlength="30" autofocus required>
    </div>

    <div><hr>
    <label for="Ccountry" class="w-100 p-2">Company country : </label>
    <input title="Ccountry" type="text" name="Ccountry" placeholder="Ccountry" size="22" maxlength="30" required>
    </div>
    
    <div><hr>
    <label for="Vat" class="w-100 p-2"> Company Vat : </label>
    <input title="Vat" type="number" name="Vat" placeholder="Vat" size="22" maxlength="30" required>
    </div>

    <div><hr>
    <label for="Crole" class="w-100 p-2">Company role : </label>
    <input title="Crole" type="text" name="Crole" placeholder="Crole" size="22" maxlength="30" required>
    </div>

    <div><hr>
    <label for="Telephone" class="w-100 p-2">Telephone : </label>
    <input title="Telephone" type="text" name="telephone" placeholder="Telephone" size="22" maxlength="30" required>
    </div>

    <div>
    <button name="submit" value="submit" title="Add a new company !" type="submit">Add a new company !</button>
    </div> 
    </form>
</div>

<!-- Script bootstrap  -->
<?php 
include('components/scripts.php') 

// Inclure Footer ...
include "components/footer.php";
?>