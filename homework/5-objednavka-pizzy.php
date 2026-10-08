<?php
if (isset($_POST["vypocitat"])) {
    $nazev = $_POST["nazev"];
    $pocetPizz = $_POST["pocet_pizz"];
    $cenaPizza = $_POST["cena_pizza"];
    $pocetNapoju = $_POST["pocet_napoju"];
    $cenaNapoje = $_POST["cena_napoje"];
    $doprava = $_POST["doprava"];
    $pocetLidi = $_POST["lidi"];

    $cenaPizz = $pocetPizz * $cenaPizza;
    $cenaNap = $pocetNapoju * $cenaNapoje;
    $celkem = $cenaPizz + $cenaNap + $doprava;
    $naOsobu = $celkem / $pocetLidi;
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Objednávka pizzy</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 650px; margin: 40px auto; padding: 0 16px; color: #222; }
        form, .uctenka { background: #f1f5fa; padding: 20px; border-radius: 10px; margin: 20px 0; }
        label { display: block; margin: 14px 0; }
        input { display: block; width: 100%; box-sizing: border-box; padding: 9px; margin-top: 5px; }
        button { padding: 10px 16px; color: white; background: #2458a6; border: 0; border-radius: 5px; }
        .celkem { font-size: 1.25em; font-weight: bold; color: #12623b; }
    </style>
</head>
<body>
    <h1>Objednávka pizzy</h1>
    <form method="post">
        <label>Název pizzy:<input type="text" name="nazev" required></label>
        <label>Počet pizz:<input type="number" name="pocet_pizz" min="1" step="1" required></label>
        <label>Cena jedné pizzy (Kč):<input type="number" name="cena_pizza" min="0" step="0.01" required></label>
        <label>Počet nápojů:<input type="number" name="pocet_napoju" min="0" step="1" required></label>
        <label>Cena jednoho nápoje (Kč):<input type="number" name="cena_napoje" min="0" step="0.01" required></label>
        <label>Cena dopravy (Kč):<input type="number" name="doprava" min="0" step="0.01" required></label>
        <label>Počet lidí:<input type="number" name="lidi" min="1" step="1" required></label>
        <button type="submit" name="vypocitat">Vytvořit účtenku</button>
    </form>
    <?php
    if (isset($_POST["vypocitat"])) {
        echo "<section class='uctenka'>";
        echo "<h2>Účtenka</h2>";
        echo "<ul>";
        echo "<li>" . $pocetPizz . "× pizza " . $nazev . ": " . round($cenaPizz, 2) . " Kč</li>";
        echo "<li>" . $pocetNapoju . "× nápoj: " . round($cenaNap, 2) . " Kč</li>";
        echo "<li>Doprava: " . round($doprava, 2) . " Kč</li>";
        echo "</ul>";
        echo "<p class='celkem'>Celková cena: " . round($celkem, 2) . " Kč</p>";
        echo "<p>Na jednu osobu: " . round($naOsobu, 2) . " Kč</p>";
        echo "</section>";
    }
    ?>
</body>
</html>
