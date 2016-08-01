<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #14</h2></legend>
    <p>
        Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
        проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
        выведите на экран 'Есть!', иначе выведите 'Нет!'.
    </p>
</fieldset>
<div>
    <?php
    $e = 3;
    $arr = array(4, 2, 5, 19, 13, 0, 10);
    $msg = '';
    foreach($arr as $value){
        if($value == $e){
            if($e == 2 or $e == 3 or $e == 4){
                $msg = 'Есть!';
                break;
            }
        }else{
            $msg = 'Нет!';
        }
    }
    echo $msg;
    ?>
</div>
</body>
</html>
