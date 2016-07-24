<?php

$tdColor = ['background: yellow', 'background: black'];
$cols = 10;
$rows = 10;
$cnt = $rows;

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
    <p> первый вариант </p>
<?php
for($tr = 1; $tr <= $cols; $tr++){ ?>
    <tr>
    <?php
    for($td = 1; $td <= $rows; $td++){
        ?>
        <td style='<?= $cnt == $td ? $tdColor[1] : $tdColor[0] ?>'></td>
      <?php
    }
    $cnt--;
    ?>
  </tr>
<?php } ?>
</table>

<p> второй вариант без счетчика </p>
<table border="1">
<?php
for($tr = 1; $tr <= $cols; $tr++){ ?>
    <tr>
        <?php for($td = 1; $td <= $rows; $td++){ ?>
            <td style='<?= ($cols - $tr + 1) == $td ? $tdColor[1] : $tdColor[0] ?>'></td>
            <?php
        }
        ?>
    </tr>
<?php } ?>
</table>

</body>
</html>