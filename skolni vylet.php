<?php
$pocetstu=15;
$pocetucit=2;
$dopr_za_skupinu=200;
$vstup_pro_stud=30;
$vstup_pro_ucit=50;
$celkova= $pocetstu*$vstup_pro_stud+$vstup_pro_ucit*$pocetucit+$dopr_za_skupinu;

echo "Celkova cena pro studenty je:" +($pocetstu*$vstup_pro_stud);
echo "Celkova cena pro ucitele:" +($pocetucit*$vstup_pro_ucit);
echo "Celkova cena vyletu:" +$celkova;
echo "Kdyz studentu budou hradit vsechno, kazdy zaplati:"+ $celkova/$pocetstu;