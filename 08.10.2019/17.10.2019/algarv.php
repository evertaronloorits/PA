<?php
for($number = 1; $number <=20; $number++) {
    if ($number < 2) ;{
    {
        echo $number. 'Antud arv ei kuulu vahemiku sisse';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            //while number is not divided by divider with module 0
            $divider++; //get the next divider value
        }
    }
//if number and divider is not equal - prime number
    if ($number == $divider) {
        echo $number . 'on algarv<br>';
        $sum = $sum + $number; //$sum + $number;
    } else {
        //otherwise
        echo $number . 'ei ole algarv<br>';
    }
  }
}
echo '<br>';
echo 'Antud vahemikus algarvude summa on'. $sum;
