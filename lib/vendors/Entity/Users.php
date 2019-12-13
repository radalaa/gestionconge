<?php
namespace Entity;

use \RADFram\Entity;

class Users extends Entity
{
protected $login;
protected $motdepasse;
protected $cnrps;


const LOGIN_INVALIDE = 1;
const MOTDEPASSE_INVALIDE = 2;
const CNRPS_INVALIDE = 3;

public function isValid()
  {
    return !(empty($this->cnrps) || empty($this->login) || empty($this->motdepasse));
  }

//Setters



/**
 * Set the value of login
 *
 * @return  self
 */ 
public function setLogin($login)
{
    if (!is_integer($login) || empty($login))
  {
    $this->erreurs[] = self::LOGIN_INVALIDE;
  }
$this->login = $login;


}

/**
 * Set the value of motdepasse
 *
 * @return  self
 */ 
public function setMotdepasse($motdepasse)
{
    if (!is_integer($motdepasse) || empty($motdepasse))
  {
    $this->erreurs[] = self::MOTDEPASSE_INVALIDE;
  }
$this->motdepasse = $motdepasse;

}


/**
 * Set the value of cnrps
 *
 */ 
public function setCnrps($cnrps)
{
  if (!is_integer($cnrps) || empty($cnrps))
  {
    $this->erreurs[] = self::CNRPS_INVALIDE;
  }

$this->cnrps = $cnrps;
}


/**
 * Get the value of login
 */ 
public function login()
{
$this->login;
}

/**
 * Get the value of motdepasse
 */ 
public function motdepasse()
{
$this->motdepasse;
}

/**
 * Get the value of cnrps
 */ 
public function cnrps()
{
$this->cnrps;
}
}