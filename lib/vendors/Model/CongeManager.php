<?php
namespace Model;

use \RADFram\Manager;

abstract class CongeManager extends Manager
{
  /**
   * Méthode retournant une liste de conge demandée
   * @param $debut int La première conge à sélectionner
   * @param $limite int Le nombre de conge à sélectionner
   * @return array La liste des conge. Chaque entrée est une instance de News.
   */
  abstract public function getList($debut = -1, $limite = -1);
}