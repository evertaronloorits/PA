<?php
$temperatuur = -15;
$background = ''; // page background
if ($temperatuur < 0) {
    $background = 'bg-cold';
} else if ($temperatuur > 10) {
    $background = 'bg-warm';
} else {
    $background = 'bg-normal';
}
//var_dump ($background);
echo '
<!doctype html>
<html lang="en">
<head>
<meta charset = "utf-8">
<style>
body
 .bg-cold { background-color #
    





