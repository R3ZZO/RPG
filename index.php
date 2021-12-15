<?php
    require "Personnage.php";
    require "Guerrier.php";
    require "Magicien.php";

    $guerrier = new Guerrier("Guerrier", "Conan", 100, 5, 0);
    $magicien = new Magicien("Magicien", "Zeus", 70, 5, 0);


    echo $guerrier."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->attaqueCAC(). "<br>"."<br>";
    echo $guerrier->degatsMagiqueRecu($magicien->getAtkm())."<br>";

    echo $magicien."<br>";
    echo $magicien->attaqueMagique()."<br>";
    echo $magicien->attaqueMagique()."<br>";
    echo $magicien->attaqueMagique()."<br>";
    echo $magicien->attaqueMagique()."<br>";
    echo $magicien->attaqueMagique()."<br>";
    echo $magicien->attaqueMagique()."<br>";
    echo $magicien->attaqueMagique()."<br>";
    echo $magicien->degatsMagiqueRecu($guerrier->getAtk())."<br>";
    echo $magicien->degatsMagiqueRecu($guerrier->getAtk())."<br>";
    echo $guerrier;
?>






<!-- Créer une classe Personnage avec un nom, un prenom,
 un nombre de points de vie (HP)
 et un nombre de points d'expérience (EXP)
Créer une classe Guerrier qui hérite de Personnage, 
et qui possède un nombre de points d'attaque (ATK)
Créer une classe Magicien qui hérite de Personnage 
et qui possède un nombre de points de magie (MP)
Le Guerrier peut attaquer ! Quand il attaque, 
il occasionne des dégats égaux à ses points d'attaque 
et gagne 5 points d'expérience !
Le Magicien peut lancer un sort ! Quand il le fait, 
il perd 5 points de magie mais gagne 10 points d'expérience !
Chaque personnage possède un niveau (qui démarre à 1), 
qui augmente en fonction de l'expérience reçue : 
20 pts XP => niveau 2
50 pts XP => niveau 3
90 pts XP => niveau 4
130 pts XP => niveau 5
Une méthode __toString donnera l'état complet d'un 
Personnage en fonction de sa classe ! -->