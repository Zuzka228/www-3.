```php
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nazev = $_POST["nazev"];
    $pocet = $_POST["pocet"];
    $cena = $_POST["cena"];
    $pocet_napoju = $_POST["pocet_napoju"];
    $cena_napoje = $_POST["cena_napoje"];
    $cena_dopravy = $_POST["cena_dopravy"];
    $pocet_zkazniku = $_POST["pocet_zkazniku"];

    $cena_pizzy = $cena * $pocet;
    $cena_napoju_celkem = $cena_napoje * $pocet_napoju;
    $celkova_cena = $cena_pizzy + $cena_napoju_celkem + $cena_dopravy;
    $cena_na_cloveka = $celkova_cena / $pocet_zkazniku;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Objednávka pizzy</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1> Objednávka pizzy</h1>

    <form method="post">

        <label>Název pizzy:</label>
        <input type="text" name="nazev" required>

        <label>Počet pizz:</label>
        <input type="number" name="pocet" required>

        <label>Cena jedné pizzy:</label>
        <input type="number" name="cena" required>

        <label>Počet nápojů:</label>
        <input type="number" name="pocet_napoju" required>

        <label>Cena jednoho nápoje:</label>
        <input type="number" name="cena_napoje" required>

        <label>Cena dopravy:</label>
        <input type="number" name="cena_dopravy" required>

        <label>Počet zákazníků:</label>
        <input type="number" name="pocet_zkazniku" required>

        <button type="submit">Vypočítat objednávku</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ?>

        <div class="vysledek">

            <h2>Výsledek</h2>

            <?php
            echo "Všechny pizzy " . $nazev . " stojí: " . $cena_pizzy . " Kč<br>";
            echo "Všechny nápoje stojí: " . $cena_napoju_celkem . " Kč<br>";
            echo "Celková cena objednávky: " . $celkova_cena . " Kč<br>";
            echo "Cena na jednoho člověka: " . $cena_na_cloveka . " Kč";
            ?>

        </div>

        <?php
    }
    ?>

</div>

</body>
</html>
```
<?php
