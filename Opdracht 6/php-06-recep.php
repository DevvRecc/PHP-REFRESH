<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 6 | Recep</title>
</head>

<body>
    <?php 
    
        $cijfers=[4,5,4,5,6,6,5,8,7,6,4,8];

        function onvoldoendes($cijfers){
            $returnOnv=[];
            for($i = 0; $i < count($cijfers); $i++) {
                if ( $cijfers[$i] < 5 == 0) {
                    $returnOnv[]=$cijfers[$i];
                }
            }

            return($returnOnv);
        }

        echo '<pre>';
        echo '<hr>';
        echo onvoldoendes([6,6,7]);
        echo '<hr>';
        echo onvoldoendes([6,3,6,7]);
        echo '<hr>';
        echo onvoldoendes($cijfers);

    ?>
</body>

</html>