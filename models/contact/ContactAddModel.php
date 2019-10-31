<?php
// http://localhost/cogip/contacts/create
// Initialiser variables
$firstname=$lastname=$company=$email=$telephone="xxxx";

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
            $company_Error = "You must select a company";
        } 

    else // si ok on applique un htmlspecialchars
        {
            $company = htmlspecialchars($_POST["company"]);
        }

    // -----------------------------------------------------------------------------
    // Valider firstname
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


    // -----------------------------------------------------------------------------
    // Vérifier LastName

        if (empty(trim($_POST["lastname"]))) 
        {
            // si vide 
            $lastname_Error = "Please enter a lastname.";
        } 

    else 
        {
            // si correct on attribue applique htmlspecialchars
            $lastname = htmlspecialchars($_POST["lastname"]);
            
            // si caractères spéciaux
            if (!preg_match("/^[a-zA-Z ]*$/", $lastname))          
                {   // Message d'erreurs
                    $lastname_Error = "Only letters and white space allowed";   
                }
        }

// -----------------------------------------------------------------------------
// Vérifier email

if (empty(trim($_POST["email"]))) 
    {
        $email_Error = "Please enter a email.";
    } 

else 

    {
        $email = htmlspecialchars($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $email_Error = "Invalid email format";
            }
    }

// -----------------------------------------------------------------------------
// Vérifier Phone

function validate_phone_number($phone)
{
     // On peut utiliser +, - et . dans le numéro
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);       
    // Retirer "-" du numéro
     $phone_to_check = str_replace("-", "", $filtered_phone_number);    
    // Check la longueur du numéro (Belgique)
    if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) 
    
        {
            return false;			
        }
    
    else 
    
        {
               return true;
         }	
}

// Appel fonction validate_phone_number
$telephone = htmlspecialchars($_POST['telephone']);
if (validate_phone_number($telephone) == true) 
    {
    // echo "Phone number is valid";
    } 

else 

    {
        $telephone_Error="Invalid phone number";
        echo "Invalid phone number";
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
// $firstname=$_POST['firstname'];
// $lastname=$_POST['lastname'];
// $company=$_POST['company'];

// $email=$_POST['email'];
// $telephone=$_POST['telephone'];
echo $firstname_Error.' / ';
echo $lastname_Error.' / ';
echo $email_Error.' / ';
echo $company_Error.' / ';
echo $telephone_Error.' / ';
echo $firstname_Error;
