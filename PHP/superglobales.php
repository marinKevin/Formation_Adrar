<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "get" action="">
        <p>
            <input type="number" name="Nombre_de_bras" id="Nombre_de_bras">
            <label for="Nombre_de_bras"> Combien de bras avez-vous?</label><br>
            <input type="number" name="Nombre_chocolat" id="Nombre_chocolat">
            <label for="Nombre_chocolat"> Combien de chocolat voulez-vous?</label>
            <input type="submit" value="Envoyer">
        </p>
        <br>
        <br>
    </form>
    <form method="post" action="#">
        <p>
            <input type="number" step="0.01" name="prix" id="prix">
            <label for="prix"> Prix?</label><br>
            <input type="number" name="quantite" id="quantite">
            <label for="quantite"> Quantite?</label>
            <input type="number" name="tva" id="tva">
            <label for="tva"> Combien voulez vous vous faire voler par l'état ?</label>
            <input type="submit" value="Envoyer">
        </p>
    </form>   

    <?php
        // if(isset($_GET['Nombre_de_bras']) && isset($_GET['Nombre_chocolat'])){
        //     $bras = $_GET['Nombre_de_bras'];
        //     $chocolat = $_GET['Nombre_chocolat'];
        //     $totalChelou = $bras + $chocolat;
        //     echo $totalChelou;
        //     var_dump($totalChelou);
        // }
        if(isset($_POST['prix']) && isset($_POST['quantite']) && isset($_POST['tva'])){
            $prix = (int)$_POST['prix'];
            $quantite = $_POST['quantite'];
            $tva = $_POST['tva'];
            $totalTTC = $prix * (1+($tva/100) * $quantite);
            echo "Le prix total TTC est $totalTTC";
            var_dump($totalTTC);
        }       

    ?>
</body>
</html>