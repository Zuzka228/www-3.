<?php
if (isset($_POST["vypocitat"])) {
    $studenti = $_POST["studenti"];
    $ucitele = $_POST["ucitele"];
    $doprava = $_POST["doprava"];
    $cenaStudent = $_POST["cena_student"];
    $cenaUcitel = $_POST["cena_ucitel"];

    $vstupneStudenti = $studenti * $cenaStudent;
    $vstupneUcitele = $ucitele * $cenaUcitel;
    $celkem = $doprava + $vstupneStudenti + $vstupneUcitele;
    $naStudenta = $celkem / $studenti;
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cena školního výletu</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 650px; margin: 40px auto; padding: 0 16px; color: #222; }
        form, .vysledek { background: #f1f5fa; padding: 20px; border-radius: 10px; margin: 20px 0; }
        label { display: block; margin: 14px 0; }
        input { display: block; width: 100%; box-sizing: border-box; padding: 9px; margin-top: 5px; }
        button { padding: 10px 16px; color: white; background: #2458a6; border: 0; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Výpočet ceny školního výletu</h1>
    <form method="post">
        <label>Počet studentů:<input type="number" name="studenti" min="1" step="1" required></label>
        <label>Počet učitelů:<input type="number" name="ucitele" min="0" step="1" required></label>
        <label>Doprava za celou skupinu (Kč):<input type="number" name="doprava" min="0" step="0.01" required></label>
        <label>Vstupenka pro jednoho studenta (Kč):<input type="number" name="cena_student" min="0" step="0.01" required></label>
        <label>Vstupenka pro jednoho učitele (Kč):<input type="number" name="cena_ucitel" min="0" step="0.01" required></label>
        <button type="submit" name="vypocitat">Vypočítat cenu</button>
    </form>
    <?php
    if (isset($_POST["vypocitat"])) {
        echo "<section class='vysledek'>";
        echo "<h2>Přehled výletu</h2>";
        echo "<p>Studentské vstupenky: " . round($vstupneStudenti, 2) . " Kč</p>";
        echo "<p>Vstupenky pro učitele: " . round($vstupneUcitele, 2) . " Kč</p>";
        echo "<p>Doprava: " . round($doprava, 2) . " Kč</p>";
        echo "<p>Celková cena výletu: " . round($celkem, 2) . " Kč</p>";
        echo "<p>Na jednoho studenta připadá: " . round($naStudenta, 2) . " Kč</p>";
        echo "</section>";
    }
    ?>
</body>
</html>
