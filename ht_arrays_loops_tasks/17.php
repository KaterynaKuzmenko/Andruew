<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #17</h2></legend>
    <p>
        Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
        месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
    </p>
</fieldset>
<div>
    <?php
    $arr = ['January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
            ];
    $month = strftime('%B');
    foreach($arr as $mon){
        if($mon == $month)
            echo "<b>$mon</b>";
        else
            echo $mon;
        echo '<br>';
    }

    /* alt
    foreach($arr as $mon){
        if($mon == strftime('%B'))
            $mon = "<b>$mon</b>";
        echo $mon . '<br>';
    }
    */
    ?>
</div>
</body>
</html>
