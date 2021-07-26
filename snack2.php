<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

// controllo nome
if(empty($name) || strlen($name) < 3 ) {
    $ris_name = "ATTENZIONE! IL NOME NON E' COMPLETO (min 3 lett.)";
}
else {
    $ris_name = "ok";
}

// controllo email
if(strpos($email, "@") == false && empty($email)){
    $ris_email = "ATTENZIONE! L' EMAIL NON E' COMPLETA";
}
else{
    $ris_email = "ok";
}

// controllo age
if(is_numeric($age) != 1 || $age <= 0){
    $ris_age = "ATTENZIONE VALORE ETA' NON VALIDO!";
}
else {
    $ris_age = "ok";
}

// controllo generico
if ($ris_age ==="ok" && $ris_email ==="ok" && $ris_name ==="ok") {
    $ris_gen = "ACCESSO RIUSCITO..";
}
else {
    $ris_gen = "ACCESSO NEGATO..";
}


?>
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 2</title>
</head>
<body>

<main>
    <div class="container">
        <h1>DATA DETECTOR</h1>
        <h2>Inserisci i dati correttamente</h2>
        <hr>

        <form action="snack2.php" method="get">
            <input type="text" name="name" placeholder="inserisci il tuo nome.."><br>
            <input type="text" name="email" placeholder="inserisci la tua email.."><br>
            <input type="number" name="age" placeholder="inserisci la tua età.."><br>
            <input type="submit">
        </form>

        <hr>
        <span><strong>nome:</strong></span>
        <span>
            <?php  echo $ris_name?>
        </span>
        <br>

        <span><strong>email:</strong></span>
        <span>
            <?php  echo $ris_email?>
        </span>
        <br>

        <span><strong>age:</strong></span>
        <span>
            <?php  echo $ris_age?>
        </span>

        <H2>
            <?php ECHO $ris_gen ?>
        </H2>

    </div>
</main>
    
</body>
</html>