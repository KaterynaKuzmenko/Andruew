<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend><h2>Task #1</h2></legend>
    <p>
        Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
        С помощью цикла foreach выведите эти слова в столбик.
    </p>
</fieldset>
<div>
    <?php
    $arr = ['html', 'css', 'php', 'js', 'jq'];
    foreach($arr as $item){
        echo "{$item}<br>";
    }
    ?>
</div>
</body>
</html>
