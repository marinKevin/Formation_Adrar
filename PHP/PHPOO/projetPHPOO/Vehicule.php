<?php
    class Vehicule{
        private ?string $nomVehicule;
        private ?int $nbrRoue;
        private ?int $vitesse;
        public function __construct(?string $_nomVehicule, ?int $_nbrRoue, ?int $_vitesse){
            $this->nomVehicule = $_nomVehicule;
            $this->nbrRoue = $_nbrRoue;
            $this->vitesse = $_vitesse;
        }
        public function getNom():?string{
            return $this->nomVehicule;
        }
        public function setNom(?string $nouveauNom):void{
            $this->nomVehicule = $nouveauNom;
        }
        public function getRoue():?string{
            return $this->nbrRoue;
        }
        public function setRoue(?string $nouveauNbr):void{
            $this->nbrRoue = $nouveauNbr;
        }
        public function getVitesse():?string{
            return $this->vitesse;
        }
        public function setVitesse(?string $nouvelleVitesse):void{
            $this->vitesse = $nouvelleVitesse;
        }
        public function detect(){
            if($this->nbrRoue > 2){
                echo "$this->nomVehicule est une voiture";
            }else{
                echo "$this->nomVehicule est une moto";
            }
        }
        public function boost(){
            $this->vitesse += 50;
            echo "$this->nomVehicule accelére a $this->vitesse kmh";
        }
        public function plusRapide($autreVehicule){
            if($this->vitesse > $autreVehicule->vitesse){
                echo "$autreVehicule->nomVehicule est le plus rapide avec une vitesse de $this->vitesse kmh";
            }else{
                echo "$autreVehicule->nomVehicule est le plus rapide avec une vitesse de $autreVehicule->vitesse kmh";
            }
        }
    }

?>