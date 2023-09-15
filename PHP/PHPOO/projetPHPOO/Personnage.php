<?php
class Personnage{
    public ?string $nom;
    public ?int $force;
    public ?int $defence;
    public ?int $vie;
    public function __construct(?string $_nom, ?int $_force, ?int $_defence, ?int $_vie){
        $this->nom = $_nom;
        $this->force = $_force;
        $this->defence = $_defence;
        $this->vie = $_vie;
    }
    public function attaquer($attaquant, $defenceur){
        $defenceur->vie -= ($attaquant->force - $defenceur->defence);
    }

}



?>