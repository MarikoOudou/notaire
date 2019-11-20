<?php
// Check for empty fields
if(empty($_POST['nom'])       ||
   empty($_POST['prenom'])    ||
   empty($_POST['fonction'])  ||
   empty($_POST['numero'])    ||
   empty($_POST['mail'])      ||
   empty($_POST['objet'])     ||
   !filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$nom = strip_tags(htmlspecialchars($_POST['nom']));
$prenom = strip_tags(htmlspecialchars($_POST['prenom']));
$fonction = strip_tags(htmlspecialchars($_POST['fonction']));
$numero = strip_tags(htmlspecialchars($_POST['numero']));
$mail = strip_tags(htmlspecialchars($_POST['mail']));
$objet = strip_tags(htmlspecialchars($_POST['objet']));
   
// Create the email and send the message
$to = 'clarisse.koffi@notaire-tiacoh.com, patrick.digba@notaire-tiacoh.com';
$email_subject = "RDV";
$email_body = "\nNom: $nom\nPrénom (s): $prenom\nE-mail: $mail\nProfession: $fonction\nContact: $numero\n\nMotif du RDV:\n$objet";
$headers = "From: $mail\n"; 
$headers .= "Reply-To: $mail";   
mail($to,$email_subject,$email_body,$headers);
//return true;         
?>
