<?php
// Inclure Header ...
// Inclure Navbar ...
include "components/header.php";
include "components/navbar.php";

// Rappel des valeurs des variables
global $firstname_Error;
global $lastname_Error;
global $email_Error;
global $workingAt_Error;
global $telephone_Error;
global $workingAt_Error;
global $company_Error;

global $firstname;
global $lastname;
global $email;
global $workingAt;
global $telephone;
global $company;

//Force contact working at to not have error on option company
// Voir modele update= TRUE pour updateContact($id) FALSE  pour createContact()
// Valeur 0 (company si ADD )
if ($update == false) {
$contact['workingAt'] = 0;
}

// SI ON UPDATE LE CONTACT, ON REPREND LES DATA DE LA DB
// TRUE pour updateContact($id) alors on cherche les valeurs existantes de la DB
// De la fonction getContact($id) -> $contact = getContact($id);
if ($update == true) {
    $firstname=$contact["firstname"];
    $lastname=$contact["lastname"];
    $email=$contact["email"];
    $workingAt=$contact["workingAt"];
    $telephone=$contact["telephone"];
    $createdAt=$contact["createdAt"];
}

// Page Create et update
?>

<div class="container">
    <h1 class="text-center"><?= ($update) ? 'Update ' : 'Add new ' ?> contact</h1>
    <form method="post" action="">

        <div>
            <label for="Firstname" class="w-100 p-2">Firstname : </label>
            <input title="Firstname" type="text" name="firstname" placeholder="Firstname" size="22" maxlength="30"
                autofocus required value="<?php echo $firstname; ?>">
                <?php echo $firstname_Error; ?>
        </div>

        <div>
            <hr>
            <label for="Lastname" class="w-100 p-2">Lastname : </label>
            <input title="Firstname" type="text" name="lastname" placeholder="Lastname" size="22" maxlength="30"
                required value="<?php echo $lastname; ?>">
                <?php echo $lastname_Error; ?>
        </div>

        <div>
            <hr>
            <label for="Email" class="w-100 p-2">Email : </label>
            <input title="Email" type="email" name="email" placeholder="Email" size="22" maxlength="30" required value="<?php echo $email; ?>"><?php echo $email_Error; ?>
        </div>
        <div>

    <?php echo $company_Error; ?>
    <select name="workingAt selectSearch" class="form-control">
    <option value="0" selected>Please select a company</option>
    
<!-- Importer Companies de la DB du model Companies dans ADD
Afficher dans le SELECT sur selected le Nom de la compagnie 
Si Page ADD valeur 0 -> Please select a company -->

    <?php foreach ($compagnies as $company) : ?>
        <option value="<?= $company['id'] ?>" <?= ($company['id'] == $contact['workingAt']) ? 'selected' : '' ?> > <?= $company['name'] ?></option>
     <?php endforeach  ?>

<!-- Fin import -->

    </select>
    </div>

        <div>
            <hr>
            <label for="Telephone" class="w-100 p-2">Telephone : ex: +32-0-000-00-00 </label>
            <input title="Telephone" type="text" name="telephone" placeholder="+32-0-000-00-00" size="22" maxlength="30"
                required value="<?php echo $telephone; ?>"><?php echo $telephone_Error; ?>
        </div>

        <!-- input antiRobot -->
        <div>
            <input type="text" name="vilainRobot" size="22" maxlength="30">
        </div>
        <!-- Fin input antiRobot -->

        <div>
        <!-- Nommer le bouton soit Add ou Update Contact Si True valeur = Update si False Add new -->
            <button name="submit" value="submit" type="submit"><?= ($update) ? 'Update ' : 'Add new ' ?>contact !</button>
        </div>
    </form>
</div>

<!-- Script bootstrap  -->
<?php
include('components/scripts.php');

// Inclure Footer ...
include "components/footer.php";
