<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/tests' => [[['_route' => 'app_tests', '_controller' => 'App\\Controller\\TestsController::index'], null, null, null, false, false, null]],
        '/getTests' => [[['_route' => 'getTests', '_controller' => 'App\\Controller\\TestsController::getAll'], null, null, null, false, false, null]],
        '/addTest' => [[['_route' => 'addTest', '_controller' => 'App\\Controller\\TestsController::add'], null, null, null, false, false, null]],
        '/load' => [[['_route' => 'load', '_controller' => 'App\\Controller\\TestsController::home'], null, null, null, false, false, null]],
        '/getUserTests' => [[['_route' => 'getUserTests', '_controller' => 'App\\Controller\\TestsController::getAllUser'], null, null, null, false, false, null]],
        '/tests/qs' => [[['_route' => 'app_tests_qs', '_controller' => 'App\\Controller\\TestsQsController::index'], null, null, null, false, false, null]],
        '/getTestQuestions' => [[['_route' => 'getTestQuestions', '_controller' => 'App\\Controller\\TestsQsController::getAll'], null, null, null, false, false, null]],
        '/addQuestion' => [[['_route' => 'addQuestion', '_controller' => 'App\\Controller\\TestsQsController::add'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/update(?'
                    .'|Test/([^/]++)(*:30)'
                    .'|Question/([^/]++)(*:54)'
                .')'
                .'|/delete(?'
                    .'|Test/([^/]++)(*:85)'
                    .'|Question/([^/]++)(*:109)'
                .')'
                .'|/testQuestions/([^/]++)(*:141)'
                .'|/getTest/([^/]++)(*:166)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:205)'
                    .'|wdt/([^/]++)(*:225)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:271)'
                            .'|router(*:285)'
                            .'|exception(?'
                                .'|(*:305)'
                                .'|\\.css(*:318)'
                            .')'
                        .')'
                        .'|(*:328)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'updateTest', '_controller' => 'App\\Controller\\TestsController::update'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'updateQuestion', '_controller' => 'App\\Controller\\TestsQsController::update'], ['id'], null, null, false, true, null]],
        85 => [[['_route' => 'deleteTest', '_controller' => 'App\\Controller\\TestsController::delete'], ['id'], null, null, false, true, null]],
        109 => [[['_route' => 'deleteQuestion', '_controller' => 'App\\Controller\\TestsQsController::delete'], ['id'], null, null, false, true, null]],
        141 => [[['_route' => 'testQuestions', '_controller' => 'App\\Controller\\TestsController::testQuestions'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'getTest', '_controller' => 'App\\Controller\\TestsController::getTestById'], ['id'], null, null, false, true, null]],
        205 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        225 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        271 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        285 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        305 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        318 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        328 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
