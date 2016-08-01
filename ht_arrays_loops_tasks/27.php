<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #27</h2></legend>
    <p>
        Создать генератор случайных таблиц.
        Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
        Есть список цветов, в массиве:
        $colors = array('red','yellow','blue','gray','maroon','brown','green').
        Необходимо создать скрипт, который по заданным условиям выведет таблицу
        размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные
        случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. <br><br>

        Пример результата:<br>

    <table>
        <tr>
            <td style='background-color:blue'>2033</td>
            <td style='background-color:brown'>11696</td>
            <td style='background-color:green'>712</td>
            <td style='background-color:yellow'>32583</td>
            <td style='background-color:red'>157</td>
        </tr>
        <tr>
            <td style='background-color:gray'>25694</td>
            <td style='background-color:red'>19724</td>
            <td style='background-color:brown'>18487</td>
            <td style='background-color:brown'>8462</td>
            <td style='background-color:red'>4412</td>
        </tr>
        <tr>
            <td style='background-color:gray'>4673</td>
            <td style='background-color:gray'>14450</td>
            <td style='background-color:maroon'>16748</td>
            <td style='background-color:gray'>3505</td>
            <td style='background-color:maroon'>5299</td>
        </tr>
        <tr>
            <td style='background-color:red'>16873</td>
            <td style='background-color:gray'>21370</td
            ><td style='background-color:green'>22482</td>
            <td style='background-color:red'>28576</td>
            <td style='background-color:blue'>26060</td>
        </tr>
        <tr>
            <td style='background-color:yellow'>28955</td>
            <td style='background-color:gray'>8804</td>
            <td style='background-color:gray'>26825</td>
            <td style='background-color:red'>31471</td>
            <td style='background-color:blue'>22283</td>
        </tr>
    </table>
    </p>
</fieldset>
<div id="form">
    <form action="#" method="post">
        <input type="text" name="row" placeholder="Введите количество строк">
        <input type="text" name="cols" placeholder="Введите количество столбцов">
        <input type="submit">
    </form>
</div>
<div>
    <?php
    $row = 5;
    $cols = 5;
    if($_POST){
        if(!is_numeric($_POST['row']) || !is_numeric($_POST['cols']))
            exit('Введенные данные должны быть числовыми!');
        $row = strip_tags(trim($_POST['row']));
        $cols = strip_tags(trim($_POST['cols']));
    }
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    $countColor = count($colors) - 1;
    echo "<table border=\"1\">";
    for($tr = 1; $tr <= $row; $tr++){
        echo '<tr>';
        for($td = 1; $td <= $cols; $td++){
            echo "<td style='background: {$colors[rand(0,count($colors)- 1)]}'>". rand() . "</td>";
        }
        echo '</tr>';
    }
    echo "</table>";
    ?>
</div>
</body>
</html>
