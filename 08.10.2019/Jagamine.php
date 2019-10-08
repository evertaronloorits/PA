<?php
/** file name: nulliga-jagamise-vorm-php; ...*/
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
var_dump($number2);
// if data is empty
if(strlen($number1) > 0 and strlen($number2) > 0){
    // dividng by zero is not allowed
    if($number2 == 0) {
        echo 'Nulliga jagamine keelatud';
    } else {
        $result = $number1 / $number2;
}
  } else {
    echo 'Sisesta andmed uuesti!<br>';
    echo '< href="nulliga-jagamise-vorm.php">Siin</a>';
}
?>

