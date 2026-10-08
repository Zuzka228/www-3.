<?php
if (isset($_POST["vypocitat"])) {
    $kilometry = $_POST["kilometry"];
    $litry = $_POST["litry"];
    $cenaZaLitr = $_POST["cenaZaLitr"];

    $spotreba = $litry / $kilometry * 100;
    $cenaPaliva = $litry * $cenaZaLitr;
    $cenaKilometru = $cenaPaliva / $kilometry;
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulačka spotřeby automobilu</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 680px; margin: 40px auto; padding: 0 16px; color: #222; }
        form { background: #f1f5fa; padding: 20px; border-radius: 10px; margin: 20px 0; }
        label { display: block; margin: 14px 0; }
        input { display: block; width: 100%; box-sizing: border-box; padding: 9px; margin-top: 5px; }
        button { padding: 10px 16px; color: white; background: #2458a6; border: 0; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { text-align: left; padding: 10px; border: 1px solid #ccd4df; }
        th { background: #e5ecf5; }
    </style>
</head>
<body>
    <h1>Kalkulačka spotřeby automobilu</h1>
    <form method="post">
        <label>Ujetá vzdálenost (km):<input type="number" name="kilometry" min="0.01" step="0.01" required></label>
        <label>Spotřebované palivo (litry):<input type="number" name="litry" min="0" step="0.01" required></label>
        <label>Cena jednoho litru paliva (Kč):<input type="number" name="cenaZaLitr" min="0" step="0.01" required></label>
        <button type="submit" name="vypocitat">Vypočítat</button>
    </form>
    <?php
    if (isset($_POST["vypocitat"])) {
        echo "<h2>Výsledky</h2>";
        echo "<table>";
        echo "<tr><th>Ukazatel</th><th>Výsledek</th></tr>";
        echo "<tr><td>Průměrná spotřeba</td><td>" . round($spotreba, 2) . " l / 100 km</td></tr>";
        echo "<tr><td>Cena spotřebovaného paliva</td><td>" . round($cenaPaliva, 2) . " Kč</td></tr>";
        echo "<tr><td>Cena jednoho kilometru</td><td>" . round($cenaKilometru, 2) . " Kč / km</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
