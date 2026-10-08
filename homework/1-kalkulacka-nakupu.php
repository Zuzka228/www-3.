<?php
if (isset($_POST["vypocitat"])) {
    $produkt = $_POST["produkt"];
    $cena = $_POST["cena"];
    $pocet = $_POST["pocet"];
    $doprava = $_POST["doprava"];

    $cenaZbozi = $cena * $pocet;
    $celkem = $cenaZbozi + $doprava;
    $prumernaCena = $celkem / $pocet;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulacka</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 650px; margin: 40px auto; padding: 0 16px; color: #222; }
        form, .vysledek { background: #f1f5fa; padding: 20px; border-radius: 10px; margin: 20px 0; }
        label { display: block; margin: 14px 0; }
        input { display: block; width: 100%; box-sizing: border-box; padding: 9px; margin-top: 5px; }
        button { padding: 10px 16px; color: white; background: #2458a6; border: 0; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Kalkulačka nákupu</h1>
    <form method="post">
        <label>Název produktu:<input type="text" name="produkt" required></label>
        <label>Cena jednoho kusu (Kč):<input type="number" name="cena" min="0" step="0.01" required></label>
        <label>Počet kusů:<input type="number" name="pocet" min="1" step="1" required></label>
        <label>Cena dopravy (Kč):<input type="number" name="doprava" min="0" step="0.01" required></label>
        <button type="submit" name="vypocitat">Vypočítat cenu</button>
    </form>

    <?php
    if (isset($_POST["vypocitat"])) {
        echo "<section class='vysledek'>";
        echo "<h2>Shrnutí objednávky</h2>";
        echo "<p>Produkt: " . $produkt . "</p>";
        echo "<p>Zboží bez dopravy: " . round($cenaZbozi, 2) . " Kč</p>";
        echo "<p>Celková cena: " . round($celkem, 2) . " Kč</p>";
        echo "<p>Průměrná cena jednoho kusu: " . round($prumernaCena, 2) . " Kč</p>";
        echo "</section>";
    }
    ?>
</body>
</html>
