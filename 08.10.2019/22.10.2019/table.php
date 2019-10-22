<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td {
            border: 1px #333 solid; border-collapse: collapse; text-align: center;
        }
        th, td {
            width: 50px;
            padding: 5px;
        }
    </style>
    <title>Table</title>
</head>
<body>

<?php
// define function tableheader
// function use 4 parameters - header text values
// function output is table header with text values

function tableHeader($val1, $val2, $val3, $val4) {
    echo '<thead>';
    echo '<tr>';
    for($col = 1; $col < 5; $col++) {
        echo '<th>' . ${val.$col} . '</th>';
    }
    echo '</tr>';
    echo '</thead>';
}
// define function tableBody
// function use 2 parameters - table row and column number
// function output is the table body
// for data use the random numbers
function tableBody($rowNumber, $colNumber){
    echo '<tbody>';
    for($row = 1; $row <= $rowNumber; $row++){
        echo '<tr>';
        for($col = 1; $col <= $colNumber; $col++){
            echo '<td style="color: #??????">';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
}
// define function table
// function use 2 parameters - table row and column number
// function output is the table
function table($rowNumber, $colNumber) {
    echo '<table>';
    tableHeader('see', 'on', 'tabeli', 'päis');
    tableBody($rowNumber, $colNumber);
    echo '</table>';
}
table(5, 4);


