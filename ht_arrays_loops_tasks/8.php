<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #8</h2></legend>
    <p>
        Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
        '-1-2-3-4-5-6-7-8-9-'.
    </p>
</fieldset>
<div>
    <?php
    //первый вариант
    echo "#1<br>";
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach($arr as $key => $number){
        if(0  == $key)
            echo '-';
        echo $number . '-';
    }

    //второй вариант
    echo "<hr>#2<br>";
    $count = count($arr);
    foreach($arr as $number){
        echo '-'.$number;
        if($number == $count)
            echo'-';
    }
    ?>
</div>
</body>
</html>
