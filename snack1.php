<?php

$basket_day = [
    [
        "home_team" => "Hawks",
        "visit_team" => "Wizards",
        "home_score" =>  120,
        "visit_score" => 116
    ],
    [
        "home_team" => "Nets",
        "visit_team" => "Spurs",
        "home_score" =>  128,
        "visit_score" => 116
    ],
    [
        "home_team" => "Cavaliers",
        "visit_team" => "Celtics",
        "home_score" =>  102,
        "visit_score" => 94
    ],
    [
        "home_team" => "Mavericks",
        "visit_team" => "Pellicans",
        "home_score" =>  125,
        "visit_score" => 107
    ],
    [
        "home_team" => "Lakers",
        "visit_team" => "Rockets",
        "home_score" =>  124,
        "visit_score" => 122
    ],
    [
        "home_team" => "Bulls",
        "visit_team" => "Raptors",
        "home_score" =>  114,
        "visit_score" => 102
    ],
]


?>
<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 1</title>
</head>
<body>
    <main>
        <h1>8° giornata</h1>
        <hr>
        <div class="container">
            <?php for ($i = 0; $i < count($basket_day); $i++) { ?>

                <h2>partita N° <?php echo $i+1 ?></h2>
                <h4>
                    <?php echo $basket_day[$i]["home_team"] . " - " .  $basket_day[$i]["visit_team"] . " | " . $basket_day[$i]["home_score"] . "-" . $basket_day[$i]["visit_score"] ?>
                </h4>
                <hr>

            <?php } ?>

        </div>
    </main>

    
</body>
</html>