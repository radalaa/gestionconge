<?php
namespace Model;

use \Entity\Personnel;

class PersonnelManagerPDO extends PersonnelManager
{
  public function getList($debut = -1, $limite = -1)
  {
    $sql = 'SELECT * FROM personnel ORDER BY cnrps';
    
    if ($debut != -1 || $limite != -1)
    {
      $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
    }
    
    $requete = $this->dao->query($sql);
    $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Personnel');
    
    $listePersonnel = $requete->fetchAll();
    
       
    $requete->closeCursor();
    
    return $listePersonnel;
  }
}