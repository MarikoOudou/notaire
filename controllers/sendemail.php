
<?php

function sendMail ($nom, $prenom, $profession, $contact, $email, $date, $motif) {

    
    $mailpro = 'oudoumariko@gamil.com';

  // Plusieurs destinataires
     $to = $mailpro; // notez la virgule

     // Sujet
     $subject = 'RDV';

     

     // message
     $message = '
     
     <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

    <div>

        <div style="display: block;">
            <div style="width: 10rem; margin: auto;"><img src="imgs/partenaires/1.svg" alt=""></div>
        </div>

        <div style="position: relative; text-align: left; display: inline-block;">
            <ul style="list-style: none;">
                <li>
                    <h1>'.$nom.' '.$prenom .'</h1>
                </li>
                <li>'.$profession.'</li>
                <li>'.$contact.'</li>
                <li>'.$email.'</li>
                <li>'.$date.'</li>
            </ul>
        </div>
        <div style="margin-top: 20px;padding-left: 10%;padding-right: 10%;">
            <div style="width: 50%;">
                <h2>L\'objet du RDV</h2>
            </div>
            <div>
                <p>'.$motif.'</p>
            </div>
        </div>

    </div>




</body>

</html>
     
     ';


     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'From: Demande d\'aide <'.$email.'>';

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));

}

?>
