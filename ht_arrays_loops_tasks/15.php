<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #15</h2></legend>
    <p>
        Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
        элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
        5, 19, 13, 0, 10.
    </p>
</fieldset>
<div>
    <?php
    $arr = [4, 2, 5, 19, 13, 0, 10];
    $count = 0;
    foreach($arr as $element){
        $count++;
    }
    echo $count;

    // cycle 'while'
    /* echo '<hr>';
     * $cnt = 1;
     * while($cnt < count($arr)){
     *    $cnt++;
     * }
     * echo $cnt;
    */
    ?>
</div>
</body>
</html>
