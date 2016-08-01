<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #28</h2></legend>
    <p>
        Вывести таблицу умножения с помощью двух циклов for.
    </p>
</fieldset>
<div>
    <?php
    $row = 10;
    $cols = 10;
    echo "<table border='1'>";
    for($tr = 1; $tr <= $row; $tr++){
        echo '<tr>';
        for($td = 1; $td <= $cols; $td++){
           echo $tr == 1 || $td == 1 ? '<th>'. $tr * $td . '</th>' : '<td>'. $tr * $td . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</div>
</body>
</html>
