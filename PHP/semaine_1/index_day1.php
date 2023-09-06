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
    // echo "Yooolooo3";
    // $variableInt = 5;
    // echo var_dump($variableInt);
    // $variableString = "kevin";
    // echo var_dump($variableString);
    // $variableBool = TRUE;
    // echo var_dump($variableBool);

    // exo1
    // $a = 12;
    // $b = 10;
    // $total = $a + $b;
    // echo "la somme des variable est $total";

    // // exo2
    // $a = 5;
    // $b = 3;
    // $c = $a + $b;
    // echo "les valeur sont A=$a, B=$b, C=$c";
    // $a = 2;
    // echo "A vaut maintenant $a";
    // $c = $b - $a;
    // echo " A=$a, B=$b, C=$c";

    // // exo3
    // $a = 15;
    // $b = 23;
    // echo "A=$a et B=$b";
    // $c = $a;
    // $a = $b;
    // $b = $c;

    // echo "aprés échange A=$a et B=$b";

    // // exo4
    // function calcul($prixHT, $nombre, $tva)
    // {
    //      $totalTTC = ($prixHT * $nombre) * (1 + $tva);
    //      echo " le total fonction est de $totalTTC";
    // }

    // calcul(10, 5, 0.2)

    // // Conatenation1
    // $a = "bonjour";
    // echo 'La variable $a'." a une valeur de $a";
    
    // // Concatenation2
    // $a = "bon";
    // $b = "jour";
    // $c = 10;
    // echo $a.$b.$c+1;


    // // Concatenation3
    // $a = "bonjour";
    // echo "<p>$a l'adrar<p>" 

    function calcul2($a,$b){
        $result = $a - $b;
        return $result;
    }

    // pour arrondire un nombre a virgule on peut utiliser la fonction "round" ou "number_format"
    function arrondis($a){
        return number_format($a);
    }
    $girrondis = arrondis(25.78521);
    echo $girrondis;

    function trois($z,$e,$r){
        $result = $z + $e + $r;
        return $result ;
    }
    $sum = trois(1,1,1);
    echo $sum;

    function moyenne($w,$x,$v){
        $sum = ($w +$x + $v)/3;
        return $sum;
    }
    
    
    
    ?>
</body>
</html>
