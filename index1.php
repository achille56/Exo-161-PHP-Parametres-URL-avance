<?php

$prenom = strip_tags($_GET['prenom']);
$nom = strip_tags($_GET['nom']);
if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    echo "Bonjour $nom $prenom ";
}
else {
    echo "Il y a une erreur !";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="index1.php?nom=Nemare&prenom=Jean">index 1</a><br><br>
</body>

</html>




