<?php
$frasePresa = $_GET["frase"];
$parolaCensurata = $_GET["parola"];
$nuovaFrase = str_replace($parolaCensurata,"***",$frasePresa);
$lunghezza = strlen($frasePresa);
$lunghezzaCensura = strlen($nuovaFrase);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title> PHP Badwords</title>
</head>
<body class="bg-info">
    <header></header>
    <main class="container d-flex justify-content-center flex-column align-items-center align-content-center" style="height:100vh">
        <div class="bg-primary p-3 rounded-2 ">
           <p>
            <h2 class="text-light">La tua frase completa è...</h2>
            <h3><?php echo $frasePresa ?></h3>
            <p class="text-light">Lunghezza: <?php echo $lunghezza ?></p>
        </p>
        <p>
            <h2 class="text-light">La nuova frase con la parola "<?php echo $parolaCensurata ?>" censurata è...</h2>
            <h3><?php echo $nuovaFrase ?></h3>
            <p class="text-light">Lunghezza: <?php echo $lunghezzaCensura ?></p>
        </p>  
        </div>
       
    </main>
    <footer></footer>
</body>
</html>
