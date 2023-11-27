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
    <main class="container d-flex justify-content-center flex-column align-items-center " style="height:100vh">
    <div class="bg-primary w-50 p-3 rounded-2 ">
         <form action="censura.php" method="GET">
            <label for="frase" class="form-control-plaintext text-light">Inserisci la frase intera</label>
            <input type="text" class="form-control pb-5"  name="frase" placeholder="frase intera" >

            <label for="parola" class="form-control-plaintext text-light">Inserisci la parola da censurare</label>
            <input type="text" class="form-control" name="parola"placeholder="parola censurata" >
            <button type="submit" class="btn btn-light my-3"> invia </button>
        </form>
    </div>
       
    </main>
    <footer></footer>
</body>
</html>