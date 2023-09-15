<?php
class Admin extends Utilisateur{
    private ?array $bans;
    
    public function __construct(?string $nom, ?string $prenom){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->bans =[];
    }
    public function banUser(?Utilisateur $user){
        array_push($this->bans, $user);
        echo '<pre>';
        var_dump($this->bans);
        echo '</pre>';
    }
    public function getbans(){
        foreach($this->bans as $b){
            echo $b->__toString().'<br>';
        }
    }
    public function debanUser(?Utilisateur $user){
    //     METHODE1:
    // $find = array_search($user, $this->bans);
    // unset($this->bans[$find]);
            // METHODE2:
        foreach ($this->bans as $key => $value) {
            echo "<p>".$value->getNom()." ".$value->getPrenom()."</p>"; 
        }


    }

}
?>