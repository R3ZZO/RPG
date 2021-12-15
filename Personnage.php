<?php 
abstract class Personnage
{
   private string $_nom;
   private string $_prenom;
   private int $_hp;
   private int $_level=1;
   protected int $_xp=0;


    public function __construct(string $nom, string $prenom, int $hp)
    {
        $this ->_nom=$nom;
        $this ->_prenom=$prenom;
        $this ->_hp=$hp;
    }

    public function niveau(): string
    {
        if($this->_xp >= 130)
        {
            $this->_hp += 40;
            return $this->_level = 5 ;
        }
        elseif ($this->_xp >= 90)
        {
            $this->_hp += 30;
            return $this->_level=4 ;
        }
        elseif ($this->_xp >= 50)
        {
            $this->_hp += 20;
            return $this->_level=3 ;
        }
        elseif ($this->_xp >= 20)
        {
            $this->_hp += 10;
            return $this->_level=2 ;
        }
        else
        {
            return $this->_level=1 ;
        }    
    }


    public function __toString()
    {
        return $this->_nom." ".$this->_prenom. " est actuellement niveau " .$this->niveau(). " et possède " .$this->_hp." Points de vie "; 
    }

    public function degatsPhysiquesRecu($degat) : string
    {
        $this->_hp -= $degat;
        if ($this->_hp <= 0){
            return $this->_nom. " a reçu " .$degat. " points de dégâts physiques, il ne lui reste plus de vie. La "
            .$this->_nom. " est K.O";
        } else {
            return $this->_nom. " a reçu " .$degat. " points de dégâts physiques, il lui reste " .$this->_hp. " points de vie";
        }
    }

    public function degatsMagiqueRecu($degat) : string
    {
        $this->_hp -= $degat;
        if ($this->_hp <= 0){
            return $this->_nom. " a reçu " .$degat. " points de dégâts physiques, il ne lui reste plus de vie. Le personnage "
            .$this->_nom. " est K.O";
        } else {
            return $this->_nom. " a reçu " .$degat. " points de dégâts physiques, il lui reste " .$this->_hp. " points de vie";
        }
    }



    
}

?>