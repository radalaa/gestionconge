<?php
namespace Model;

use \RADFram\Manager;

abstract class PersonnelManager extends Manager
{
  /**
   * Méthode retournant une liste de personnel demandée
   * @param $debut int La première personnel à sélectionner
   * @param $limite int Le nombre de personnel à sélectionner
   * @return array La liste des personnel. Chaque entrée est une instance de News.
   */
  abstract public function getList($debut = -1, $limite = -1);
}