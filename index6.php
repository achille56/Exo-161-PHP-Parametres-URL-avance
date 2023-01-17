<?php

if (isset($_GET['batiment']) && isset($_GET['salle'])) {
    echo "Batiment " . strip_tags($_GET['batiment']). " et salle ". strip_tags($_GET['salle']) . "<br>";
}
else {
    echo "Il y a une erreur !";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="index6.php?batiment=12&salle=101">index 6</a><br><br>
</body>

</html>
