<?php

use Src\Controller\ClientController;
use Src\Controller\GestionnaireController;

return $routes = [
  '/login' =>[
    "controller" => GestionnaireController::class,
    "method" => "index"
  ],
  '/' => [
    "controller" => ClientController::class,
    "method" => "index"
  ]
];

