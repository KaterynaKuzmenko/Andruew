<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #18</h2></legend>
    <p>
        Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
        выходные дни следует вывести жирным.
    </p>
</fieldset>
<div>
    <?php
    $week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    foreach($week as $key => $day){
        if($key > 4){
            echo "<b>$day</b>";
        }else{
            echo $day;
        }
        echo '<br>';
    }

    // alt
    /*
    foreach($week as $day){
        echo $day == 'Saturday' || $day == 'Sunday' ? "<b>$day</b><br>" : $day.'<br>';
    }
    */
    ?>
</div>
</body>
</html>
