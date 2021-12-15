<?php
final class Guerrier extends Personnage
{
    private int $_atk=5;
    

    public function __construct(string $nom, string $prenom, int $hp, int $atk, int $xp)
    {
        parent::__construct($nom, $prenom, $hp);
        $this->_atk=$atk;

    }

    public function getAtk(){
        return $this->_atk;
    }

    public function attaqueCAC(): string
    {
            $this->_xp += 5;
            return "Le guerrier attaque et fait ".$this->_atk. " points  de dégat."."<br>".
            "Il augmente son expérience de ".$this->_xp. " points.";
    }

}
?>