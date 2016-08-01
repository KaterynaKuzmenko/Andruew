<?php

// task : Функцию, которая выводила статистику слов в тексте с указанием количества

function statisticsOfWords($text){
    if(!is_string($text))
        exit("Ops... I think it was not a string.");
    $textArray = explode(" ", $text);
    $cnt = 0;
    foreach($textArray as $repeatWords){
        foreach($textArray as $word){
            if($repeatWords == $word){
                $cnt++;
                $statistics[$repeatWords] = $cnt;
            }
        }
        $cnt = 0;
    }
    foreach($statistics as $word => $repeat){
        echo "Слово <b>' {$word} '</b> повторяется {$repeat} раз.<br>";
    }
}
$test = "Написать функцию, которая выводила статистику слов в тексте с указанием количества в тексте";
echo $test.'<br>';
$array = array(1,3,7);
statisticsOfWords($test);
