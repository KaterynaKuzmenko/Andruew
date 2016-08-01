<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #23</h2></legend>
    <p>
        Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
        пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
        2, 3, т. е. 6.
    </p>
</fieldset>
<div id="form">
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <p>Числа типа float вводятся с пробелом между числами '1.5 2 3.4'</p>
        <input type="text" name="number" required>
        <br>
        <br>
        <input type="submit" name="submit" value="Посчитать">
    </form>
</div>
<div>
    <?php

     //finished
    if($_POST){
        $arrayNumbers = explode(" ", str_replace(',', '.' ,strip_tags(trim($_POST['number']))));
        foreach($arrayNumbers as $element){
            if(!is_numeric($element))
                exit('Please enter numbers! I can\'t count - ' . $element);
        }
        $sum = 0;
        if(count($arrayNumbers) > 1){
            foreach($arrayNumbers as $key => $number){
                $sum += $number;
                echo $key == count($arrayNumbers)-1 ? $number.' = ' : $number.' + ';
            }
        }else{
            for($n = 0, $strLenNumber = strlen($arrayNumbers[0]); $n < $strLenNumber; $n++){
                $sum += $arrayNumbers[0][$n];
                echo $n == ($strLenNumber - 1) ? $arrayNumbers[0][$n].' = ' : $arrayNumbers[0][$n].' + ';
            }
        }
        echo $sum;
    }

    /*
    // cycle foreach
    if($_POST){
        $sum = 0;
        if(!is_numeric($_POST['number']))
            exit('Please enter integer! You given \''. $_POST['number'].'\'!');
        $number = str_split(strip_tags(trim($_POST['number'])));
        foreach($number as $num){
            $sum += $num;
        }
        echo $sum;
    }

    // alt cycle for
    echo '<hr>';
    if($_POST){
        $sum = 0;
        if (!is_numeric($_POST['number']))
            exit('Please enter integer! You given \'' . $_POST['number'] . '\'!');
        $number = strip_tags(trim($_POST['number']));
        for ($i = 0; $i <= (strlen($number) - 1); $i++) {
             $sum += $number{$i};
        }
        echo $sum;
    }

    // alt cycle while
    echo '<hr>';
    $i = 0;
    $sum = 0;
    if($_POST) {
        if(!is_numeric($_POST['number']))
            exit ('Enter integer! You given \''. $_POST['number'].'\'!');
        $number = strip_tags(trim($_POST['number']));
        while ($i <= strlen($number) - 1) {
            $sum += $number{$i};
            $i++;
        }
        echo $sum;
    }
    */

    ?>
</div>
</body>
</html>