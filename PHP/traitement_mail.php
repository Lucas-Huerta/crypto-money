<?php

$errors = [];

if(!array_key_exists("name", $_POST) || $_POST["name"] == ''){
    $errors["name"] = "Veuillez renseigner votre nom";
}

if(!array_key_exists("firstname", $_POST) || $_POST["firstname"] == ''){
    $errors["firstname"] = "Veuillez renseigner votre prénom";
}

if(!array_key_exists("subject", $_POST) || $_POST["subject"] == ''){
    $errors["subject"] = "Veuillez renseigner un sujet";
}

if(!array_key_exists("mail", $_POST) || $_POST["mail"]  == '' || ! filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
    $errors["mail"] = "Veuillez renseigner une adresse mail valide ";
}

if(!array_key_exists("message", $_POST) || $_POST["message"] == ''){
    $errors["message"] = "Votre message est vide";
}

session_start();

if(!empty($errors)){

    $_SESSION["errors"] = $errors;
    $_SESSION["champs"] = $_POST;
    header('Location: contact.php');

}

else {

    $_SESSION["success"] = 1;
    $headers = 'FROM: '.$_POST["mail"];
    mail('contact.cryptomoney@gmail.com', $_POST["subject"], $_POST["message"]."\nEnvoyé par ".$_POST["firstname"]." ".$_POST["name"], $headers);
    header('Location: contact.php');


}
