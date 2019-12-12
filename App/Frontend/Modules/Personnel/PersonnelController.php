<?php
namespace App\Frontend\Modules\Personnel;

use \RADFram\BackController;
use \RADFram\HTTPRequest;
use \Entity\Personnel;

class PersonnelController extends BackController
{
  public function executeIndex(HTTPRequest $request)
  {
    $nombrePersonnel = 1 ;
    $nombrePersonnel = $this->app->config()->get('nombre');
    //var_dump($nombrePersonnel);
    $nombreCaracteres = $this->app->config()->get('nombre_caracteres');
    
    // On ajoute une définition pour le titre.
    $this->page->addVar('title', 'Liste des '.$nombrePersonnel.' dernières personnel');
    
    // On récupère le manager des personnel.
    $manager = $this->managers->getManagerOf('Personnel');
    
    // Cette ligne, vous ne pouviez pas la deviner sachant qu'on n'a pas encore touché au modèle.
    // Contentez-vous donc d'écrire cette instruction, nous implémenterons la méthode ensuite.
    $listePersonnel = $manager->getList(0, $nombrePersonnel);
    
    foreach ($listePersonnel as $personnel)
    {
      if (strlen($personnel->adresse()) > $nombreCaracteres)
      {
        $debut = substr($personnel->adresse(), 0, $nombreCaracteres);
        $debut = substr($debut, 0, strrpos($debut, ' ')) . '...';
        
        $personnel->setCause($debut);
      }
    }
    
    // On ajoute la variable $listePersonnel à la vue.
    $this->page->addVar('listePersonnel', $listePersonnel);
  }
}