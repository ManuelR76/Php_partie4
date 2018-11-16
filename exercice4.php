<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        echo $number1. '|';
        echo $number2.' . ';
        function compareNumber($number1, $number2)
                {
                if ($number1 > $number2) {
                    echo $number1.' est plus grand que le second nombre';
                } else if ($number1 < $number2) {
                    echo $number1.' est plus petit que '.$number2;
                } else {
                    echo 'les deux nombres sont identiques';
                }
        }
                echo compareNumber($number1, $number2)
        ?>
    </body>
</html>