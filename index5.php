<?php

if (isset($_GET['semaine'])) {
    echo strip_tags($_GET['semaine']) . "<br>";
}
else {
    echo "Il y a une erreur !";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="index5.php?semaine=12">index 5</a><br><br>
</body>

</html>
