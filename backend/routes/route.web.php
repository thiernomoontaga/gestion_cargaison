<?php

use Src\Controller\CargaisonController;
use Src\Controller\ClientController;
use Src\Controller\DashbordController;
use Src\Controller\GestionnaireController;

return $routes = [
  '/login' =>[
    "controller" => GestionnaireController::class,
    "method" => "index"
  ],
  '/' => [
    "controller" => ClientController::class,
    "method" => "index"
  ],
  '/dashbord'=>[
    'controller' => DashbordController::class,
    'method' => "index"
  ],
  '/cargaison' => [
    "controller" => CargaisonController::class,
    "method" => "index"
  ],
  '/creer_cargaison' => [
    "controller" => DashbordController::class,
    "method" => "create"
  ]
];

