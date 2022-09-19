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
    
    $PHPCijfers=[4,5,4,5,6,6,5,8,7,6,4,8];

    function onvoldoendes($array) {
        $returnArray= [];
          for($i= 0; $i < count($array); $i++){
            if($array[$i] < 5.5){
              $returnArray[] = $array[$i];
            }
          }
        return($returnArray);
      }
      
      echo "<pre>";
      print_r( onvoldoendes([6,6,7]) );
      echo '<hr>';
      print_r( onvoldoendes([6,3,6,7]) );
      echo '<hr>';
      print_r( onvoldoendes($PHPCijfers) );

    ?>
</body>

</html>