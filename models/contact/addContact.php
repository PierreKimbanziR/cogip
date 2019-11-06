<?php
// http://localhost/cogip/contacts/create
// Initialiser variables
$firstname=$lastname=$company=$email=$telephone="";

// Initialiser variables erreurs
$firstname_Error=$lastname_Error=$company_Error=$email_Error=$telephone_Error="";

function verifyContact(){
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


    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {

        // -----------------------------------------------------------------------------
        //Honeypot 
            if ($_POST['vilainRobot']) 
                {
                    echo "!!!! SPAM !!!!";       
                // Stop le script de la page
                    return;
                }

        // -----------------------------------------------------------------------------
        //  Validater le select company si valeur 0 (pas de sélection)
        if ($_POST["workingAt"] == "0") 
            {
                $company_Error = "You must select a company";
            } 

        else // si ok on applique un htmlspecialchars
            {
                $company = htmlspecialchars($_POST["workingAt"]);
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
                        $lastname_Error = "Only letters and white space allowed (Not: *@éèêà ...)";   
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
    // Vérifier Phone A COMPLETER

    if (empty(trim($_POST["telephone"]))) 
            {
                // si vide 
                $telephone_Error = "<p class='alert alert-danger'>Please enter a telephone number.</p>";
            } 

            else

            {
                $telephone = htmlspecialchars($_POST['telephone']);
            }
    
}}

function addContact(){
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
    // Checker si envoi a été par _POST (et non _GET = spam)
    verifyContact();
    // Si envoyé et error != ""
    if (empty($lastname_Error) && empty($firstname_Error) && empty($email_Error) && empty($telephone_Error) && empty($company_Error))
        {
        // connexion DB
        global $conn;
        //echo "NO ERROR";
        
        $sql = "INSERT INTO contacts (firstname,lastname,email,telephone,workingAt) VALUES('$firstname','$lastname','$email','$telephone','$company');";

        if ($conn->query($sql)) {
                echo '<p>SUCCES</p>';
                header('location: /cogip/contacts');
        } else {
                echo '<p>Data Base issues !</p>';
        }
    } else {
        //echo "ERROR";
        // echo $lastname_Error;
        // echo $firstname_Error;
        // echo $email_Error;
        // echo $telephone_Error;
        // echo $company_Error;
    }
}

function patchContact($id)
{ 
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
    // Checker si envoi a été par _POST (et non _GET = spam)
    verifyContact();

    // Connection DB
    global $conn;
    $stmt = $conn->prepare("UPDATE contacts SET  firstname= ?, lastname= ?, email= ?, workingAt= ?, telephone= ? WHERE id = '$id' ");
    $stmt->execute([$firstname, $lastname, $email, $company, $telephone]);

    header('location: /cogip/contacts');
}
