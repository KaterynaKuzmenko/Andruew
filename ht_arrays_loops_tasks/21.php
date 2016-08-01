<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #21</h2></legend>
    <p>
        Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
        рядов, а не 5.<br><br>
        1<br>
        22<br>
        333<br>
        4444<br>
        55555
    </p>
</fieldset>
<div>
    <?php
    for($i = 1; $i <= 9; $i++){
        for($n = 1; $n <= $i; $n++){
            echo $i;
        }
        echo '<br>';
    }
    ?>
</div>
</body>
</html>
