<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #19</h2></legend>
    <p>
        Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
        текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
    </p>
</fieldset>
<div>
    <?php
    $week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $day = strftime('%A');
    foreach($week as $days){
        echo $days == $day ? "<i>$days</i><br>" : $days . '<br>';
    }
    ?>
</div>
</body>
</html>
