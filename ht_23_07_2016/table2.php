<?php

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
        for($td = 1; $td <= $rows; $td++) {
            $style = ' style="background: yellow"';
            if ($tr % 2 != 0 and $td % 2 != 0 or $tr % 2 == 0 and $td % 2 == 0)
                $style = ' style="background: black"';
            echo "<td$style></td>";
        }
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>
