<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #20</h2></legend>
    <p>
        Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
        рядов, а не 5. <br><br>
        x<br>
        xx<br>
        xxx<br>
        xxxx<br>
        xxxxx
    </p>
</fieldset>
<div>
    <?php
    for($line = 1; $line <= 20; $line++){
        for($symbols = 1; $symbols <= $line; $symbols++){
            echo 'x';
        }
        echo '<br>';
    }
    ?>
</div>
</body>
</html>
