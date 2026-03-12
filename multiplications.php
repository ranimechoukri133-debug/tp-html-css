<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Toutes les tables de multiplication</title>
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
<li><a href="multiplications.php" class="active">Multiplications</a></li>
<li><a href="mois.php">Mois</a></li>
</ul>
</nav>

</header>

<main>

<h2>Toutes les tables de multiplication</h2>

<?php

for($n = 1; $n <= 10; $n++){

    echo "<h3>Table de $n</h3>";

    for($i = 0; $i <= 10; $i++){

        $produit = $i * $n;

        echo "$i x $n = $produit <br>";
    }

    echo "<hr>";

}

?>

</main>

<footer>
<p>&copy; 2026 - TP HTML/CSS</p>
</footer>

</body>
</html>