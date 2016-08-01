<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #9</h2></legend>
    <p>
        Выведите столбец чисел от 1 до 100.
    </p>
</fieldset>
<div>
    <?php
    echo "cycle 'for'<br>";
    for($i = 1; $i <= 100; $i++){
        echo $i.'<br>';
    }

    echo "<hr>cycle 'while'<br>";
    $i = 1;
    while($i <= 100){
        echo $i.'<br>';
        $i++;
    }
    ?>
</div>
</body>
</html>
