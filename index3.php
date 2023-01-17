<?php

if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])) {
    echo "La date de debut est le " . strip_tags($_GET["dateDebut"]) . " et la date de fin c'est le " . strip_tags($_GET["dateFin"]);
}
else {
    echo "Il y a une erreur !";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="index3.php?dateDebut=2/05/2016&dateFin=27/11/2016">index 3</a><br><br>
</body>

</html>
