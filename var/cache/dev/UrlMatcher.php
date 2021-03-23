<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\ConnexionController::index'], null, null, null, false, false, null]],
        '/consultation_compte_rendu' => [[['_route' => 'consultation_compte_rendu', '_controller' => 'App\\Controller\\ConsultationCompteRenduController::index'], null, null, null, false, false, null]],
        '/consultation_praticien' => [[['_route' => 'consultation_praticien', '_controller' => 'App\\Controller\\ConsultationPraticienController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ConnexionController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];