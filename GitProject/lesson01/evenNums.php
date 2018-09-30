<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 30.09.2018
 * Time: 15:59
 */
$justArr = [4,7,14,3,1,6,5,2,15];

$j = 0;
for ($i = 0; $i < count($justArr); $i++)
{
    if ($justArr[$i] % 2 === 0)
    {
        $finalArr[$j] = $justArr[$i];
        $j += 1;
    }
}

for ($i = 0; $i < count($finalArr); $i++)
    print_r($finalArr[$i] . " ");
