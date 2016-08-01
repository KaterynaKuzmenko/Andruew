<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #25</h2></legend>
    <p>
        Ваше задание создать массив, наполнить это случайными значениями (функция rand),
        найти максимальное и минимальное значение и поменять их местами.
    </p>
</fieldset>
<div>
    <?php

    for($i = 1; $i <= 10; $i++, $numbers[] = rand(1,100)){}

    // первый вариант
    echo 'min - ' . $min = min($numbers) . '<br>';
    echo 'max - ' . $max = max($numbers);
    /*
     * foreach($numbers as $key => $number){
     *     switch($number){
     *         case $min : $numbers[$key] = $max; break;
     *         case $max : $numbers[$key] = $min; break;
     *     }
     * }*/

    // второй вариант
    $min_int = 0x7FFFFFFF;
    $max_int = 0;
    echo '<pre>';
    print_r($numbers);
    foreach($numbers as $key => $number){
        if($number < $min_int){
            $min_int = $number;
            $min_key = $key;
        }elseif($number > $max_int){
            $max_int = $number;
            $max_key = $key;
        }
    }
    $numbers[$max_key] = $min_int;
    $numbers[$min_key] = $max_int;
    echo '<br>';
    print_r($numbers);

    ?>
</div>
</body>
</html>
