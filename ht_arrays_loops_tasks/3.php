<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #3</h2></legend>
    <p>
        Дан массив с элементами 26, 17, 136, 12, 79, 15.
        С помощью цикла foreach найдите сумму квадратов элементов этого массива.
        Результат запишите переменную $result.
    </p>
</fieldset>
<div>
    <?php
    $arr = [26, 17, 136, 12, 79, 15];

    // первый вариант
    echo "#1<br>";
    $result = 0;
    foreach($arr as $item){
        $result += $item *= $item;
    }
    echo $result;

    // второй вариант
    echo "<hr>#2<br>";
    $result = 0;
    foreach($arr as $item){
        $result += $item ** 2;
    }
    echo $result;

    // третий вариант
    echo "<hr>#3<br>";
    $result = 0;
    foreach ($arr as $item) {
        $result += pow($item,2);
    }
    echo $result;
    ?>
</div>
</body>
</html>
