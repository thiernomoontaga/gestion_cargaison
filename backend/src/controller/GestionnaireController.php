<?php

namespace Src\Controller;

use App\Abstract\AbstractController;

class GestionnaireController extends AbstractController{
  public function __construct() {
    $this->layout = 'login';
  }

  public function index(){
    $this->renderHtml('security/login');
  }
}

