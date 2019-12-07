<?php
namespace Entity;

use \RADFram\Entity;

class Conge extends Entity
{
protected $cnrps;
protected $datedep;
protected $dateretour;
protected $type;
protected $cause;
protected $nomberjour;
protected $typedoc;
protected $remplacant;
protected $etat;


const CNRPS_INVALIDE = 1;
const TYPE_INVALIDE = 2;
const CAUSE_INVALIDE = 3;

public function isValid()
  {
    return !(empty($this->cnrps) || empty($this->type) || empty($this->cause));
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
 * Set the value of datedep
 *
 */ 
public function setDatedep(\DateTime $datedep)
{
$this->datedep = $datedep;

}

/**
 * Set the value of dateretour
 *
 */ 
public function setDateretour(\DateTime $dateretour)
{
$this->dateretour = $dateretour;

}

/**
 * Set the value of type
 *
 */ 
public function setType($type)
{
  if (!is_string($type) || empty($type))
    {
      $this->erreurs[] = self::TYPE_INVALIDE;
    }
$this->type = $type;

}

/**
 * Set the value of cause
 *
 */ 
public function setCause($cause)
{
  if (!is_string($cause) || empty($cause))
    {
      $this->erreurs[] = self::CAUSE_INVALIDE;
    }
$this->cause = $cause;


}

/**
 * Set the value of nomberjour
 *
 */ 
public function setNomberjour($nomberjour)
{
$this->nomberjour = $nomberjour;
}

/**
 * Set the value of typedoc
 *
 */ 
public function setTypedoc($typedoc)
{
$this->typedoc = $typedoc;

}

/**
 * Set the value of remplacant
 *
 */ 
public function setRemplacant($remplacant)
{
$this->remplacant = $remplacant;
}

/**
 * Set the value of etat
 *
 */ 
public function setEtat($etat)
{
$this->etat = $etat;
}

/**
 * Get the value of cnrps
 */ 
public function getCnrps()
{
return $this->cnrps;
}

/**
 * Get the value of datedep
 */ 
public function getDatedep()
{
return $this->datedep;
}

/**
 * Get the value of dateretour
 */ 
public function getDateretour()
{
return $this->dateretour;
}

/**
 * Get the value of type
 */ 
public function getType()
{
return $this->type;
}

/**
 * Get the value of cause
 */ 
public function getCause()
{
return $this->cause;
}

/**
 * Get the value of nomberjour
 */ 
public function getNomberjour()
{
return $this->nomberjour;
}

/**
 * Get the value of typedoc
 */ 
public function getTypedoc()
{
return $this->typedoc;
}

/**
 * Get the value of remplacant
 */ 
public function getRemplacant()
{
return $this->remplacant;
}

/**
 * Get the value of etat
 */ 
public function getEtat()
{
return $this->etat;
}
}