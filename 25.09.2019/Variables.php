<?php
// muutuja defineerimine
// $muutujaNimi = väärtus;

// Väärtused - andmed - andmetüübid
// Tekst - string - "info jutumärkides"
// Täisarvud - interger - 2, 7, 9, -15 jne
// Komaga arvud e. reaalarvud - float - 3.5 , 7.9 , -58.56 jne

$eesNimi = 'Evert';
$pereNimi = "Loorits";
$email = 'evert.aron.loorits@gmail.com';
$vanus = 19; // aastad, täisarv
$pikkus = 1.90; // meetrid, reaalarv
$kaal = 75; // kilogrammid, täisarv

echo 'Eesnimi: '.$eesNimi.'<br>';
echo 'Perenimi: '.$pereNimi.'<br>';
echo 'Email: '.$email.'<br>';
echo 'Vanus: '.$vanus.'<br>';
echo 'Pikkus: '.$pikkus.'<br>';
echo 'Kaal: '.$kaal.'<br>';

// Muutujate dünaamiline defineermimine
$kehamassiIndeks = $kaal / ($pikkus * $pikkus);
echo 'Kehamassiindeks on '.$kehamassiIndeks.'<br>';
