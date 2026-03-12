<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Table de multiplication</title>
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
<li><a href="multiplication.php" class="active">Multiplication</a></li>
<li><a href="multiplications.php">Multiplications</a></li>
<li><a href="mois.php">Mois</a></li>
</ul>
</nav>

</header>

<main>

<h2>Table de multiplication</h2>

<?php

$n = 4;

for($i = 0; $i <= 10; $i++) {

$produit = $i * $n;

echo "$i x $n = $produit <br>";

}

?>

</main>

<footer>
<p>&copy; 2026 - TP HTML/CSS</p>
</footer>

</body>
</html>