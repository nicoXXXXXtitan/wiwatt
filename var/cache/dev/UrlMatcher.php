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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/type' => [[['_route' => 'all_type', '_controller' => 'App\\Controller\\Admin\\AdminController::indexType'], null, null, null, false, false, null]],
        '/admin/type/add' => [[['_route' => 'add_type', '_controller' => 'App\\Controller\\Admin\\AdminController::newType'], null, null, null, false, false, null]],
        '/admin/type/type/delete' => [[['_route' => 'type_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteType'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'all_users', '_controller' => 'App\\Controller\\Admin\\AdminController::indexUser'], null, null, null, false, false, null]],
        '/admin/comments' => [[['_route' => 'all_comments', '_controller' => 'App\\Controller\\Admin\\AdminController::allComments'], null, null, null, false, false, null]],
        '/admin/comment/comment/delete' => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deletecomment'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'show_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/marker/vehicule/all' => [[['_route' => 'all_vehicle_marker', '_controller' => 'App\\Controller\\HomeController::allMarker'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contactUs'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'faq_show', '_controller' => 'App\\Controller\\HomeController::faq'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'mentionslegales_show', '_controller' => 'App\\Controller\\HomeController::mentions'], null, null, null, false, false, null]],
        '/notice-close-owner' => [[['_route' => 'closeNoticeOwner', '_controller' => 'App\\Controller\\HomeController::closeNoticeOwner'], null, ['POST' => 0], null, false, false, null]],
        '/notice-close-renter' => [[['_route' => 'closeNoticeRenter', '_controller' => 'App\\Controller\\HomeController::closeNoticeRenter'], null, ['POST' => 0], null, false, false, null]],
        '/nouvelle-notification' => [[['_route' => 'isNewNotice', '_controller' => 'App\\Controller\\HomeController::isNewMessage'], null, null, null, false, false, null]],
        '/us' => [[['_route' => 'us_page', '_controller' => 'App\\Controller\\HomeController::us'], null, null, null, false, false, null]],
        '/locations' => [[['_route' => 'leasing_index', '_controller' => 'App\\Controller\\LeasingController::index'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/inscription' => [[['_route' => 'subscribe', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/user/informations-personnelles/editer' => [[['_route' => 'user_information', '_controller' => 'App\\Controller\\User\\AccountController::updatePersonalInformation'], null, null, null, false, false, null]],
        '/user/user/delete' => [[['_route' => 'unsubscribe_ask', '_controller' => 'App\\Controller\\User\\AccountController::deleteUser'], null, ['POST' => 0], null, false, false, null]],
        '/user/annonces' => [[['_route' => 'user_post', '_controller' => 'App\\Controller\\User\\UserLeasingController::userPost'], null, null, null, false, false, null]],
        '/user/vehicules' => [[['_route' => 'user_vehicles', '_controller' => 'App\\Controller\\User\\UserLeasingController::userVehicleList'], null, null, null, false, false, null]],
        '/user/annonce' => [[['_route' => 'user_single_annonce', '_controller' => 'App\\Controller\\User\\UserLeasingController::userSingleAnnonce'], null, ['POST' => 0], null, false, false, null]],
        '/user/annonce/accepter-location' => [[['_route' => 'user_accept_booking', '_controller' => 'App\\Controller\\User\\UserLeasingController::acceptBooking'], null, ['POST' => 0], null, false, false, null]],
        '/user/annonce/refuser-location' => [[['_route' => 'user_refuse_booking', '_controller' => 'App\\Controller\\User\\UserLeasingController::denyBooking'], null, ['POST' => 0], null, false, false, null]],
        '/user/vehicule/reception' => [[['_route' => 'vehicle_reception', '_controller' => 'App\\Controller\\User\\UserLeasingController::vehicleReception'], null, null, null, false, false, null]],
        '/user/louer-son-vehicule' => [[['_route' => 'vehicle_leasing_form', '_controller' => 'App\\Controller\\User\\UserLeasingController::vehicleLeasingForm'], null, null, null, false, false, null]],
        '/user/annonce/delete' => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\User\\UserLeasingController::deletePost'], null, ['POST' => 0], null, false, false, null]],
        '/user/renter/locations' => [[['_route' => 'user_rental', '_controller' => 'App\\Controller\\User\\UserLeasingController::showRental'], null, null, null, false, false, null]],
        '/user/owner/locations' => [[['_route' => 'owner_historic', '_controller' => 'App\\Controller\\User\\UserLeasingController::showOwnerHistoric'], null, null, null, false, false, null]],
        '/user/vehicules/delete' => [[['_route' => 'vehicle_delete', '_controller' => 'App\\Controller\\User\\UserLeasingController::deleteVehicle'], null, ['POST' => 0], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/location/([^/]++)/voir\\-annonce(*:201)'
                .'|/user/([^/]++)/(?'
                    .'|info(*:231)'
                    .'|avis(*:243)'
                .')'
                .'|/re(?'
                    .'|gister/confirm/([^/]++)(*:281)'
                    .'|setting/reset/([^/]++)(*:311)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'show_leasing', '_controller' => 'App\\Controller\\LeasingController::showLocation'], ['id'], null, null, false, false, null]],
        231 => [[['_route' => 'one_user_information', '_controller' => 'App\\Controller\\User\\AccountController::oneUserInformation'], ['user'], null, null, false, false, null]],
        243 => [[['_route' => 'add_review', '_controller' => 'App\\Controller\\User\\UserLeasingController::addReview'], ['booking'], null, null, false, false, null]],
        281 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        311 => [
            [['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
