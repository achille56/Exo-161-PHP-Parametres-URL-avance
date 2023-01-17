<?php

if (isset($_GET['langage']) && isset($_GET['serveur'])) {
    echo "Le langage utilisé est le " . strip_tags($_GET['langage']). " et le serveur c'est " . strip_tags($_GET['serveur']) . "<br>";
}
else {
    echo "Il y a une erreur !";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="index4.php?langage=PHP&serveur=LAMP">index 4</a><br><br>
</body>

</html>

