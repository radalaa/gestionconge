<?php
namespace App\Frontend\Modules\Conge;

use \RADFram\BackController;
use \RADFram\HTTPRequest;
use \Entity\Conge;

class CongeController extends BackController
{
  public function executeIndex(HTTPRequest $request)
  {
    $nombreConge = 1 ;
    $nombreConge = $this->app->config()->get('nombre');
    //var_dump($nombreConge);
    $nombreCaracteres = $this->app->config()->get('nombre_caracteres');
    
    // On ajoute une définition pour le titre.
    $this->page->addVar('title', 'Liste des '.$nombreConge.' dernières conge');
    
    // On récupère le manager des conge.
    $manager = $this->managers->getManagerOf('Conge');
    
    // Cette ligne, vous ne pouviez pas la deviner sachant qu'on n'a pas encore touché au modèle.
    // Contentez-vous donc d'écrire cette instruction, nous implémenterons la méthode ensuite.
    $listeConge = $manager->getList(0, $nombreConge);
    
    foreach ($listeConge as $conge)
    {
      if (strlen($conge->cause()) > $nombreCaracteres)
      {
        $debut = substr($conge->cause(), 0, $nombreCaracteres);
        $debut = substr($debut, 0, strrpos($debut, ' ')) . '...';
        
        $conge->setCause($debut);
      }
    }
    
    // On ajoute la variable $listeConge à la vue.
    $this->page->addVar('listeConge', $listeConge);
  }
}