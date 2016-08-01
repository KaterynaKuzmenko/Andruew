<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #26</h2></legend>
    <p>
        Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
        Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
        индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
        индекс.
    </p>
</fieldset>
<div>
    <?php

    $even = 1;
    for($i = 1, $arrayOdd =[]; $i <= 7; $i++, $numbers[] = rand(-100,100)){}
    foreach($numbers as $key => $number){
        if($number > 0 && $key % 2 == 0){
            $even *= $number;
        }elseif($number > 0 && $key % 2 != 0){
            $arrayOdd[$key] = $number;
        }
    }
    echo "Массив случайных чисел : <br>";
    print_r($numbers);
    echo "Произведение = $even<br>";
    echo "Элементы, с не парным индексом : <br>";
    foreach($arrayOdd as $oddKey => $value){
        echo "Ключ с элементом - [{$oddKey}] => {$value}<br>";
    }

    ?>
</div>
</body>
</html>
