<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es2_Pizzutilo</title>
</head>
<body>
    <?php
        $capitale = 200000;
        $tasso = 8;
        $numGiorni = 15;
        $risultato;

        echo "<p>Il capitale è: $capitale €</p>";
        echo "<p>Il tasso è: $tasso %</p>";
        echo "<p>Il numero dei giorni: $numGiorni</p>";

        $risultato = ($capitale * $tasso * $numGiorni) / 36500;

        echo "<h2 style='color:green'> L'interesse calcolato è di $risultato € </h2>";


    ?>
    
</body>
</html>