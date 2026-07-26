<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/defenses' => [[['_route' => 'admin_defense_index', '_controller' => 'App\\Controller\\DefenseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/defenses/new' => [[['_route' => 'admin_defense_new', '_controller' => 'App\\Controller\\DefenseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/rooms' => [[['_route' => 'admin_room_index', '_controller' => 'App\\Controller\\RoomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/rooms/new' => [[['_route' => 'admin_room_new', '_controller' => 'App\\Controller\\RoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/students' => [[['_route' => 'admin_student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/students/new' => [[['_route' => 'admin_student_new', '_controller' => 'App\\Controller\\StudentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/teachers' => [[['_route' => 'admin_teacher_index', '_controller' => 'App\\Controller\\TeacherController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/teachers/new' => [[['_route' => 'admin_teacher_new', '_controller' => 'App\\Controller\\TeacherController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/enseignant/dashboard' => [[['_route' => 'teacher_dashboard', '_controller' => 'App\\Controller\\TeacherDashboardController::index'], null, null, null, false, false, null]],
        '/enseignant/defenses' => [[['_route' => 'teacher_defenses', '_controller' => 'App\\Controller\\TeacherDashboardController::defenses'], null, null, null, false, false, null]],
        '/enseignant/jurys' => [[['_route' => 'teacher_jurys', '_controller' => 'App\\Controller\\TeacherDashboardController::jurys'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|defenses/([^/]++)(?'
                        .'|/edit(*:77)'
                        .'|(*:84)'
                    .')'
                    .'|rooms/([^/]++)(?'
                        .'|/edit(*:114)'
                        .'|(*:122)'
                    .')'
                    .'|students/([^/]++)(?'
                        .'|/edit(*:156)'
                        .'|(*:164)'
                    .')'
                    .'|teachers/([^/]++)(?'
                        .'|/edit(*:198)'
                        .'|(*:206)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'admin_defense_edit', '_controller' => 'App\\Controller\\DefenseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'admin_defense_delete', '_controller' => 'App\\Controller\\DefenseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        114 => [[['_route' => 'admin_room_edit', '_controller' => 'App\\Controller\\RoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        122 => [[['_route' => 'admin_room_delete', '_controller' => 'App\\Controller\\RoomController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        156 => [[['_route' => 'admin_student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        164 => [[['_route' => 'admin_student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        198 => [[['_route' => 'admin_teacher_edit', '_controller' => 'App\\Controller\\TeacherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [
            [['_route' => 'admin_teacher_delete', '_controller' => 'App\\Controller\\TeacherController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
