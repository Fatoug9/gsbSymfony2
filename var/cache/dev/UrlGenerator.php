<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    'connexion2' => [[], ['_controller' => 'App\\Controller\\Connexion2Controller::index'], [], [['text', '/connexion2']], [], []],
    'consultation_compte_rendu' => [[], ['_controller' => 'App\\Controller\\ConsultationCompteRenduController::index'], [], [['text', '/consultation_compte_rendu']], [], []],
    'consultation_praticien' => [[], ['_controller' => 'App\\Controller\\ConsultationPraticienController::index'], [], [['text', '/consultation_praticien']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\ConnexionController::index'], [], [['text', '/']], [], []],
    'connexion' => [[], ['_controller' => 'App\\Controller\\ConnexionController::seConnecter'], [], [['text', '/connexion']], [], []],
    'consultationCompteRendu' => [[], ['_controller' => 'App\\Controller\\ConsultationCompteRenduController::index'], [], [['text', '/consultation_compte_rendu']], [], []],
    'consultationPraticien' => [[], ['_controller' => 'App\\Controller\\ConsultationPraticienController::index'], [], [['text', '/consultation_praticien']], [], []],
    'choix' => [[], ['_controller' => 'App\\Controller\\ChoixController::index'], [], [['text', '/choix']], [], []],
];
