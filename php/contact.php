<?php 
$array = array("firstName" => "" ,"Name" => "" ,"mail" => "" ,"telephone" => "" ,"message" => "" ,
"firstNameError" => "" ,"NameError" => "" ,"mailError" => "" ,"telephoneError" => "" ,"messageError" => "" ,"isSuccess" => false);


$emailTo = "smbbdrame@gmail.com";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $array["firstName"] = verifyInput($_POST["firstName"]);
    $array["Name"] = verifyInput($_POST["Name"]);
    $array["mail"] = verifyInput($_POST["mail"]);
    $array["telephone"] = verifyInput($_POST["telephone"]);
    $array["message"] = verifyInput($_POST["message"]);
    $array["isSuccess"] = true;
    $emailText ="";

    if(empty($array["firstName"])){
        $array["firstNameError"] = "Veuillez entrez votre prénom !";
        $array["isSuccess"] = false;
    }else{
        $emailText .= "Prénom : {$array['firstName']}\n";
    }

    if(empty($array["Name"])){
        $array["NameError"] = "Veuillez entrez votre nom !";
        $array["isSuccess"] = false;
    }else{
        $emailText .= "Nom : {$array['Name']}\n";
    }

    if(!isTel($array["telephone"])){
        $array["telephoneError"] = "Le format du numéro est incorrect (ex: 0654343434)";
        $array["isSuccess"] = false;
    }else{
        $emailText .= "Téléphone : {$array['telephone']}\n";
    }


    if(empty($array["mail"])){
        $array["mailError"] = "Veuillez entrez votre mail !";
        $array["isSuccess"] = false;
    }else if(!isEmail($array["mail"])){
        $array["mailError"] = "Votre email n'est pas valide !";
        $array["isSuccess"] = false;
    }else{
        $emailText .= "Adresse mail : {$array['mail']}\n";
    }

    if(empty($array["message"])){
        $array["messageError"] = "Veuillez entrez votre message !";
        $array["isSuccess"] = false;
    }else{
        $emailText .= "Message : {$array['message']}\n";
    }

    if($array["isSuccess"]){
        $headears = "From: {$array['firstName']} {$array['Name']} {$array['mail']} <email>\r\nReply-To: {$array['mail']}";    //entête de l'email
        mail($emailTo, "Message de mon site", $emailText, $headears);       
        //Fonction pour envoyer le mail
    }

echo json_encode($array);
}

function isTel($var){
    return preg_match("/^[0-9 ]*$/", $var);        //Compare l'expression reguliere à ma variable
}

function isEmail($var){
    return filter_var($var, FILTER_VALIDATE_EMAIL);  //Compare la variable à un filtre de validation d'email retourne true ou false
}

function verifyInput($var){  
    $var = trim($var);              // fonction evite les retours à la ligne, tab ect...
    $var = stripslashes($var);      // Enlève tous les anti-slash
    $var = htmlspecialchars($var);  // Evite la faille xss evite l'ajout de code dans l'url.   
    return $var;
}


?>