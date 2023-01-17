<?php

if (isset($_GET['age'])) {
    echo "Le paramètre age existe ";
}
else {
    echo "Le paramètre age n'existe pas !";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="index2.php?nom=Nemare&prenom=Jean">Retour index 1</a><br><br>
</body>

</html>