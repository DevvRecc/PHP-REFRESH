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

    $array1 = [11,11,5,2,12,6,7,8,1,10,9];

        function telGroteGetallen($array1){
            $cijfers = '';
            for($i=0; $i > 10; $i++){
                if($array[$i] > 10){
                    $cijfers = $array[$i];
                }
            }
            return $cijfers;
        }
    

        echo "<pre>";
        echo telGroteGetallen( [10,20,20] );
        echo '<hr>';
        echo telGroteGetallen( [9, 10, 11] );
        echo '<hr>';
        echo telGroteGetallen($array1);
    ?>
</body>

</html>