<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova-php-if</title>
</head>
<body>
    <h1>hey</h1>
    <form action="./script.php" method="get">

        <label for="nom">inserisci nome</label>
        <input type="text" name="nome">

        <label for="squadr">inserisci squadra</label>
        <input type="text" name="squadra">

        <button type="submit">invia</button>

    </form>
   <?php 

   $nome = $_GET ['nome'];
   $squadra = $_GET ['squadra'];
   
  if ($nome == 'luca'){

    if ($squadra == 'inter'){

        echo 'Luca è dell Inter da quando era un bambino';

    } else {

        echo 'Luca è uno sportivo';
    }

    } else {

        echo 'ciao ' . $nome;

    } 
  
   ?> 
</body>
</html>