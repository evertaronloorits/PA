<?php
//define function
function isPrimenumber($number) {
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
            $result = true;
        } else {
            //otherwise
           $result = false;
        }
    }
    return $result;
}
isPrimenumber(rand(0,1000));

//define function , which use the boolean result of isPrimenumber and
// show the text - is prime or is not prime with the number value
function isPrimeNumberDescription($number, $isPrime) {
    if($isPrime) {
        echo $number . ' on algarv<br>';
    } else {
        echo $number. 'ei ole algarv<br>';
    }
}
$number = rand(1,100);
isPrimeNumberDescription($number, isPrimenumber($number));

