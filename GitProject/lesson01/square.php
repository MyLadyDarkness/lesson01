<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 30.09.2018
 * Time: 16:13
 */
$justArr = [4,7,14,3,1,6,5,2,15];

function square($arr)
{
for ($i = 0; $i < count($arr); $i++)
    $arr[$i] *= $arr[$i];
return $arr;
}

print_r(square($justArr));