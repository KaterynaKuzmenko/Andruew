<?php

// task : Функцию, которая принимала в качестве параметра текст, а возвращала текст со словами в обратном порядке

function textRevers($text){
    if(!is_string($text))
        return "Ops... I think it was not a string.";
    return $text = implode(" ", array_reverse(explode(" ", $text)));
}

$test = 'Создать функцию, которая принимала в качестве параметра текст, а возвращала текст со словами в обратном порядке';
$integer = 10;
$array = [1, 2, 3, 4, 5, 'вышел заяц погулять'];

echo $result = textRevers($test);
