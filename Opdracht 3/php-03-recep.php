<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 3 | Recep</title>
</head>
<style>

    body{
        color: red;
        font-weight: bold;
    }

</style>

<body>
   
    <?php 

        for ($i = 1; $i < 21; $i++) {
            // echo $i . ' -' . ' ';
            if ($i >= 2){
                echo " - {$i}";
            }  else{
                echo $i;
            }
        }

        echo "<br>";


                $c = 1;
        while ( $c < 21 ) {
            if ($c >= 2){
                echo " - {$c}";
            }  else{
                echo $c;
            }
            $c++;
        }
        

    ?>

</body>

</html>