<?php

class Player
{
  public $name;
  public $gender;
  public $hp;
  public $damage;

  public function saySomething()
  {
    if($this->gender == "male") {
      echo "Speed, precision and strentgh !";
    } elseif ($this->gender == "female") {
      echo "I only have time for handsome guys !";
    } else {
      echo "I'm not sur about myself right now !";
    }
  }

  public function getName()
  {
    return $this->name;
  }

  public function getHp()
  {
    return $this->hp;
  }

  public function getDamage()
  {
    return $this->damage;
  }

  public function getPlayersInfos()
  {
    return sprintf(
      'Name: %s / Gender: %s / HP: %s / Damage Psecs: %s',
      $this->name,
      $this->gender,
      $this->hp,
      $this->damage
    );
  }

  public function looseHp($playerHpLeft)
  {
    $hpLeft = $playerHpLeft->hp - $this->damage;
    return $hpLeft;

    // to do: // mettre à jour la variable hp
  }


}
