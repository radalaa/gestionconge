<?php
namespace Model;

use \Entity\Conge;

class CongeManagerPDO extends CongeManager
{
  public function getList($debut = -1, $limite = -1)
  {
    $sql = 'SELECT * FROM conge ORDER BY idcon DESC';
    
    if ($debut != -1 || $limite != -1)
    {
      $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
    }
    
    $requete = $this->dao->query($sql);
    $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Conge');
    
    $listeConge = $requete->fetchAll();
    
        /*
        foreach ($listeNews as $news)
        {
        $news->setDateAjout(new \DateTime($news->dateAjout()));
        $news->setDateModif(new \DateTime($news->dateModif()));
        }
        */
    
    $requete->closeCursor();
    
    return $listeConge;
  }
}