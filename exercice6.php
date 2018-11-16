<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function fullSentence($lastname, $firstname, $age) {
            echo 'Bonjour ' .  $lastname . " " . $firstname . " " . 'tu as ' . $age . ' ans.';
        }     
        fullSentence('ROMERO', 'Manuel', 30);
        ?>
    </body>
</html>