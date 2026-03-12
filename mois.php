<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Nombre de jours du mois</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header>
<h1>TP HTML/CSS</h1>

<nav>
<ul>
<li><a href="index.html">Accueil</a></li>
<li><a href="pages/formulaire.html">Formulaire</a></li>
<li><a href="eau.php">Eau</a></li>
<li><a href="multiplication.php">Multiplication</a></li>
<li><a href="multiplications.php">Multiplications</a></li>
<li><a href="mois.php" class="active">Mois</a></li>
</ul>
</nav>

</header>

<main>

<h2>Nombre de jours dans le mois</h2>

<?php

$mois = 2;
$annee = 2000;

switch($mois){

case 4:
case 6:
case 9:
case 11:
echo "30 jours";
break;

case 2:

if($annee % 4 == 0){
echo "29 jours (année bissextile)";
}

else{
echo "28 jours";
}

break;

default:
echo "31 jours";

}

?>

</main>

<footer>
<p>&copy; 2026 - TP HTML/CSS</p>
</footer>

</body>
</html>