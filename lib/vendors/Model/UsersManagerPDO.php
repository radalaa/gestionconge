<?php
namespace Model;

use \Entity\Users;

class UsersManagerPDO extends UsersManager
{
  public function getFirst($login, $motdepasse)
  {
      $requete = $this->dao->prepare('SELECT * FROM users WHERE login = :nom and motdepasse = :motdepasse');
      $requete->bindValue(':nom', $login);
      $requete->bindValue(':motdepasse', $motdepasse);
      $requete->execute();
      $listeUsers = $requete->fetchAll();
      return $listeUsers;
  }
  public function getList($debut = -1, $limite = -1)
  {
    $sql = 'SELECT * FROM users ORDER BY cnrps DESC';
    
    if ($debut != -1 || $limite != -1)
    {
      $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
    }
    
    $requete = $this->dao->query($sql);
    $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Users');
    
    $listeUsers = $requete->fetchAll();
        
    $requete->closeCursor();
    
    return $listeUsers;
  }
}