<?php  
include('../utils/regex.php');
include('../models/User.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errorsArray = array();


$password= trim(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING));

if(!empty($password)){
    $testRegex = preg_match($regexPassword,$password);
    
    if($testRegex == false){
        $errorsArray['password_error'] = 'Le password n\'est pas valide';
    }else{
        $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }
}else{
    $errorsArray['password_error'] = 'Le champ n\'est pas rempli';
}




$mail= trim(filter_input(INPUT_POST,'mail', FILTER_SANITIZE_EMAIL));
if(!empty($mail)){
    
    $testRegex = preg_match($regexEmail,$mail);
    if($testRegex == false){
        $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
    }
}else{
    $errorsArray['mail_error'] = 'Le champ n\'est pas rempli';
}



$gender= trim(filter_input(INPUT_POST,'gender', FILTER_SANITIZE_STRING));
if(!empty($gender)){
    
    $testRegex = preg_match($regexPseudo,$gender);
    if($testRegex == false){
        $errorsArray['gender_error'] = 'Le gender n\'est pas valide';
    }
}else{
    $errorsArray['gender_error'] = 'Le champ n\'est pas rempli';
}



$pseudo= trim(filter_input(INPUT_POST,'pseudo', FILTER_SANITIZE_STRING));
if(!empty($pseudo)){
    
    $testRegex = preg_match($regexPseudo,$pseudo);
    if($testRegex == false){
        $errorsArray['pseudo_error'] = 'Le pseudo n\'est pas valide';
    }
}else{
    $errorsArray['$pseudo_error'] = 'Le champ n\'est pas rempli';
}

$birthdate= trim(filter_input(INPUT_POST,'birthdate', FILTER_SANITIZE_STRING));

if(!empty($birthdate)){
    
    $testRegex = preg_match($regexBirthDate,$birthdate);
    if($testRegex == false){
        $errorsArray['birthdate_error'] = 'La date de naissance n\'est pas valide';
    }
}else{
    $errorsArray['birthdate_error'] = 'Le champ n\'est pas rempli';
}

if(isset($pass_hash) && empty($errorsArray)){

// j'ajoute false pour dire que le user n'est pas admin 
$user = new User($mail,$birthdate,$gender,$pseudo,$pass_hash,false);
        
$testRegister = $user->addUser();
}else{
    $error = 'Holà, que tàl !';
}
var_dump($birthdate);
var_dump($errorsArray);
die('hola');
}

    include(dirname(__FILE__).'/../template/header.php');
    include(dirname(__FILE__).'/../views/register.php');
    include(dirname(__FILE__).'/../template/footer.php');