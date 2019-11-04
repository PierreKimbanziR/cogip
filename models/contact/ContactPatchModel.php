<?php
// http://localhost/cogip/contacts/create
// Initialiser variables
$firstname=$lastname=$company=$email=$telephone="";

// Initialiser variables erreurs
$firstname_Error=$lastname_Error=$company_Error=$email_Error=$telephone_Error="";

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
            $companyV=$company;
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
                    $firstname_Error = "Only letters and white space allowed (fn)";   
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
                    $lastname_Error = "Only letters and white space allowed (LastName)";   
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

    function validate_phone_number($telephone)
    {
        if (empty(trim($_POST["telephone"]))) 
        {
            // si vide 
            $telephone_Error = "Please enter a telephone number.";
        } 

        else

        {
                
                 
            // On peut utiliser +, - et . dans le numéro
                $filtered_phone_number = filter_var($telephone, FILTER_SANITIZE_NUMBER_INT);       
                // Retirer "-" du numéro
                $phone_to_check = str_replace($filtered_phone_number, "-", "" );    
                // Check la longueur du numéro (Belgique)
                if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) 
                
                    {
                        $telephone_Error = "Number phone invalid";
                        return false;			
                    }
                
                else 
                
                    {
                        return true;
                    }	
        }
    }

// Appel fonction validate_phone_number
$telephone = htmlspecialchars($_POST['telephone']);
validate_phone_number($telephone);

// Si TEL OK
if (validate_phone_number($telephone) == true) 
    {
        $telephoneV=$telephone;
    } 

else 

    {
        $telephone_Error="Invalid phone number +32-0-000-00-00 ";
        //echo "Invalid phone number";
    }



// Si envoyé et error != ""
if (empty($telephone_Error) && empty($firstname_Error) && empty($email_Error) && empty($telephone_Error) && empty($company_Error))

        {
        // connexion DB
        global $conn;
        $sql = "INSERT INTO contacts (firstname,lastname,email,telephone,workingAt) VALUES('$firstname','$lastname','$email','$telephoneV','$company');";

            if ($conn->query($sql)) 
                {
                    echo '<p>Ajouté à la DB</p>';
                    header('location: /cogip/contacts');
                } 

            else 
                {
                    echo '<p>Problème de DB</p>';
                }
        }

// fin de if _POST  
}

