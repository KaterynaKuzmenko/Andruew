<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #12</h2></legend>
    <p>
        Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
        меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
        этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
    </p>
</fieldset>
<div>
    <?php
    echo "cycle 'for'<br>";
    for($n = 1000, $num = 0; $n >= 50; $n/=2, $num++){}
    echo $num;

    echo "<hr>cycle 'while'<br>";
    $n = 1000;
    $num = 0;
    while($n >= 50){
        $n /= 2;
        $num++;
    }
    echo $num;
    ?>
</div>
</body>
</html>
