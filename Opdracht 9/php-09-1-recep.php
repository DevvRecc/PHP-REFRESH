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

    function kleineWoorden($lengte, $string){
        $arrayStr = explode(" " , $string);
        $teller = 0;

        foreach ($arrayStr as $string){
            if(strlen($string) < $lengte){
                $teller++;
            }
        }
    return $teller;
    }
        
    echo kleineWoorden(4,"dit is een voorbeeld");
    echo '<hr>';
    echo kleineWoorden(3,"dit is een voorbeeld");
    echo '<hr>';
    echo kleineWoorden(1,"dit is een voorbeeld");
    echo '<hr>';
    echo kleineWoorden(0,"dit is een voorbeeld");
    echo '<hr>';
    echo kleineWoorden(2,"a b c d");
    echo '<hr>';
    echo kleineWoorden(6,"abcde");
    echo '<hr>';
    echo kleineWoorden(4,$string[0]);
    echo '<hr>';
    echo kleineWoorden(3,$string[0]);	
    echo '<hr>';
    echo kleineWoorden(10,$string[0]);

    ?>
</body>

</html>