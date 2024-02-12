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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/book' => [[['_route' => 'book_list', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/book/new' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookController::new'], null, null, null, false, false, null]],
        '/borrowedbook' => [[['_route' => 'app_borrowedbook_index', '_controller' => 'App\\Controller\\BorrowedbookController::index'], null, ['GET' => 0], null, true, false, null]],
        '/borrowedbook/new' => [[['_route' => 'app_borrowedbook_new', '_controller' => 'App\\Controller\\BorrowedbookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/kutuphaneci' => [[['_route' => 'app_kutuphaneci', '_controller' => 'App\\Controller\\KutuphaneciController::index'], null, null, null, false, false, null]],
        '/ogrenci' => [[['_route' => 'app_ogrenci', '_controller' => 'App\\Controller\\OgrenciController::index'], null, null, null, false, false, null]],
        '/ogretmen' => [[['_route' => 'app_ogretmen', '_controller' => 'App\\Controller\\OgretmenController::index'], null, null, null, false, false, null]],
        '/qr-codes' => [[['_route' => 'app_qr_codes', '_controller' => 'App\\Controller\\QrCodeGeneratorController::index'], null, null, null, false, false, null]],
        '/rapor' => [[['_route' => 'reports', '_controller' => 'App\\Controller\\RaporController::reports'], null, null, null, false, false, null]],
        '/rapor/most-readers' => [[['_route' => 'most_readers', '_controller' => 'App\\Controller\\RaporController::mostReaders'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'user_profile_edit', '_controller' => 'App\\Controller\\UserProfileController::edit'], null, null, null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'change_password_profile', '_controller' => 'App\\Controller\\UserProfileController::changePasswordProfile'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|errors/([^/]++)(?'
                            .'|(*:173)'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:211)'
                        .')'
                        .'|bo(?'
                            .'|oks(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:257)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:283)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:321)'
                                .')'
                                .'|(*:330)'
                            .')'
                            .'|rrowedbooks(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:379)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:405)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:443)'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:488)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:514)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:552)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:595)'
                    .'|wdt/([^/]++)(*:615)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:657)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:694)'
                                .'|router(*:708)'
                                .'|exception(?'
                                    .'|(*:728)'
                                    .'|\\.css(*:741)'
                                .')'
                            .')'
                            .'|(*:751)'
                        .')'
                    .')'
                .')'
                .'|/bo(?'
                    .'|ok/([^/]++)/(?'
                        .'|edit(*:787)'
                        .'|delete(*:801)'
                    .')'
                    .'|rrowedbook/([^/]++)(?'
                        .'|(*:832)'
                        .'|/(?'
                            .'|edit(*:848)'
                            .'|return(*:862)'
                            .'|books(*:875)'
                        .')'
                        .'|(*:884)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        173 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        211 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        257 => [[['_route' => '_api_/books/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Book', '_api_operation_name' => '_api_/books/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        283 => [
            [['_route' => '_api_/books{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Book', '_api_operation_name' => '_api_/books{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/books{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Book', '_api_operation_name' => '_api_/books{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        321 => [
            [['_route' => '_api_/books/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Book', '_api_operation_name' => '_api_/books/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/books/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Book', '_api_operation_name' => '_api_/books/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/books/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Book', '_api_operation_name' => '_api_/books/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        330 => [[['_route' => 'api_book_list', '_controller' => 'App\\Controller\\ApiBookController::list'], [], ['GET' => 0], null, false, false, null]],
        379 => [[['_route' => '_api_/borrowedbooks/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Borrowedbook', '_api_operation_name' => '_api_/borrowedbooks/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        405 => [
            [['_route' => '_api_/borrowedbooks{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Borrowedbook', '_api_operation_name' => '_api_/borrowedbooks{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/borrowedbooks{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Borrowedbook', '_api_operation_name' => '_api_/borrowedbooks{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        443 => [
            [['_route' => '_api_/borrowedbooks/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Borrowedbook', '_api_operation_name' => '_api_/borrowedbooks/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/borrowedbooks/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Borrowedbook', '_api_operation_name' => '_api_/borrowedbooks/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/borrowedbooks/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Borrowedbook', '_api_operation_name' => '_api_/borrowedbooks/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        488 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        514 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        552 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        595 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        615 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        657 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        694 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        708 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        728 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        741 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        751 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        787 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookController::edit'], ['id'], null, null, false, false, null]],
        801 => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], null, null, false, false, null]],
        832 => [[['_route' => 'app_borrowedbook_show', '_controller' => 'App\\Controller\\BorrowedbookController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        848 => [[['_route' => 'app_borrowedbook_edit', '_controller' => 'App\\Controller\\BorrowedbookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        862 => [[['_route' => 'app_borrowedbook_return', '_controller' => 'App\\Controller\\BorrowedbookController::returnBook'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        875 => [[['_route' => 'borrower_books', '_controller' => 'App\\Controller\\BorrowedbookController::borrowerBooks'], ['id'], null, null, false, false, null]],
        884 => [
            [['_route' => 'app_borrowedbook_delete', '_controller' => 'App\\Controller\\BorrowedbookController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
