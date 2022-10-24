<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>convert inches to centimeters</h1>
        
        <form name="form" action="" method="get">
            <input type="text" name="subject" id="subject" value>
        </form>
        <?php
        
        $ins = $_GET['subject'];
        $cents = $ins * 2.54;
        $cents = round($cents)
        
        ?>


        <p> <?php echo $ins ?> inches is equal <?php echo $cents ?> centimeters</p>

        <?php

$arr = [20, 11, 16, 44];

$er = count($arr);

for ($i = 0; $i<$er; $i++) {
$element = $arr[$i];
?>

<p> <?php  echo $element ?> </p>
<?php } ?>

    </body>
</html>