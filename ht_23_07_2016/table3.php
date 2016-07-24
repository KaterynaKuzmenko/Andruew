<?php

$tdColor = ['yellow', 'black'];
$cols = 10;
$rows = 10;

?>
<html>
<head>
    <style>
        table{
            width: 250px;
            height: 250px;
        }
    </style>
</head>
<body>
<table border="1">
    <?php
    for($tr = 1; $tr <= $cols; $tr++){
        echo '<tr>';
        for($td = 1; $td <= $rows; $td++){
            if($tr == $td) {
                echo "<td style='background: $tdColor[1]'></td>";
            }else {
                echo "<td style='background: $tdColor[0]'></td>";
            }
        }
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>