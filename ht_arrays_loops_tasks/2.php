<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #2</h2></legend>
    <p>
        Дан массив с элементами 1, 20, 15, 17, 24, 35.
        С помощью цикла foreach найдите сумму элементов этого массива.
        Запишите ее в переменную $result.
    </p>
</fieldset>
<div>
    <?php
    $arr = [1, 20, 15, 17, 24, 35];
    $result = 0;
    foreach($arr as $item){
        $result += $item;
    }
    echo $result;
    ?>
</div>
</body>
</html>
