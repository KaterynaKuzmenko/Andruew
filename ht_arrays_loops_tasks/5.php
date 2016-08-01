<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #5</h2></legend>
    <p>
        Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'.
        С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
        долларов.'.
    </p>
</fieldset>
<div>
    <?php
    $arr = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
    foreach($arr as $name => $wage){
        echo "$name — зарплата $wage долларов. <br>";
    }
    ?>
</div>
</body>
</html>
