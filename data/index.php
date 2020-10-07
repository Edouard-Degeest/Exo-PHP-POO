<?php
class Heros
{

    public $hp;
    private $atk;
    public $def;
    public $name;

    public function afficherTout()
    {
         echo "<br> <br>",'The player ',$this->name,' have ' ,$this->hp ,' HP';
         echo "<br>";
         echo 'The player ' ,$this->name,' have ' ,$this->atk ,' ATK';
         echo "<br>";
         echo 'The player ' ,$this->name,' have ' ,$this->def ,' DEF';
    }

    public function __construct($hp, $atk, $def, $name)
    {
        $this->hp = $hp;
        $this->atk = $atk;
        $this->def = $def;
        $this->name = $name;
    }
}

$Olympius = new Heros(20, 5, 8, 'Olympius');
$Olympius->afficherTout();
$Bobdilanne = new Heros(23, 14, 45,'Bobdilanne');
$Bobdilanne->afficherTout();

class Competence
{
    public $nom;
   

    public function afficherTout2()
    {
          echo '<br> <br>','The player ' ,' have choice ' ,$this->name ,' Competence';
    }


    public function __construct($n)
    {
       $this->name = $n;

    }

}

$Sword = new Competence('sword');
$Sword->afficherTout2();
$Axe = new Competence('axe');
$Axe->afficherTout2();
?>
