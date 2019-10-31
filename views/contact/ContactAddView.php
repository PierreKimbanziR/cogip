<?php
// Inclure Header ...
// Inclure Navbar ...
<<<<<<< HEAD
include "components/header.php";
include "components/navbar.php";
=======
//include "components/header.php";
//include "components/navbar.php";

>>>>>>> 2596ed8aceb6856971c56de9761548a2ecbf6c58

?>

<div class="container">
    <h1 class="text-center">Add an contact</h1>
    <form method="post" action="">

    <div>   
<<<<<<< HEAD
    <label for="Firstname" class="w-100 p-2"><strong>Firstname : </strong></label>
=======
    <label for="Firstname" class="w-100 p-2">Firstname : </label>
>>>>>>> 2596ed8aceb6856971c56de9761548a2ecbf6c58
    <input title="Firstname" type="text" name="firstname" placeholder="Firstname" size="22" maxlength="30" autofocus required>
    </div>

    <div><hr>
<<<<<<< HEAD
    <label for="Lastname" class="w-100 p-2"><strong>Lastname : </strong></label>
    <input title="Firstname" type="text" name="lastname" placeholder="Lastname" size="22" maxlength="30" required >
    </div>
    
    <div><hr>
    <label for="Email" class="w-100 p-2"><strong>Email : </strong></label>
=======
    <label for="Lastname" class="w-100 p-2">Lastname : </label>
    <input title="Firstname" type="text" name="lastname" placeholder="Lastname" size="22" maxlength="30" required>
    </div>
    
    <div><hr>
    <label for="Email" class="w-100 p-2">Email : </label>
>>>>>>> 2596ed8aceb6856971c56de9761548a2ecbf6c58
    <input title="Email" type="email" name="email" placeholder="Email" size="22" maxlength="30" required>
    </div>

    <div><hr>
<<<<<<< HEAD
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
=======
    <label for="Company" class="w-100 p-2">Company : </label>
    <input title="Company" type="text" name="company" placeholder="Company" size="22" maxlength="30" required>
    </div>

    <div><hr>
    <label for="Telephone" class="w-100 p-2">Telephone : </label>
    <input title="Telephone" type="text" name="telephone" placeholder="Telephone" size="22" maxlength="30" required>
    </div>

    <!-- input antiRobot -->
    <div>
    <input type="text" name="vilainRobot" size="22" maxlength="30">
    </div>
    <!-- Fin input antiRobot -->
>>>>>>> 2596ed8aceb6856971c56de9761548a2ecbf6c58

    <div>
    <button name="submit" value="submit" title="Add a new contact !" type="submit">Add a new contact !</button>
    </div> 
    </form>
</div>

<!-- Script bootstrap  -->
<?php 
//include('components/scripts.php') 

// Inclure Footer ...
<<<<<<< HEAD
include "components/footer.php";
?>
=======
//include "components/footer.php";
?>

>>>>>>> 2596ed8aceb6856971c56de9761548a2ecbf6c58
