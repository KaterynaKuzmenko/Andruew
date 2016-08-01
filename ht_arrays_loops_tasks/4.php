<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #4</h2></legend>
    <p>
        Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
        помощью второго — столбец элементов.
        $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    </p>
</fieldset>
<div>
    <?php
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    foreach($arr as $key => $value){
        echo "$key<br>";
    }
    foreach($arr as $value){
        echo $value.'<br>';
    }
    ?>
</div>
</body>
</html>
