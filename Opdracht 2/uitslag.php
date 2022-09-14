<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uitslag | Recep</title>
</head>

<body>

    <h3>Jouw uitslag:</h3>

<?php

    if (isset($_POST['name']) && isset($_POST['name2'])){
            $num=$_POST['name'];
            $num2=$_POST['name2'];
            echo $_POST['name'] . ' x ' . $_POST['name2'] . ' = '.  $num*$num2;
        }
        
        else{
            echo '';
        }

?>

</body>

</html>

