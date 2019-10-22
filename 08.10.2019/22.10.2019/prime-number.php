<?php
//define function
function isPrimenumber($number) {
    $result = '';
    if ($number < 2) {
        $result = $number. 'Antud arv ei kuulu vahemiku sisse';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            //while number is not divided by divider with module 0
            $divider++; //get the next divider value
        }
//if number and divider is not equal - prime number
        if ($number == $divider) {
            $result = $number . 'on algarv<br>';
        } else {
            //otherwise
           $result = $number . 'ei ole algarv<br>';
        }
    }
}

isPrimenumber(rand(0,1000));