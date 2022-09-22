<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 8 | Recep</title>
</head>

<body>
    <?php 

    $array = [11,11,5,2,12,6,7,8,1,10,9];

        function telGroteGetallen($array){
            $returnArray = [];
            for($i=0; $i < count($array); $i++){
                if($array[$i] > 10){
                    $returnArray[] = $array[$i];
                }
            }
            return array_sum($returnArray);
        }    

        echo "<pre>";
        print_r( telGroteGetallen( [10,20,20] ) );
        echo '<hr>';
        print_r ( telGroteGetallen( [9, 10, 11] ) );
        echo '<hr>';
        print_r ( telGroteGetallen($array) );
    ?>
</body>

</html>