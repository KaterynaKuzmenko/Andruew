<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #24</h2></legend>
    <p>
        Вам нужно разработать программу, которая считала бы количество вхождений
        какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
        442158755745 встречается 4 раза.
    </p>
</fieldset>
<div id="form">
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="number" placeholder="Enter numbers">
        <br>
        <input type="text" name="foundNumber" placeholder="Found number (not surely)">
        <br>
        <input type="submit">
    </form>
</div>
<div>
    <?php
    if($_POST){
        // упрощенный вариант для одного числа
        $arrNumber = str_split($_POST['number']);
        $count = 0;
        foreach($arrNumber as $key => $number){
            if($number == $_POST['foundNumber']){
                $count++;
            }
        }
        echo 'The '. $_POST['foundNumber'].' of repeats '. $count;
        echo'<br>';

        //количество повторений для каждого
        $countNumber = str_split(strip_tags(trim($_POST['number'])));
        foreach($countNumber as $number){
            $cnt = 0;
            foreach($countNumber as $repeatNumber){
                if($number == $repeatNumber){
                    $cnt++;
                    $repeatArray[$number] = $cnt;
                }
            }
        }
        foreach($repeatArray as $number => $repeat){
            echo 'Number '.$number.' repeats '.$repeat.'<br>';
        }
    }
    ?>
</div>
</body>
</html>
