<?php 
$operator = $_GET['operator'];
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$total = 0;

if ($operator == '+') {
    $total = $num1 + $num2;
    echo"Penjumlahan : ";
    echo"$num1 + $num2 = $total";
} elseif ($operator == '-') {
    $total = $num1 - $num2;
    echo"Pengurangan : ";
    echo"$num1 - $num2 = $total";
} elseif ($operator == '*') {
    $total = $num1 * $num2;
    echo"Perkalian : ";
    echo"$num1 x $num2 = $total";
} elseif ($operator == '/') {
    $total = $num1 / $num2;
    echo"Pembagian : ";
    echo"$num1 / $num2 = $total";
}
?>