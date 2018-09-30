<?php
/**
 * Created by PhpStorm.
 * User: Тьма
 * Date: 30.09.2018
 * Time: 11:03
 */

//массив имен может быть любым, но и текст придется подбирать соответствующий
$arrNames = ["David", "Keane", "Susan"];

$text = "My name’s David. We’re in a small village near Chicago. 
My cousin’s getting married on david. My father david and her father David are twins. 
A lot of relatives are here for the wedding party - susan, keane, david. We’re very busy. 
My uncle’s friend susan is making palov. My sister Susan and Aunt Keane are making cakes. 
My mother’s helping her niece with her wedding dress. 
My grandparents keane and david are here too. They’re very old. They live in Chicago. 
I’m making a video for Keane and susan and taking photos. It’s great. I want to be a reporter.";

//преобразуем массив имен так, чтобы каждое было написано с маленькой буквы
for ($i = 0; $i < count($arrNames); $i++)
{
    $arrSearch[$i] = strtolower($arrNames[$i]);
}

//print_r($arrSearch); //отладочный вывод

//ищем количество вхождений
for ($i = 0; $i < count($arrSearch); $i++)
{
   print_r($arrNames[$i] . " " . substr_count($text, $arrSearch[$i]). "\n");
}