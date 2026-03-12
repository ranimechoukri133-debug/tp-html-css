<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>description temperature eau</title>
</head>
<body>
    <?php
    
$temperature = 101;
   
if ($temperature < 0) {
    echo "glace";
} elseif ($temperature >=0 && $temperature < 25) {
    echo "froide";
} elseif ($temperature >= 25 && $temperature < 50) {
    echo "chaude";
} else if ($temperature >= 50 && $temperature < 100) {
    echo "brulante";
} else {
    echo "vapeur";
}

    ?>
</body>
</html>