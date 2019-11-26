<?php
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<h1>Arvutused</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
<form>
    <h2>Kera</h2><br>
    Kera ruumala <input type="text" name="kera-raadius"><br><hr>
    <h2>Koonus</h2><br>
    Koonuse põhja raadius <input type="text" name="koonuse-raadius"><br>
    Koonuse kõrgus <input type="text" name="koonuse-kõrgus"><br><hr>
    <h2>Silinder</h2><br>
    Silindri põhja raadius <input type="text" name="silindri-raadius"><br>
    Silindri kõrgus <input type="text" name="silindri-kõrgus"><br>
    <input type="submit" value="Saada">
</form>
</body>
</html>
<?php
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
