<?php
    class Maison{
        public $nom;
        public $longeur;
        public $largeur;
        public $nbr_etages;
        public function __construct($_nom,$_longeur,$_largeur,$_nbr_etages){
            $this->nom = $_nom;
            $this->longeur = $_longeur;
            $this->largeur = $_largeur;
            $this->nbr_etages = $_nbr_etages;
        } 
        public function surface(){
            $calSurface = ($this->longeur * $this->largeur) * $this->nbr_etages;
            echo "<p>la surface de $this->nom est égale à $calSurface m2</p>";
        }
    }

    $manoir = new Maison('manoir',150,100,2);
    // echo $manoir->surface();

    require"Vehicule.php";
// Course de Vehicule
    $voiture = new Vehicule('Mercedes CLK', 4, 255);
    $moto = new Vehicule('Honda CBR', 2, 280);
    
    echo $voiture->detect();
    echo $moto->detect();

    echo $voiture->boost();
    echo $moto->boost();

    echo $voiture->plusrapide($moto);
    echo $moto->plusrapide($voiture);

// Arene de combat:
    // require "Personnage.php";
    // require "Combat.php";

    // $barbare = new Personnage("ConanLeBarbare", 30, 10, 100);
    // $chevalier = new Personnage("ChevalierAuxLions", 15, 20, 100);

    // $batailleDeLaPlage = new Combat(10, 0, 0);

    // echo $batailleDeLaPlage->lancerCombat($barbare, $chevalier);
?>