<?php
//echo '<pre>';
//print_r($_GET);
//echo '</pre>';

function keraRuumala($raadius){
    return 4 * pi() * pow($raadius, exp2); // 4 pi raadius

}
function koonuseRuumala($raadius, $korgus){
    $pohjaPindala = pi() * pow($raadius, exp2);
    return (1 / 3) * $pohjaPindala * $korgus;
}
function silinderRuumala($raadius, $korgus)
{
    $pohjaPindala = pi() * pow($raadius, exp2);
    return $pohjaPindala * $korgus;
}
// arvutame ja väljastame tulemused
// vormi andmed
$keraRaadius = $_GET['kera-raadius'];
$koonuseRaadius = $_GET['koonuse-raadius'];
$koonuseKõrgus = $_GET['koonuse-kõrgus'];
$silindriRaadius = $_GET['silindri-raadius'];
$silindriKõrgus = $_GET['silindri-kõrgus'];

//arvutused
$keraRuumala = keraRuumala($keraRaadius);
$koonuseRuumala = koonuseRuumala($koonuseRaadius, $koonuseKõrgus);
$silindriRuumala = silindriRuumala($silindriRaadius, $silindriKõrgus);

echo 'Kera raadiusega '. $keraRaadius.' ruumala = ' . $keraRuumala . '.<br>';
echo 'Koonus raadiusega'. $koonuseRaadius.'ja kõrgusega' .$koonuseKõrgus .' ruumala = '.$koonuseRuumala.'.<br>';

echo $_SERVER['PHP_SELF'];


