<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #7</h2></legend>
    <p>
        Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
        выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
    </p>
</fieldset>
<div>
    <?php
    $arr = array(2, 5, 9, 15, 0, 4);
    foreach($arr as $number){
        if($number > 3 && $number < 10)
            echo $number;
    }
    ?>
</div>
</body>
</html>
