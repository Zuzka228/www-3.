<?php
if (isset($_POST["vypocitat"])) {
    $sekundyCelkem = $_POST["sekundy"];

    $hodiny = floor($sekundyCelkem / 3600);
    $zbytek = $sekundyCelkem % 3600;
    $minuty = floor($zbytek / 60);
    $sekundy = $zbytek % 60;
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Převod času</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 650px; margin: 40px auto; padding: 0 16px; color: #222; }
        form { background: #f1f5fa; padding: 20px; border-radius: 10px; margin: 20px 0; }
        .vysledek { background: #fff0cc; padding: 18px; border-left: 5px solid #e3a128; border-radius: 8px; }
        label { display: block; margin: 14px 0; }
        input { display: block; width: 100%; box-sizing: border-box; padding: 9px; margin-top: 5px; }
        button { padding: 10px 16px; color: white; background: #2458a6; border: 0; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Převod času</h1>
    <form method="post">
        <label>Počet sekund:<input type="number" name="sekundy" min="0" step="1" required></label>
        <button type="submit" name="vypocitat">Převést čas</button>
    </form>
    <?php
    if (isset($_POST["vypocitat"])) {
        echo "<section class='vysledek'>";
        echo "<h2>Výsledek</h2>";
        echo "<p>Zadaný čas: " . $sekundyCelkem . " sekund</p>";
        echo "<p>" . $hodiny . " hodin, " . $minuty . " minut a " . $sekundy . " sekund</p>";
        echo "</section>";
    }
    ?>
</body>
</html>
