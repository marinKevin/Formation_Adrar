<html>
    <head>
        <title>PHP - Exercices fonctions</title>
    </head>
    <body>
        <h1>PHP - Exercices fonctions</h1>
        <h2>Exercice 1</h2>
        <?php
            function substract($a, $b)
            {
                $result= $a - $b ;

                return $result ;
            }

            echo "Test de la soustraction de 7 - 3 (substract(3,7)) = " . substract(3,7);
        ?>

        <h2>Exercice 2</h2>
        <?php
            function arrondi($nb)
            {
                $result= round($nb) ;

                return $result ;
            }

            echo "Test de l'arrondi de 4.59 = " . arrondi(4.59);
        ?>

        <h2>Exercice 3</h2>
        <?php
            function additionne($a, $b, $c)
            {
                return $a + $b + $c;
            }

            echo "Combien vaut 12 + 13 + 17 ? " . additionne(12,13,17);
        ?>

        <h2>Exercice 4</h2>
        <?php
            function moyenne($a, $b, $c)
            {
                $result = ($a+$b+$c) / 3;
                
                return $result;
            }

            echo "Combien vaut la moyenne de 12, 13 et 17 ? " . moyenne(12,13,17);
        ?>

        <h2>Exercice 1.2 (avec typage)</h2>
        <?php
            function substractAvecTypage(float $a, float $b): float
            {
                $result= $a - $b ;

                return $result ;
            }

            echo "Test de la soustraction de 7 - 3 (substract(3,7)) = " . substractAvecTypage(3,7);
        ?>

        <h2>Exercice 2.2 (avec typage)</h2>
        <?php
            function arrondiAvecTypage(float $nb): int
            {
                $result= round($nb) ;

                return $result ;
            }

            echo "Test de l'arrondi de 4.59 = " . arrondi(4.59);
        ?>

        <h2>Exercice 3.2 (avec typage)</h2>
        <?php
            function additionneAvecTypage(int|float $a, int|float $b, int|float $c): int|float
            {
                return $a + $b + $c;
            }

            echo "Combien vaut 12 + 13 + 17 ? " . additionneAvecTypage(12,13,17);
        ?>

        <h2>Exercice 4.2 (avec typage)</h2>
        <?php
            function moyenneAvecTypage(float $a, float $b, float $c): float
            {
                $result = ($a+$b+$c) / 3;
                
                return $result;
            }

            echo "Combien vaut la moyenne de 12, 13 et 17 ? " . moyenneAvecTypage(12,13,17).'<br>';

            $nbr =2;
            var_dump($nbr);
            // Affichera "int(2)"
    
    ?>
	<h2>Fonction ne retournant rien (void)</h2>
        <?php
            function moyenneAvecTypageSansRetour(float $a, float $b, float $c): void
            {
                $result = ($a+$b+$c) / 3;
                
                echo "Combien vaut la moyenne de $a, $b et $c ? $result <br>";
            }

            moyenneAvecTypageSansRetour(12,13,17);

            $nbr =2;
            var_dump($nbr);
            // Affichera "int(2)"
    
    ?>
    
    <?php
    //commentaire sur une ligne

    /*
    -------------------------------------
    Commentaire sur plusieurs lignes
    -------------------------------------
    */

    /**
    * -------------------------------------
    * PHPDoc
    * -------------------------------------
    */
    ?>

    
    
    </body>
</html>