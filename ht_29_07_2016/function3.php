
<?php

// task : Функцию, которая выводила текст, но вместо смайликов ":)" (несколько смайликов) вставляла изображения смайлов

function showSmile($text){
    if(!is_string($text))
        return "Ops... I think it was not a string.";
    $img = "<img src=\"http://ic.pics.livejournal.com/minski_gaon/19886911/93542/93542_900.png\" alt=\"smile\" style=\"width: 30px\">";
    return $text = str_replace(":)", $img , $text);
}

$test = "Функцию, которая выводила текст, но вместо смайликов \":)\" (несколько смайликов) :) вставляла изображения смайлов :):)";
echo $result = showSmile($test);