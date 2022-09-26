<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 10 | Recep</title>
</head>

<body>
    
    <?php

        function breekAf($lengte , $zin){

            $letter = substr($zin , $lengte -1 , 1);
            $letterAfter = substr($zin , $lengte   , 1);
            $string = substr($zin , 0 , $lengte);
            $words = str_word_count($string); 
            $stringArr = explode(" " , $zin);
        
            if($letter != " " && $letterAfter != " " ){
                $words = $words -1;
            }
        
            $zinArr = array_slice($stringArr, 0 , $words);
            $zin = implode(" " , $zinArr);
        
            return $zin;
        }
            
        echo breekAf(32, "Deze student is erg goed in programmeren in PHP");
        echo '<hr>';
        echo breekAf(18, "Deze student is erg goed in programmeren in PHP");
        echo '<hr>';
        echo breekAf(19, "Deze student is erg goed in programmeren in PHP");
        echo '<hr>';
        echo breekAf(20, "Deze student is erg goed in programmeren in PHP");
        echo '<hr>';
        echo breekAf(21, "Deze student is erg goed in programmeren in PHP");
        echo '<hr>';
        echo breekAf(24, "Deze student is erg goed in programmeren in PHP");
        echo '<hr>';
        echo breekAf(3, "Deze student is erg goed in programmeren in PHP");
        echo '<hr>';
   
    ?>

</body>

</html>