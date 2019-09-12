<?php

class Ship
{
  private $name;
  private $weaponPower = 0;
  private $jediFactor = 0;
  private $strength = 0;
  private $underRepair;

  public function __construct($name)
  {
    $this->name = $name;
    // randomly put this ship under repair
    $this->underRepair = mt_rand(1, 100) < 30;
  }

  public function isFunctional()
  {
    return !$this->underRepair;
  }


  public function getNameAndSpecs($useShortFormat = false)
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

  public function doesGivenShipHaveMoreStrength($givenShip)
  {
    return $givenShip->strength > $this->strength;
  }


    /**
     * @param mixed $name
     *
     * @return self
     */
    public function getName()
    {
      return $this->name;
    }

    public function setName($name)
    {
      $this->name = $name;

      return $this;
    }


    /**
     * @return mixed
     */
    public function getWeaponPower()
    {
      return $this->weaponPower;
    }

    /**
     * @param mixed $weaponPower
     *
     * @return self
     */
    public function setWeaponPower($weaponPower)
    {
      $this->weaponPower = $weaponPower;

      return $this;
    }

    /**
     * @return mixed
     */
    public function getJediFactor()
    {
      return $this->jediFactor;
    }

    /**
     * @param mixed $jediFactor
     *
     * @return self
     */
    public function setJediFactor($jediFactor)
    {
      $this->jediFactor = $jediFactor;

      return $this;
    }

   /**
     * @param mixed $strength
     *
     * @return self
     */
   public function setStrength($number)
   {
    if (!is_numeric($number)) {
      throw new \Exception('Strength must be a number, duh!');
    }
    $this->strength = $number;
  }

  /**
     * @return mixed
     */
  public function getStrength()
  {
    return $this->strength;
  }


}
