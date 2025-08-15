<?php
namespace Src\Controller;

use App\Abstract\AbstractController;

class CargaisonController extends AbstractController{
  public function __construct()
  {
    $this->layout = 'base';
  }
  public function index(){
    $this->renderHtml('gestionnaire/cargaison');
  }
  
}

