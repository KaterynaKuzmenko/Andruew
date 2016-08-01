<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #22</h2></legend>
    <p>
        Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
        xx<br>
        xxxx<br>
        xxxxxx<br>
        xxxxxxxx<br>
        xxxxxxxxxx
    </p>
</fieldset>
<div>
    <?php

    for($i = 0; $i <= 10; $i +=2){
        for($j = 1; $j <= $i; $j++){
            echo 'x';
        }
        echo '<br>';
    }

    /*
    for($line = 1; $line <= 5; $line++){
        for($symbols = 1; $symbols <= $line; $symbols++){
            echo 'xx';
        }
        echo '<br>';
    }
    */
    ?>
</div>
</body>
</html>
