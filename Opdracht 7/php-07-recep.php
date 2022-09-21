<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 7 | Recep</title>
</head>

<body>
    <?php 
    


    function begroeting($naam) {

        $hour = date('H');

        if($hour < 12){
            echo "Goedenmorgen ".$naam;
        }   elseif($hour < 17){
            echo "Goedenmiddag ".$naam;
        }   else{
            echo "Goedenavond ".$naam;
        }

    }

    echo begroeting("Vasco");
    echo '<br>';
    echo begroeting("Jesse");
    echo '<br>';
    echo begroeting("Nadir");

    ?>
</body>

</html>