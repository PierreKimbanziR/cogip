<?php
// http://localhost/cogip/contacts/create
// Initialiser variables
$firstname=$lastname=$company=$email=$telephone="";

// Initialiser variables erreurs
$firstname_Error=$lastname_Error=$company_Error=$email_Error=$telephone_Error="";

//Valeur FALSE envoi formulaire
// $formSent = false;

// -----------------------------------------------------------------------------
// Checker si envoi a été par _POST (et non _GET = spam)
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{


    // -----------------------------------------------------------------------------
    //Honeypot --- Checker si champs hidden = une valeur rentrée par robot
        if ($_POST['vilainRobot']) 
            {
                echo '!!!! ----------------> VILAIN ROBOT < ----------------!!!!';       
            // Stop le script de la page
                return;
            }

    // -----------------------------------------------------------------------------
    //  Validater le select company si valeur 0 (pas de sélection)
    if ($_POST["company"] == "0") 
        {
            $company_ERROR = "You must select a company";
        } 

    else // si ok on applique un htmlspecialchars
        {
            $company = htmlspecialchars($_POST["company"]);
        }

    // -----------------------------------------------------------------------------
    // Valider firstname
    // Si vide (la fonction trim retire les espaces avant et après !!! )
    // Pour éviter que l'on envoie des espaces 


    if (empty(trim($_POST["firstname"]))) 
        {
            // si vide 
            $firstname_Error = "Please enter a firstname.";
        } 

    else 
        {
            // si correct on attribue applique htmlspecialchars
            $firstname = htmlspecialchars($_POST["firstname"]);
            
            // si caractères spéciaux
            if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) 

                
                {   // Message d'erreurs
                    $firstname_Error = "Only letters and white space allowed";   
                }
        }




// fin de if _POST   
}




// function addContact($id)
// {
    
//     // Connexion à la DB Mdp, Host ...
//     include "config/db.php";

//     $stmt = $conn->prepare("SELECT contacts.*, companies.name as companyName FROM contacts LEFT JOIN companies ON contacts.workingAt=companies.id WHERE contacts.id = '$id'");

//     $stmt->execute();

//     $row = $stmt->fetch();
//     return $row;
// }


// test variable
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$company=$_POST['company'];

$email=$_POST['email'];
$telephone=$_POST['telephone'];
echo $firstname.' / ';
echo $lastname.' / ';
echo $email.' / ';
echo $company.' / ';
echo $telephone.' / ';
echo $firstname_Error;
