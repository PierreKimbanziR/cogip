<?php






$name=$country=$vat=$role='';
$name_error=$country_error=$vat_error=$role_error='';



//function createCompany() {
    






if ($_SERVER['REQUEST_METHOD']=='POST'){

    if (empty(trim($_POST['companyname']))){
        $name_error ="Name of the company is required.";
    }

    else  {
        $name=htmlspecialchars($_POST['companyname']);
 
         if (!preg_match('/^[a-z][a-z\s]*$/',$name))
         {
            $name_error="Only letters and white space allowed.";
            
        }
    }



    if($_POST['country']=='0'){
        $country_error='You must select a country.';
        
    }   
    else {
        $country= htmlspecialchars($_POST['country']);
    }



    if(empty(trim($_POST['vat']))){
        $vat_error='Vat number is required.';
        echo $vat_error;
    }
    else { 
        $vat=htmlspecialchars($_POST['vat']);
        if(!preg_match('/^[0-9]*$/',$vat))
        { 
            $vat_error='Only numbers are allowed.';
        }

    }




    if(empty(trim($_POST['companyrole']))){
        $role_error='You must select the company role.';
        echo $role_error;
    }
    else {
    $role=htmlspecialchars($_POST['companyrole']);
}






if (empty($name_error) && empty($country_error) && empty($vat_error) && empty($role_error))

    {
        global $conn; 
        
        $sql = "INSERT INTO companies (name, country, vat, role) 
        VALUES('$name', '$country', '$vat', '$role');";

       if ($conn->query($sql)){
          // echo "gg bro";
           //header('location: /cogip/companies');
       }
       else {
           //echo "va dormir bro";
       }
        
    }
}
