
<!DOCTYPE html>
<html>
    <head>
        <title>Réponse</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Voici les informations de votre formulaire :</p>
        
<?php
            echo 'Nom: '.$_POST["name"].'<br>';
            echo 'Mail: ' .$_POST["mail"].'<br>';
            echo 'Message : ' .$_POST["msg"].'<br>';

?>
    </body>
</html>