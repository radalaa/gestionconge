<?php
namespace App\Backend;

use \RADFram\Application;

class BackendApplication extends Application
{
  public function __construct()
  {
    parent::__construct();

    $this->name = 'Backend';
  }

  public function run()
  {
    //si l'utilisateur est connecté
    
    if ($this->user->isAuthenticated())
    {
      $controller = $this->getController();
    }
    else
    {
     $controller = new Modules\Connexion\ConnexionController($this, 'Connexion', 'index');
     //$controller = new Modules\Auth\AuthController($this, 'Auth', 'login');
    }

    $controller->execute();

    $this->httpResponse->setPage($controller->page());
    $this->httpResponse->send();
  }
}