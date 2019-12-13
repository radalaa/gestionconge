<?php
namespace Model;

use \RADFram\Manager;
use \Entity\Users;

abstract class UsersManager extends Manager
{
  /**
   * Méthode retournant une liste de users demandée
   * @param $debut int La première users à sélectionner
   * @param $limite int Le nombre de users à sélectionner
   * @return array La liste des users. Chaque entrée est une instance de News.
   */
  abstract public function getList($debut = -1, $limite = -1);
  
  
  /**
   * MéthodePour verfivier le login et le mot de passe 
   * 
   * @param  mixed $login
   * @param  mixed $motdepasse
   *
   * @return void
   */
  abstract public function getFirst($login, $motdepasse);
}