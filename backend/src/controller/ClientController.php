<?php

namespace Src\Controller;

use App\Abstract\AbstractController;

class ClientController extends AbstractController{
  public   function __construct() {
    $this->layout = 'client';
  }
  public function index(){
    $this->renderHtml('Client/HomePage');
  }
  
}


