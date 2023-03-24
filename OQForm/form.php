<?php

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!isset($_POST['fname']) || trim($_POST['firstname']) === '') 
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST['user_name']) || trim($_POST['user_name']) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST['user_email']) || trim($_POST['user_email']) === '') 
            $errors[] = "L'e-mail' est obligatoire";
            elseif(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
              $errors[] = "l'adresse e-mail n'a pas le bon format";
        if(!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '') 
            $errors[] = "Le numéro de tél est obligatoire";
        if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '') 
            $errors[] = "Veuillez entrer un message";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form  action="thanks.php"  method="post">
    <div>
      <label  for="prenom">Prenom :</label>
      <input required  type="text"  id="prenom"  name="user_fname">
    </div>
    <div>
      <label  for="nom">Nom :</label>
      <input required type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input required type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="tel">Numéro de téléphone:</label>
      <input required type="number"  id="tel"  name="user_phone">
    </div>
    <?php 
    $sujetList = ['inscription', 'resiliation', 'autre'];
    echo "Vous nous contacter à propos de" ;
    ?>
    "<select name="choix" >";
    <?php
      foreach ( $sujetList as $option) {
        echo "<option>" . $option . "</option>" ;
      }
    echo "</select>";

    ?>

    <div>
      <label  for="message">Message :</label>
      <textarea required  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  
</body>
</html>
