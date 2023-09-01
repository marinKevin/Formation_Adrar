<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['nbr1']) && isset($_POST['operateur']) && isset($_POST['nbr2'])){
            $nbr1 = (int)$_POST['nbr1'];
            $operateur = $_POST['operateur'];
            $nbr2 = (int)$_POST['nbr2'];
            if($operateur == "+"){
                $total1 = $nbr1 + $nbr2;
                echo "$nbr1 $operateur $nbr2 = $total1";
            }else if($operateur == "-"){
                $total2 = $nbr1 - $nbr2;
                echo "$nbr1 $operateur $nbr2 = $total2";
            }else if($operateur == "/"){
                $total3 = $nbr1 / $nbr2;
                echo "$nbr1 $operateur $nbr2 = $total3";
            }else if($operateur == "*"){
                $total4 = $nbr1 * $nbr2;
                echo "$nbr1 $operateur $nbr2 = $total4";
            }
        }else{
            echo "vos données sont incorectes !"
        }

        
    ?>
</body>
</html>