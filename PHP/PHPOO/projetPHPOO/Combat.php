<?php
    class Combat{
        public ?int $nbrTour;
        public ?int $scoreJoueur1;
        public ?int $scoreJoueur2;
        public function __construct(?int $_nbrTour, ?int $_scoreJoueur1, ?int $_scoreJoueur2){
            $this->nbrTour = $_nbrTour;
            $this->scoreJoueur1 = $_scoreJoueur1;
            $this->scoreJoueur2 = $_scoreJoueur2;
        }
        public function lancerCombat($joueur1, $joueur2){
            $it =1;
            echo "<h2>Bataille de la plage</h2><br>";
            while(($joueur1->vie >0 && $joueur2->vie >0) || $this->nbrTour >0){
                echo "<h3>Tour $it</h3><br>";
                
                $joueur1->attaquer($joueur1, $joueur2);
                echo "<h4> $joueur1->nom Attaque!</h4>";

                echo $joueur1->nom ." ". $joueur1->vie . "PV<br>";
                echo $joueur2->nom ." ". $joueur2->vie . "PV<br>";
                if ($joueur2->vie <=0){
                    echo "<h4>Le gagnant est $joueur1->nom !</h4>";
                    // this->scoreJoureur1 ++;
                    break;
                }
                $joueur2->attaquer($joueur2, $joueur1);
                echo "<h4> $joueur2->nom Attaque!</h4>";

                echo $joueur1->nom ." ". $joueur1->vie . "PV<br>";
                echo $joueur2->nom ." ". $joueur2->vie . "PV<br>";
                if ($joueur1->vie <=0){
                    echo "<h4>Le gagnant est $joueur2->nom !</h4>";
                    break;
                }
                --$this->nbrTour;
                ++ $it;
            }

        } 
    }

?>