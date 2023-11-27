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
        <form action="censura.php" method="GET">
            <!-- <label for="frase">frase intera</label> -->
            <input type="text" name="frase">

            <!-- <label for="parola">parola da censurare</label> -->
            <input type="text" name="parola">
            <button type="submit"> invia </button>
        </form>
    </main>
    <footer></footer>
</body>
</html>