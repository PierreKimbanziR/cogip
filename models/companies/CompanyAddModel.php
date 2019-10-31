<?php


/*function addCompany(){
    
    include 'config/db.php';
    $stmt = $conn->prepare("SELECT * FROM companies");
    $stmt->execute();

    $row = $stmt->fetchAll();
    return $row;
} 

addCompany();
*/

$name=$country=$vat=$role=$telephone='';
$name_error=$country_error=$vat_error=$role_error=$telephone='';




if ($_SERVER['REQUEST_METHOD']=='POST'){

    if (empty(trim($_POST['name']))){
        $name_error ="Name of the company is required.";
        echo $name_error;
    }
    else if {
        $name=test_input($_POST['name']);
        if (!preg_match('/^[a-z][a-z\s]*$/',$name)){
            $name_error="Only letters and white space allowed.";
            echo $name_error;
        }
    }
    else {
        $name= htmlspecialchars($_POST['name']);

    }
}


if ($_SERVER['REQUEST_METHOD']== 'POST'){
    if($_POST['country']=='0'){
        $country_error='You must select a country.';
        echo $country_error;
    }   
    else{
        $country= htmlspecialchars($_POST['country']);
    }
}


if ($_SERVER['REQUEST_METHOD']== 'POST'){
    if(empty($_POST['vat'])){
        $vat_error='Vat number is required.';
        echo $vat_error;
    }
    else if {

    }
}




if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['role'])){
        $role_error='You must select the company role.';
        echo $role_error;
    }
    else 
    $role=htmlspecialchars($_POST['role']);
}




if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['telephone'])){
        $telephone_error='The company telephone number is required.';
        echo $telephone_error;
    }
}