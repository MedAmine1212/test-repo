<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'index' => [[], ['_controller' => 'App\\Controller\\AppController::landing'], [], [['text', '/']], [], [], []],
    'session' => [['id'], ['_controller' => 'App\\Controller\\SessionController::session'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/session']], [], [], []],
    'sessions_list' => [[], ['_controller' => 'App\\Controller\\SessionsListController::sessionsList'], [], [['text', '/sessionsList']], [], [], []],
    'sessions_list_add_session' => [[], ['_controller' => 'App\\Controller\\SessionsListController::addSession'], [], [['text', '/sessionsList/addSession']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\TestController::action'], [], [['text', '/']], [], [], []],
    'app_test_result' => [[], ['_controller' => 'App\\Controller\\TestResultController::index'], [], [['text', '/test/result']], [], [], []],
    'result' => [[], ['_controller' => 'App\\Controller\\TestResultController::resultData'], [], [['text', '/result']], [], [], []],
    'resultDownload' => [[], ['_controller' => 'App\\Controller\\TestResultController::resultDataDowload'], [], [['text', '/result/download']], [], [], []],
    'app_tests' => [[], ['_controller' => 'App\\Controller\\TestsController::index'], [], [['text', '/tests']], [], [], []],
    'getTests' => [[], ['_controller' => 'App\\Controller\\TestsController::getAll'], [], [['text', '/getTests']], [], [], []],
    'addTest' => [[], ['_controller' => 'App\\Controller\\TestsController::add'], [], [['text', '/addTest']], [], [], []],
    'updateTest' => [['id'], ['_controller' => 'App\\Controller\\TestsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateTest']], [], [], []],
    'deleteTest' => [['id'], ['_controller' => 'App\\Controller\\TestsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteTest']], [], [], []],
    'testQuestions' => [['id'], ['_controller' => 'App\\Controller\\TestsController::testQuestions'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/testQuestions']], [], [], []],
    'getTest' => [['id'], ['_controller' => 'App\\Controller\\TestsController::getTestById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/getTest']], [], [], []],
    'load' => [[], ['_controller' => 'App\\Controller\\TestsController::home'], [], [['text', '/load']], [], [], []],
    'getUserTests' => [[], ['_controller' => 'App\\Controller\\TestsController::getAllUser'], [], [['text', '/getUserTests']], [], [], []],
    'find' => [[], ['_controller' => 'App\\Controller\\TestsController::searchTestByCourseName'], [], [['text', '/find']], [], [], []],
    'check' => [['id'], ['_controller' => 'App\\Controller\\TestsController::action'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/check']], [], [], []],
    'app_tests_qs' => [[], ['_controller' => 'App\\Controller\\TestsQsController::index'], [], [['text', '/tests/qs']], [], [], []],
    'getTestQuestions' => [[], ['_controller' => 'App\\Controller\\TestsQsController::getAll'], [], [['text', '/getTestQuestions']], [], [], []],
    'addQuestion' => [[], ['_controller' => 'App\\Controller\\TestsQsController::add'], [], [['text', '/addQuestion']], [], [], []],
    'updateQuestion' => [['id'], ['_controller' => 'App\\Controller\\TestsQsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateQuestion']], [], [], []],
    'deleteQuestion' => [['id'], ['_controller' => 'App\\Controller\\TestsQsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteQuestion']], [], [], []],
    'findQuestion' => [[], ['_controller' => 'App\\Controller\\TestsQsController::searchQuestionByCourseName'], [], [['text', '/findQuestion']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
