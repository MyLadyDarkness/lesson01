<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 30.09.2018
 * Time: 14:05
 */

$text_length = 50;

//раз мы определяем конец слова по пробелу, то все слова в данной строке ими заканчиваются
$text = "My name is David We were in a small villy near Chicago My cousin is getting married on david ";
$arrText = str_split($text); //превращаем текст в массив

$final_string; //итоговая строка

print_r("2 el ". $arrText[2] . "\n");

for ($i = $text_length; $i > 0; $i--)
    if ($arrText[$i] === " ") //вычисляем место нахождения пробелов, начиная с конца текста
    {
        $final_string = mb_strimwidth($text, 0, $i + 3, "..."); //обрезем строку по первый поавшийся пробел
        print_r($final_string);
        break;
    }


