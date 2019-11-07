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
    <div class="col p-3 mb-5 bg-white rounded">
        <form method="post" action="">
            <div class="form-group row">

                <div class="col-6  <?php echo (!empty($firstname_Error)) ? 'has-error' : ''; ?>">
                    <label for="Firstname">Firstname : </label>
                    <input class="form-control" type="text" name="firstname" placeholder="Firstname"
                    required value="<?php echo $firstname; ?>">
                    <span class="help-block"><?php echo $firstname_Error; ?></span>
                </div>

                <div class="col-6  <?php echo (!empty($lastname_Error)) ? 'has-error' : ''; ?>">
                    <label for="lastname">lastname : </label>
                    <input class="form-control" type="text" name="lastname" placeholder="lastname"
                    required value="<?php echo $lastname; ?>">
                    <span class="help-block"><?php echo $lastname_Error; ?></span>
                </div>

                <div class="col-6  <?php echo (!empty($email_Error)) ? 'has-error' : ''; ?>">
                    <label for="email">Email : </label>
                    <input class="form-control" type="email" name="email" placeholder="Email"
                    required value="<?php echo $email; ?>">
                    <span class="help-block"><?php echo $email_Error; ?></span>
                </div>

                <div class="col-6  <?php echo (!empty($telephone_Error)) ? 'has-error' : ''; ?>">
                    <label for="telephone">Telephone : </label>
                    <input class="form-control" type="text" name="telephone" placeholder="+32-0-000-00-00"
                    required value="<?php echo $telephone; ?>">
                    <span class="help-block"><?php echo $telephone_Error; ?></span>
                </div>
            </div>

            <div><label for="company">Company : </label>
                <?php echo $company_Error; ?>
                <select name="workingAt" class="form-control selectSearch">
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

            <!-- input antiRobot -->
            <div class="spam">
                <input type="text" name="vilainRobot" maxlength="30">
            </div>
            <!-- Fin input antiRobot -->

            <div>
            <!-- Nommer le bouton soit Add ou Update Contact Si True valeur = Update si False Add new -->
            <hr>
                <button name="submit" value="submit" type="submit"><?= ($update) ? 'Update ' : 'Add new ' ?>contact !</button>
            </div>

        </form>
    </div>
</div>

<!-- Script bootstrap  -->
<?php
include('components/scripts.php');

// Inclure Footer ...
include "components/footer.php";
