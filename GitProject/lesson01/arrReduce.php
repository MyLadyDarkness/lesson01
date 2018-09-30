<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 30.09.2018
 * Time: 15:44
 */

$justArr = [4,7,6,5,2];

function multiply ($carry, $item) //прошлая итерация $carry, текущая $item
{
    $carry *= $item;
    return $carry;
}

print_r(array_reduce($justArr, "multiply", 1));