<?php
namespace Entity;

use \RADFram\Entity;

class Personnel extends Entity
{
protected $cnrps;
protected $nom;
protected $prenom;
protected $cin;
protected $adresse;
protected $lieu;
protected $datenaissance;
protected $fonction;
protected $grade;
protected $echelon;
protected $datetitu;
protected $daterecrut;
protected $telephone;
protected $service;


const CNRPS_INVALIDE = 1;
const NOM_INVALIDE = 2;
const PRENOM_INVALIDE = 3;

public function isValid()
  {
    return !(empty($this->cnrps) || empty($this->nom) || empty($this->PRENOM));
  }

//Setters

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
 * Set the value of nom
 *
 * @return  self
 */ 
public function setNom($nom)
{
    if (!is_string($nom) || empty($nom))
  {
    $this->erreurs[] = self::NOM_INVALIDE;
  }
$this->nom = $nom;

}

/**
 * Set the value of prenom
 *
 * @return  self
 */ 
public function setPrenom($prenom)
{
    if (!is_string($prenom) || empty($prenom))
    {
      $this->erreurs[] = self::PRENOM_INVALIDE;
    }
$this->prenom = $prenom;

}

/**
 * Set the value of cin
 *
 * @return  self
 */ 
public function setCin($cin)
{
$this->cin = $cin;

}

/**
 * Set the value of adresse
 *
 * @return  self
 */ 
public function setAdresse($adresse)
{
$this->adresse = $adresse;

}

/**
 * Set the value of lieu
 *
 * @return  self
 */ 
public function setLieu($lieu)
{
$this->lieu = $lieu;

}

/**
 * Set the value of datenaissance
 *
 * @return  self
 */ 
public function setDatenaissance($datenaissance)
{
$this->datenaissance = $datenaissance;

}

/**
 * Set the value of fonction
 *
 * @return  self
 */ 
public function setFonction($fonction)
{
$this->fonction = $fonction;

}

/**
 * Set the value of grade
 *
 * @return  self
 */ 
public function setGrade($grade)
{
$this->grade = $grade;

}

/**
 * Set the value of echelon
 *
 * @return  self
 */ 
public function setEchelon($echelon)
{
$this->echelon = $echelon;

}

/**
 * Set the value of datetitu
 *
 * @return  self
 */ 
public function setDatetitu($datetitu)
{
$this->datetitu = $datetitu;

}

/**
 * Set the value of daterecrut
 *
 * @return  self
 */ 
public function setDaterecrut($daterecrut)
{
$this->daterecrut = $daterecrut;

return $this;
}

/**
 * Set the value of telephone
 *
 * @return  self
 */ 
public function setTelephone($telephone)
{
$this->telephone = $telephone;

}

/**
 * Set the value of service
 *
 * @return  self
 */ 
public function setService($service)
{
$this->service = $service;
}

//Getters

/**
 * Get the value of cnrps
 */ 
public function cnrps()
{
return $this->cnrps;
}

/**
 * Get the value of nom
 */ 
public function nom()
{
return $this->nom;
}

/**
 * Get the value of prenom
 */ 
public function prenom()
{
return $this->prenom;
}

/**
 * Get the value of cin
 */ 
public function cin()
{
return $this->cin;
}

/**
 * Get the value of lieu
 */ 
public function lieu()
{
return $this->lieu;
}

/**
 * Get the value of datenaissance
 */ 
public function datenaissance()
{
return $this->datenaissance;
}

/**
 * Get the value of fonction
 */ 
public function fonction()
{
return $this->fonction;
}

/**
 * Get the value of grade
 */ 
public function grade()
{
return $this->grade;
}

/**
 * Get the value of echelon
 */ 
public function echelon()
{
return $this->echelon;
}

/**
 * Get the value of datetitu
 */ 
public function datetitu()
{
return $this->datetitu;
}

/**
 * Get the value of daterecrut
 */ 
public function daterecrut()
{
return $this->daterecrut;
}

/**
 * Get the value of telephone
 */ 
public function telephone()
{
return $this->telephone;
}

/**
 * Get the value of service
 */ 
public function service()
{
return $this->service;
}

/**
 * Get the value of adresse
 */ 
public function adresse()
{
return $this->adresse;
}
}