<?php

class Ship
{
  public $name;
  public $weaponPower = 0;
  public $jediFactor = 0;
  public $strength = 0;


  public function sayHello()
  {
    echo 'Hello!';
  }

  public function getName()
  {
    return $this->name;
  }
  public function getNameAndSpecs($useShortFormat)
  {
    if ($useShortFormat) {
      return sprintf(
        '%s: %s/%s/%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    } else {
      return sprintf(
        '%s: w:%s, j:%s, s:%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    }
  }
}

function printShipSummary($someShip)
{
  echo 'Ship Name: '.$someShip->getName();
  echo '<hr/>';
  $someShip->sayHello();
  echo '<hr/>';
  echo $someShip->getNameAndSpecs(false);
  echo '<hr/>';
  echo $someShip->getNameAndSpecs(true);
  echo '<hr/>';
  echo '<br/><br/>';
  echo '<hr/>';
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = 'Imperial Rainbow';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

printShipSummary($myShip);
printShipSummary($otherShip);

