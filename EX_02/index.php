<html>
<head>
<title>Summer Code Camp</title>
<meta charset="utf-8">
</head>

<body>
<header>
<nav>
<?php if($_GET['page']=='accueil'): ?>
<a href="vitrine-accueil.html">Accueil</a>
<?php else : ?>
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=accueil">Acceuil</a>
<?php endif; ?>

<?php if($_GET['page']=='contacts'): ?>
<a href="vitrine-contacts.html">Contacts</a>
<?php else : ?>
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=contacts">Contacts</a>
<?php endif; ?>

<?php if($_GET['page']=='programme'): ?>
<a href="vitrine-programme.html">Programme</a>
<?php else : ?>
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=programme">Programme</a>
<?php endif; ?>

</nav>

<h1> Summer Code Camp </h1>
</header>

<?php
if ($_GET['page']=='accueil') {
    include('vitrine-accueil.html');
} elseif($_GET['page']=='contacts'){
    include('vitrine-contacts.html');
} elseif($_GET['page']=='programme'){
    include('vitrine-programme.html');
} elseif($_GET['page']=='contact-form'){
    include('contact-form.php');
}else{
    include('404.php');
}
?>

<footer>
<a href="http://www.epitech.eu"><IMG class="displayed" src="logo_epitech.png" alt="logo_epitech"></a>
</footer>
</html>