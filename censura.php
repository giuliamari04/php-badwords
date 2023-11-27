<?php
$frasePresa = $_GET["frase"];
$parolaCensurata = $_GET["parola"];
$nuovaFrase = str_replace($parolaCensurata,"***",$frasePresa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Badwords</title>
</head>
<body>
    <header></header>
    <main>
        <p>
            <?php echo $frasePresa ?>
        </p>
        <p>
            <?php echo $nuovaFrase ?>
        </p>
    </main>
    <footer></footer>
</body>
</html>
