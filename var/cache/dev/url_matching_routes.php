<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dresseur' => [[['_route' => 'dresseur_index', '_controller' => 'App\\Controller\\DresseurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lieu' => [[['_route' => 'lieu_index', '_controller' => 'App\\Controller\\LieuController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lieu/new' => [[['_route' => 'lieu_new', '_controller' => 'App\\Controller\\LieuController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/pokemon' => [[['_route' => 'pokemon_index', '_controller' => 'App\\Controller\\PokemonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pokemon/new' => [[['_route' => 'pokemon_new', '_controller' => 'App\\Controller\\PokemonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pokemon//shop' => [[['_route' => 'pokemon_shop', '_controller' => 'App\\Controller\\PokemonController::shop'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/dresseur/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/lieu/([^/]++)(?'
                    .'|(*:237)'
                    .'|/edit(*:250)'
                    .'|(*:258)'
                .')'
                .'|/pokemon/([^/]++)(?'
                    .'|(*:287)'
                    .'|/(?'
                        .'|training(*:307)'
                        .'|edit(*:319)'
                        .'|sell(*:331)'
                        .'|buy(*:342)'
                    .')'
                    .'|(*:351)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'dresseur_show', '_controller' => 'App\\Controller\\DresseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'dresseur_edit', '_controller' => 'App\\Controller\\DresseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'dresseur_delete', '_controller' => 'App\\Controller\\DresseurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        237 => [[['_route' => 'capture', '_controller' => 'App\\Controller\\LieuController::capture'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        250 => [[['_route' => 'lieu_edit', '_controller' => 'App\\Controller\\LieuController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'lieu_delete', '_controller' => 'App\\Controller\\LieuController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        287 => [[['_route' => 'pokemon_show', '_controller' => 'App\\Controller\\PokemonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'pokemon_training', '_controller' => 'App\\Controller\\PokemonController::training'], ['id'], ['GET' => 0], null, false, false, null]],
        319 => [[['_route' => 'pokemon_edit', '_controller' => 'App\\Controller\\PokemonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'pokemon_sell', '_controller' => 'App\\Controller\\PokemonController::sell'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        342 => [[['_route' => 'pokemon_buy', '_controller' => 'App\\Controller\\PokemonController::buy'], ['id'], ['GET' => 0], null, false, false, null]],
        351 => [
            [['_route' => 'pokemon_delete', '_controller' => 'App\\Controller\\PokemonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
