<?php
include('private/database.php');
if(isset($_POST['email']) && !empty($_POST['email'])){
    $message = $_POST;

    // verifier les champs
    $errors = [];

    if(filter_var($message['email'], FILTER_VALIDATE_EMAIL)){
        //L'email est bonne
    }else{
        $errors['email'] = "Veuillez-verifier l'adresse e-mail saisi";
    }

    if(count($errors)> 0){
       include("index.php");
        // si erreur => include("gallerie_edit_view.php");
    }else{
        /* syntaxe avec preparedStatements */
        /* INSERT table galerie */
        $sqlmessages = "insert into users (id, email) values(:id, :email)";
        $sqlmessages .= " on duplicate key update email=:email";
        $sthmessages = $dbh->prepare($sqlmessages, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        if(
	$sthmessages->execute(array(
	  ':id' => $message['id'],
	 ':email' => $message['email']
        ))){
            // si OK => rien ou message succes
	 $contact_id = (!empty($contact['id'])? $contact['id'] : $dbh->lastInsertId() );
	 $ok_email = "Votre e-mail a bien été envoyer";
            header('Location: succes');
        }else{
            echo ("ERREUR LORS DE LA SAUVEGARDE");
            include("index.php");
        }
    }
}else{
        $error_email = "Veuillez saisir une adresse e-mail";

            header('Location: error');
}
