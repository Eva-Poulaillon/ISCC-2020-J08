<?php
$couleur_texte='#17c1ff';

if(vitrine-accueil.php==true)
{
    echo"<p> $couleur_texte Accueil</p>";
}
elseif(vitrine-accueil.php==false)
{
    echo"<p> $couleur_texte Programme </p>";
}
elseif(vitrine-programme.php==false)
{
    echo"<p>$couleur_texte Contact </p>";
}

?>

<nav>
        <a href="vitrine-accueil.php">Acceuil</a>
        <a href="vitrine-contacts.php">Contacts</a>
        <a href="vitrine-programme.php">Programme</a>
</nav>