<?php
final class Magicien extends Personnage
{
    private int $_mp=0;
    private int $_atkm=5;
 

    public function __construct(string $nom, string $prenom, int $hp, int $atkm, int $xp)
    {
        parent::__construct($nom, $prenom, $hp);
        $this->_atk=$atkm;

    }

    public function getAtkm()
    {
        return $this->_atkm;
    }

    public function getMp()
    {
        return $this->_mp;
    }

    public function attaqueMagique(): string
    {
            $this->_xp += 10;
            $this->_mp -=5;
            return "Le mage lance un sort et fait ".$this->_atkm. " points  de dégat magique."."<br>".
            "Il augmente son expérience de ".$this->_xp. " points."."<br>".
            "Il perd " .$this->_mp. " points de magie";
    }

    


}
?>


