<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #16</h2></legend>
    <p>
        Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
        С помощью цикла foreach и оператора if выведите на экран столбец элементов массива,
        как показано на картинке.
        1, 2, 3
        4, 5, 6
        7, 8, 9
    </p>
</fieldset>
<div>
    <?php
    // first
    echo '#1';
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach($arr as $key => $element){
       echo $key % 3 == 0 ? '<br>' . $element : $element;
    }

    // second - in table
    echo "<hr> #2";
    echo '<table border="1">';
    echo '<tr>';
    foreach($arr as $key => $element){
        echo $key % 3 - 2 == 0 ? "<td> $element</td></tr>" : "<td>$element</td>";
    }
    echo '</tr>';
    echo '</table>';
    ?>
</div>
</body>
</html>