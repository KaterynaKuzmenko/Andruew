<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #10</h2></legend>
    <p>
        Выведите столбец чисел от 11 до 33.
    </p>
</fieldset>
<div>
    <?php
    /*
    если имеется ввиду вывод таким образом
    for($i = 11; $i <= 33; $i++){
        echo $i.'<br>';
    }
    */

    echo "cycle 'for'<br>";
    for($i = 1; $i <= 35; $i++){
        if($i >= 11 && $i <= 33)
            echo $i.'<br>';
    }

    echo "<hr>cycle 'while'<br>";
    $i = 1;
    while($i <= 35){
        if($i >= 11)
            echo $i.'<br>';
        if($i == 33)
            break;
        $i++;
    }
    ?>
</div>
</body>
</html>
