<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 9 | Recep</title>
</head>

<body>
    <?php
    
    $string = ["Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen."];

    function kleineWoorden($string){
        $arrayStr = explode(" " , $string);
        $teller = 0;

        foreach ($arrayStr as $string){
            if(strlen($string) < 4){
                $teller++;
            }
        }
    return $teller;
    }
        
    echo kleineWoorden("dit is een voorbeeld");
    echo '<hr>';
    echo kleineWoorden("a b c d");
    echo '<hr>';
    echo kleineWoorden("abcd");
    echo '<hr>';
    echo kleineWoorden($string[0]);

    ?>
</body>

</html>