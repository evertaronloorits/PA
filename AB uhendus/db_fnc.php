<?php
// loome ühenduse andmebaasiga
function connection($host, $user, $pass, $dbname){
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if($link === false) {
        // veateade probleemi korral
        echo 'Probleem andmebaasi ühendamisega!<br>';
        exit;
    }
    // määrame utf-8
    mysqli_set_charset($link, 'urf-8');
    return $link; //tagastame edaspidiseks kasutamiseks
}
