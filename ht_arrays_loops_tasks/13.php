<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #13</h2></legend>
    <p>
        Вывести таблицу умножения.
    </p>
</fieldset>
<div>
    <table>
        <?php
        for($tr = 1; $tr <= 10; $tr++){
            echo '<tr>';
            for($td = 1; $td <= 10; $td++){
                echo $td == 1 || $tr == 1 ? $firstCols = '<th>' : $firstCols = '<td>';
                echo $firstCols . $tr * $td . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</div>
</body>
</html>