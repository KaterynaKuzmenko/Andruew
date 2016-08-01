<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #11</h2></legend>
    <p>
        Выведите столбец четных чисел в промежутке от нуля до 100.
    </p>
</fieldset>
<div>
    <?php
    echo "cycle 'for'<br>";
    for($i = 0; $i <= 100; $i += 2){
        if($i == 0) continue;
        echo $i.'<br>';
    }

    echo "<hr>cycle 'while'<br>";
    $i = 0;
    while($i < 100){
        $i += 2;
        echo $i . '<br>';
    }
    ?>
</div>
</body>
</html>
