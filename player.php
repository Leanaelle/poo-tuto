<?php

class Player
{
  public $name;
  public $gender;
  public $hp;
  public $damage;
  public $lifeSteal;

  public function getName()
  {
    return $this->name;
  }
  public function getHp()
  {
    return $this->hp;
  }

  public function playersInfos()
  {
    return $this->name;
    echo "<hr/>";
    return $this->gender;
    echo "<hr/>";
    return $this->hp;
    echo "<hr/>";
    return $this->damage;
    echo "<hr/>";
    return $this->lifeSteal;
    echo "<br>";

  }

}

$warrior = new Player();
$warrior->name = 'Marius';
$warrior->hp = 90;
$warrior->gender = 'male';
$warrior->damage = 80;
$warrior->lifeSteal = 50;

$slayer = new Player();
$slayer->name = 'Selena';
$slayer->hp = 30;
$slayer->gender = 'female';
$slayer->damage = 150;
$slayer->lifeSteal = 80;

echo $warrior->playersInfos();
echo $slayer->playersInfos();


