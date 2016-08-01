<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #6</h2></legend>
    <p>
        Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en,
        а русские — в массив $ru.
        $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
        $en = array('green', 'red','blue');
        $ru = array('зеленый', 'красный', 'голубой');
    </p>
</fieldset>
<div>
    <?php
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = [];
    $ru = [];
    foreach($arr as $enArr => $ruArr){
        $en[] = $enArr;
        $ru[] = $ruArr;
    }
    echo '$en - '; print_r($en);
    echo '<br>';
    echo '$ru - '; print_r($ru);
    ?>
</div>
</body>
</html>
