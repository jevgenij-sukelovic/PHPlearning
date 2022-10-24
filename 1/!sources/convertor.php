<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в сантиметры</h1>
        <?php
        
        $ins = 20;
        $cents = $ins * 2.54;
        $cents = round($cents)
        
        ?>


        <p> <?php echo $ins ?> дюймов nax = <?php echo $cents ?> сантиметров.</p>

     


    </body>
</html>