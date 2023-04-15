<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'index', '_controller' => 'App\\Controller\\AppController::landing'], null, null, null, false, false, null],
            [['_route' => 'home', '_controller' => 'App\\Controller\\TestController::action'], null, null, null, false, false, null],
        ],
        '/sessionsList' => [[['_route' => 'sessions_list', '_controller' => 'App\\Controller\\SessionsListController::sessionsList'], null, null, null, false, false, null]],
        '/sessionsList/addSession' => [[['_route' => 'sessions_list_add_session', '_controller' => 'App\\Controller\\SessionsListController::addSession'], null, ['POST' => 0], null, false, false, null]],
        '/test/result' => [[['_route' => 'app_test_result', '_controller' => 'App\\Controller\\TestResultController::index'], null, null, null, false, false, null]],
        '/result' => [[['_route' => 'result', '_controller' => 'App\\Controller\\TestResultController::resultData'], null, null, null, false, false, null]],
        '/result/download' => [[['_route' => 'resultDownload', '_controller' => 'App\\Controller\\TestResultController::resultDataDowload'], null, null, null, false, false, null]],
        '/tests' => [[['_route' => 'app_tests', '_controller' => 'App\\Controller\\TestsController::index'], null, null, null, false, false, null]],
        '/getTests' => [[['_route' => 'getTests', '_controller' => 'App\\Controller\\TestsController::getAll'], null, null, null, false, false, null]],
        '/addTest' => [[['_route' => 'addTest', '_controller' => 'App\\Controller\\TestsController::add'], null, null, null, false, false, null]],
        '/load' => [[['_route' => 'load', '_controller' => 'App\\Controller\\TestsController::home'], null, null, null, false, false, null]],
        '/getUserTests' => [[['_route' => 'getUserTests', '_controller' => 'App\\Controller\\TestsController::getAllUser'], null, null, null, false, false, null]],
        '/find' => [[['_route' => 'find', '_controller' => 'App\\Controller\\TestsController::searchTestByCourseName'], null, null, null, false, false, null]],
        '/tests/qs' => [[['_route' => 'app_tests_qs', '_controller' => 'App\\Controller\\TestsQsController::index'], null, null, null, false, false, null]],
        '/getTestQuestions' => [[['_route' => 'getTestQuestions', '_controller' => 'App\\Controller\\TestsQsController::getAll'], null, null, null, false, false, null]],
        '/addQuestion' => [[['_route' => 'addQuestion', '_controller' => 'App\\Controller\\TestsQsController::add'], null, null, null, false, false, null]],
        '/findQuestion' => [[['_route' => 'findQuestion', '_controller' => 'App\\Controller\\TestsQsController::searchQuestionByCourseName'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/session/([^/]++)(*:24)'
                .'|/update(?'
                    .'|Test/([^/]++)(*:54)'
                    .'|Question/([^/]++)(*:78)'
                .')'
                .'|/delete(?'
                    .'|Test/([^/]++)(*:109)'
                    .'|Question/([^/]++)(*:134)'
                .')'
                .'|/testQuestions/([^/]++)(*:166)'
                .'|/getTest/([^/]++)(*:191)'
                .'|/check/([^/]++)(*:214)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:253)'
                    .'|wdt/([^/]++)(*:273)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:319)'
                            .'|router(*:333)'
                            .'|exception(?'
                                .'|(*:353)'
                                .'|\\.css(*:366)'
                            .')'
                        .')'
                        .'|(*:376)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'session', '_controller' => 'App\\Controller\\SessionController::session'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'updateTest', '_controller' => 'App\\Controller\\TestsController::update'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'updateQuestion', '_controller' => 'App\\Controller\\TestsQsController::update'], ['id'], null, null, false, true, null]],
        109 => [[['_route' => 'deleteTest', '_controller' => 'App\\Controller\\TestsController::delete'], ['id'], null, null, false, true, null]],
        134 => [[['_route' => 'deleteQuestion', '_controller' => 'App\\Controller\\TestsQsController::delete'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'testQuestions', '_controller' => 'App\\Controller\\TestsController::testQuestions'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'getTest', '_controller' => 'App\\Controller\\TestsController::getTestById'], ['id'], null, null, false, true, null]],
        214 => [[['_route' => 'check', '_controller' => 'App\\Controller\\TestsController::action'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        273 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        319 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        333 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        353 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        366 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        376 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
