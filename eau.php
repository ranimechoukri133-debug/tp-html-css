<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Température de l'eau</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header>
<h1>TP HTML/CSS</h1>

<nav>
<ul>
<li><a href="index.html">Accueil</a></li>
<li><a href="pages/formulaire.html">Formulaire</a></li>
<li><a href="eau.php" class="active">Eau</a></li>
<li><a href="multiplication.php">Multiplication</a></li>
<li><a href="multiplications.php">Multiplications</a></li>
<li><a href="mois.php">Mois</a></li>
</ul>
</nav>

</header>

<main>

<h2>Température de l'eau</h2>

<?php

$temperature = 101;

if ($temperature < 0) {
echo "glace";
}
elseif ($temperature >= 0 && $temperature < 25) {
echo "froide";
}
elseif ($temperature >= 25 && $temperature < 50) {
echo "chaude";
}
elseif ($temperature >= 50 && $temperature < 100) {
echo "brulante";
}
else {
echo "vapeur";
}

?>

</main>

<footer>
<p>&copy; 2026 - TP HTML/CSS</p>
</footer>

</body>
</html>