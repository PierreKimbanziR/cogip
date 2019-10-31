<?php
// Inclure Header ...
// Inclure Navbar ...
include "components/header.php";
include "components/navbar.php";

?>

<div class="container">
    <h1 class="text-center">Add an contact</h1>
    <form method="post" action="">

    <div>   
    <label for="Firstname" class="w-100 p-2"><strong>Firstname : </strong></label>
    <input title="Firstname" type="text" name="firstname" placeholder="Firstname" size="22" maxlength="30" autofocus required>
    </div>

    <div><hr>
    <label for="Lastname" class="w-100 p-2"><strong>Lastname : </strong></label>
    <input title="Firstname" type="text" name="lastname" placeholder="Lastname" size="22" maxlength="30" required >
    </div>
    
    <div><hr>
    <label for="Email" class="w-100 p-2"><strong>Email : </strong></label>
    <input title="Email" type="email" name="email" placeholder="Email" size="22" maxlength="30" required>
    </div>

    <div><hr>
    <select name="company" class="form-control">
    <option value="0" selected>Please select a company</option>
    <option value="Company 1">Company 1</option>
    <option value="Company 2">Company 2</option>
    </select>
    </div>

    <div><hr>
    <label for="Telephone" class="w-100 p-2"><strong>Telephone : </strong></label>
    <input title="Telephone" type="text" name="telephone" placeholder="Telephone" size="22" maxlength="30" required>
    </div>

    <!-- input Vilain Robot -->
    <div>
    <input type="text" name="vilainRobot" size="22" maxlength="30">
    </div>
    <!-- Fin input Vilain Robot -->

    <div>
    <button name="submit" value="submit" title="Add a new contact !" type="submit">Add a new contact !</button>
    </div> 
    </form>
</div>

<!-- Script bootstrap  -->
<?php 
//include('components/scripts.php') 

// Inclure Footer ...
include "components/footer.php";
?>