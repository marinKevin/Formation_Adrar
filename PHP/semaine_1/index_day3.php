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
    // LES TABLEAUX:

    
    function fifty(){
        $array = [];
        for($i =0;$i<=50;$i++){
            $array[$i] = rand(-100,100);
        }
        foreach($array as $key => $value){
            echo '<br>';
            echo "$key => $value";
        }
        return $array;
    }
    
    $array50 = fifty();

    function recup(array $tab){
        $biggest = 0;
        // var_dump($tab);
        for($i =0;$i<=50;$i++){
            if($tab[$i]>$biggest){
                $biggest = $tab[$i];
            }
        }
        echo "le plus grand est $biggest";
    }
    recup($array50);

 

    function moyenne(array $tab){
        $sum = 0;
        for($i =0;$i<=50;$i++){
            $sum += $tab[$i];
        }
        return $sum/50;
    }
    echo "la moyenne est ".moyenne($array50);

    function recup2(array $tab){
        $smallest = 0;
        for($i =0;$i<=50;$i++){
            if($tab[$i]<$smallest){
                $smallest = $tab[$i];
            }
        }
        echo "le plus petit est $smallest";
    }
    recup2($array50);

//    $top = array_search(max($array50));
//     echo "le plus grand en trichan est $top";
    $bigArray = range(0,100);
    
    function isPremier(int $nbr):bool{
        if($nbr<2){
                echo "ce n'est pas un nombre premier";
            }else{


            }
            
        }
    }
    grosTableau();
    


    ?>
</body>
</html>