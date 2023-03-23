<?php


echo nl2br("Merci " . $_POST['user_name'] . " " . $_POST['user_fname'] . " de nous avoir contacté à propos de "  . $_POST['choix'] . " . : " . PHP_EOL) ;

echo nl2br("Un de nos conseillers vous contactera soit à l’adresse: " . $_POST['user_email'] . " ou par téléphone au: " . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande : " . PHP_EOL) ; 

echo $_POST['user_message'] ;

