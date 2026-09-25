<?php
$nazev="Produkt";
$cena=20;
$kusy=30;
$cedopr=200;
echo "Cena produktu bez dopravy:".($cena*$kusy);
echo "Cena s dopravou:".($cena*$kusy+200);
echo "Cena za kus v prumeru:".(($cena*$kusy+200)/$kusy);