<?php
// raadius_do.php
// defineerime muutuja $raadius ja omistame kasutaja poolt sisestatud väärtuse
$raadius = $_GET['raadius'];
// väljastame saadud väärtuse ekraanil
echo 'Sisestatud raadius on '.$raadius.'<br>';
// arvutused
// ringi pindala
$ringiPindala = 3.14 * $raadius * $raadius;
// ringi ümbermõõt
$ringiÜmbermõõt = 3.14 * 2 * $raadius;
// muutujate andmete tüübi ja väärtuste kontroll
var_dump($ringiPindala);
var_dump($ringiÜmbermõõt);
// var_dump($ringiPindala);
// var_dump($ringiÜmbermõõt);
// väljastame tulemused
echo 'Ringi pindala on '.$ringiPindala.'<br>;
echo 'Ringi ümbermõõt on '.$ringiÜmbermõõt.'<br>;





