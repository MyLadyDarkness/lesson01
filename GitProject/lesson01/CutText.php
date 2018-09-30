<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 30.09.2018
 * Time: 12:33
 */
$text_length = 50;
$text = "My name is David. We were in a small village n e a r Chicago. My cousin is getting married on david.";
$final_string; //итоговая строка

//print_r(iconv_strlen($text)); //отладочный вывод

if (iconv_strlen($text) > $text_length)
{
    $final_string = mb_strimwidth($text, 0, $text_length, "..."); //обрезаем строку и заменяем символы троетточием
    $final_string = str_replace(" ...", "...", $final_string); //если где-то в строке получилось троеточие после пробела, заменяем его на просто троеточие
}

print_r($final_string);


