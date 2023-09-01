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
    // function somme(int $a, int $b, int $c):int{
    //     $sum = $a + $b + $c;
    //     return $sum;
    // } 
    // echo somme(1,2,3);

    // exo1:
    // function test_positif_negatif(int $a):bool{
    //     if($a>=0){
    //         echo "positif"
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }

    // echo test_positif_negatif(-5);
    // var_dump(test_positif_negatif(-5));
    // var_dump(test_positif_negatif(5));

    // exo 2
    // function plusGrand(int $a, int $b, int $c):int{
    //     if($a>$b && $a>$c){
    //         echo "le nombre le plus grand est $a";
    //         return $a;
    //     }
    //     else if($b>$a && $b>$c){
    //         echo "le nombre le plus grand est $b";
    //         return $b;
    //     }
    //     else{
    //         echo "le nombre le plus grand est $c";
    //         return $c;
    //     }
    // }

    // plusGrand(1,2,3);

    //     exo3
    // function plusPetit(int $a, int $b, int $c):int{
    //     if($a<$b && $a<$c){
    //         echo "le nombre le plus petit est $a";
    //         return $a;
    //     }
    //     else if($b<$a && $b<$c){
    //         echo "le nombre le plus petit est $b";
    //         return $b;
    //     }
    //     else{
    //         echo "le nombre le plus petit est $c";
    //         return $c;
    //     }
    // }
    // plusPetit(1,2,3);

    // function clalculePrixFinal(float $a):int{
    //     if($a>2000){
    //         $a *= 0.9;
    //         echo "le prix avec ristourn est $a";
    //         return $a;
    //     }
    //     else if($a>1000){
    //         $a *= 0.8;
    //         echo "le prix avec ristourn est $a";
    //         return $a;
    //     }
    //     else{
    //         echo "le prix reste le même donc $a";
    //         return $a;
    //     }
    // }

    // clalculePrixFinal(10000);
    // clalculePrixFinal(1500);
    // clalculePrixFinal(100);

    // dernier exercice condition 
    // function bissextile(int $a):bool{
    //     if($a<1582){
    //         echo "l'année n'est pas bissextile";
    //         return false;
    //     }else{
    //         if($a%100 == 0){
    //             if($a%400 == 0){
    //                 echo "l'année est bissextile";
    //                 return true;
    //             }                
    //             else{
    //                 echo "l'année n'est pas bissextile";
    //                 return false;
    //             }
    //         }else if($a%4 == 0){
    //                 echo "l'année est bissextile";
    //                 return true;
    //         }else{
    //             echo "l'année n'est pas bissextile";
    //             return false;
            
    //         }
             
            
    //     }
    // };
    // bissextile(2023);
    
// function rechercheAleatoire (int $n):int{
//     $iteration = 0;
//     $recherche = 0;
//     while($n !== $recherche){
//         $recherche =  rand(0, 999);
//         ++ $iteration;
//     }
//     echo $iteration;
//     return $iteration;
// }
// rechercheAleatoire(550);

// function tableauChelou(){
//     $affichage = 0;
//     for($j =0;$j<=6;$j++){
//         for($i =0;$i<10;$i++){
//             echo $affichage;
//         }
//         echo ("<br>");
//         ++ $affichage;
//     }
// }
// tableauChelou();

function pyramideChelou(){
    $affichage = 1;
    $largeur = 0;
    for($i =0;$i<=7;$i++){
        for($j =0;$j<=$largeur;$j++){
            echo $affichage;
        }
        echo ("<br>");
        ++ $affichage;
        ++ $largeur;
    }
}
pyramideChelou();





    ?>
</body>
</html>