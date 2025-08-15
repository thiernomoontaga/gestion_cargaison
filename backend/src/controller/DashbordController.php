<?php

namespace Src\Controller;

use App\Abstract\AbstractController;

class DashbordController extends AbstractController{
  public function __construct() {
    $this->layout = 'base';
  }

  public function index(){
    $this->renderHtml('gestionnaire/dashbord');
  }
  public function create(){
    $this->renderHtml('gestionnaire/creerCargaison');
  }
}

