<?php

// NOTE: Stric Typing in PHP
// Enable stric typing in PHP
declare(strict_types=1);

// specify $number as integer
// specify $akar as integer
// specify return type `: int` as integer
function pangkat(int $number, int $akar): int {
  $hasil = $number ** $akar;
  return $hasil;
}

// correct output
echo pangkat(2, 10)."<br>";

// arg "5" as string and will error
// echo pangkat(2, "5");

// with PHP 8, you can specify multiple data types on args
// with pipe |
function luasPersegi(int|float $sisi): int|float {
  return 4 * $sisi;
}

// correct int
$persegi = luasPersegi(10);
echo "Luas persegi adalah $persegi <br>";

$persegi2 = luasPersegi(5.5);
echo "Luas persegi2 adalah $persegi2 <br>";
