<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function fullSentence($age, $gender) {
           echo ($age >=18 && $gender == 'homme') ? 'Vous êtes une homme et vous êtes majeur' : 'Vous êtes un homme et vous êtes mineur';
           echo ($age >=18 && $gender == 'femme') ? 'Vous êtes une femme et vous êtes majeur' : 'Vous êtes un femme et vous êtes mineur';  
        }     
        fullSentence(30, homme);
        ?>
    </body>
</html>