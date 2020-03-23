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
        '/admin/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\Admin\\AdminSecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'admin_app_login', '_controller' => 'App\\Controller\\Admin\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/admin/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\Admin\\AdminSecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'admin_app_logout', '_controller' => 'App\\Controller\\Admin\\SecurityController::logout'], null, null, null, false, false, null],
        ],
        '/admin/exercise-comment' => [[['_route' => 'admin_exercise_comment_index', '_controller' => 'App\\Controller\\Admin\\ExerciseCommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/exercise' => [[['_route' => 'admin_exercise_index', '_controller' => 'App\\Controller\\Admin\\ExerciseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/exercise/new' => [[['_route' => 'admin_exercise_new', '_controller' => 'App\\Controller\\Admin\\ExerciseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/hint' => [[['_route' => 'admin_hint_index', '_controller' => 'App\\Controller\\Admin\\HintController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/hint/new' => [[['_route' => 'admin_hint_new', '_controller' => 'App\\Controller\\Admin\\HintController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\MainController::adminHome'], null, ['GET' => 0], null, true, false, null]],
        '/admin/super-admin' => [[['_route' => 'super_admin_home', '_controller' => 'App\\Controller\\Admin\\MainController::superAdminHome'], null, ['GET' => 0], null, false, false, null]],
        '/admin/super-admin/new' => [[['_route' => 'super_admin_new', '_controller' => 'App\\Controller\\Admin\\MainController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/mastery-level' => [[['_route' => 'admin_mastery_level_index', '_controller' => 'App\\Controller\\Admin\\MasteryLevelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/mastery-level/new' => [[['_route' => 'admin_mastery_level_new', '_controller' => 'App\\Controller\\Admin\\MasteryLevelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/prerequisite' => [[['_route' => 'admin_prerequisite_index', '_controller' => 'App\\Controller\\Admin\\PrerequisiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/prerequisite/new' => [[['_route' => 'admin_prerequisite_new', '_controller' => 'App\\Controller\\Admin\\PrerequisiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/program-comment' => [[['_route' => 'admin_program_comment_index', '_controller' => 'App\\Controller\\Admin\\ProgramCommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/program' => [[['_route' => 'admin_program_index', '_controller' => 'App\\Controller\\Admin\\ProgramController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/program/new' => [[['_route' => 'admin_program_new', '_controller' => 'App\\Controller\\Admin\\ProgramController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/exercise-comment' => [
            [['_route' => 'exercise_comment_list', '_controller' => 'App\\Controller\\Api\\ExerciseCommentController::getexerciseComments'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'exercise_comment_new', '_controller' => 'App\\Controller\\Api\\ExerciseCommentController::postExerciseComment'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/exercise' => [
            [['_route' => 'exercise_list', '_controller' => 'App\\Controller\\Api\\ExerciseController::getExercises'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'exercise_new', '_controller' => 'App\\Controller\\Api\\ExerciseController::postExercise'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/hint' => [
            [['_route' => 'hint_list', '_controller' => 'App\\Controller\\Api\\HintController::getHints'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'hint_new', '_controller' => 'App\\Controller\\Api\\HintController::postHint'], null, ['POST' => 0], null, true, false, null],
        ],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Api\\MainController::home'], null, null, null, false, false, null]],
        '/api/mastery-level' => [
            [['_route' => 'mastery_level_list', '_controller' => 'App\\Controller\\Api\\MasteryLevelController::getMasteryLevels'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'mastery_level_new', '_controller' => 'App\\Controller\\Api\\MasteryLevelController::postMasteryLevel'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/prerequisite' => [
            [['_route' => 'prerequisite_list', '_controller' => 'App\\Controller\\Api\\PrerequisiteController::getPrerequisites'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'prerequisite_new', '_controller' => 'App\\Controller\\Api\\PrerequisiteController::postPrerequisite'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/program-comment' => [
            [['_route' => 'program_comment_list', '_controller' => 'App\\Controller\\Api\\ProgramCommentController::getProgramComments'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'program_comment_new', '_controller' => 'App\\Controller\\Api\\ProgramCommentController::postProgramComment'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/program' => [
            [['_route' => 'program_list', '_controller' => 'App\\Controller\\Api\\ProgramController::getPrograms'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'program_new', '_controller' => 'App\\Controller\\Api\\ProgramController::postProgram'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\Api\\SecurityController::index'], null, null, null, false, false, null]],
        '/api/user' => [
            [['_route' => 'user_list', '_controller' => 'App\\Controller\\Api\\UserController::getAblocUsers'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'user_new', '_controller' => 'App\\Controller\\Api\\UserController::postAblocUser'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/user/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\Api\\UserController::getProfile'], null, ['GET' => 0], null, false, false, null]],
        '/password-recovery' => [[['_route' => 'password_recovery', '_controller' => 'App\\Controller\\RecoveryController::passwordRecovery'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|exercise(?'
                            .'|\\-comment/(?'
                                .'|(\\d+)(*:211)'
                                .'|(\\d+)/edit(*:229)'
                                .'|(\\d+)(*:242)'
                            .')'
                            .'|/(?'
                                .'|(\\d+)(*:260)'
                                .'|(\\d+)/edit(*:278)'
                                .'|(\\d+)(*:291)'
                            .')'
                        .')'
                        .'|hint/(?'
                            .'|(\\d+)(*:314)'
                            .'|(\\d+)/edit(*:332)'
                            .'|(\\d+)(*:345)'
                        .')'
                        .'|super\\-admin/(\\d+)(*:372)'
                        .'|mastery\\-level/(?'
                            .'|(\\d+)(*:403)'
                            .'|(\\d+)/edit(*:421)'
                            .'|(\\d+)(*:434)'
                        .')'
                        .'|pr(?'
                            .'|erequisite/(?'
                                .'|(\\d+)(*:467)'
                                .'|(\\d+)/edit(*:485)'
                                .'|(\\d+)(*:498)'
                            .')'
                            .'|ogram(?'
                                .'|\\-comment/(?'
                                    .'|(\\d+)(*:533)'
                                    .'|(\\d+)/edit(*:551)'
                                    .'|(\\d+)(*:564)'
                                .')'
                                .'|/(?'
                                    .'|(\\d+)(*:582)'
                                    .'|(\\d+)/edit(*:600)'
                                    .'|(\\d+)(*:613)'
                                .')'
                            .')'
                        .')'
                        .'|user/(?'
                            .'|(\\d+)(*:637)'
                            .'|(\\d+)/edit(*:655)'
                            .'|edit/password/(\\d+)(*:682)'
                            .'|(\\d+)(*:695)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|exercise(?'
                            .'|\\-comment/(\\d+)(?'
                                .'|(*:740)'
                            .')'
                            .'|/(\\d+)(?'
                                .'|(*:758)'
                            .')'
                        .')'
                        .'|hint/(\\d+)(?'
                            .'|(*:781)'
                        .')'
                        .'|mastery\\-level/(\\d+)(?'
                            .'|(*:813)'
                        .')'
                        .'|pr(?'
                            .'|erequisite/(\\d+)(?'
                                .'|(*:846)'
                            .')'
                            .'|ogram(?'
                                .'|\\-comment/(\\d+)(?'
                                    .'|(*:881)'
                                .')'
                                .'|/(\\d+)(?'
                                    .'|(*:899)'
                                .')'
                            .')'
                        .')'
                        .'|user/(\\d+)(?'
                            .'|(*:923)'
                        .')'
                    .')'
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
        211 => [[['_route' => 'admin_exercise_comment_show', '_controller' => 'App\\Controller\\Admin\\ExerciseCommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'admin_exercise_comment_edit', '_controller' => 'App\\Controller\\Admin\\ExerciseCommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'admin_exercise_comment_delete', '_controller' => 'App\\Controller\\Admin\\ExerciseCommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        260 => [[['_route' => 'admin_exercise_show', '_controller' => 'App\\Controller\\Admin\\ExerciseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'admin_exercise_edit', '_controller' => 'App\\Controller\\Admin\\ExerciseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'admin_exercise_delete', '_controller' => 'App\\Controller\\Admin\\ExerciseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        314 => [[['_route' => 'admin_hint_show', '_controller' => 'App\\Controller\\Admin\\HintController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        332 => [[['_route' => 'admin_hint_edit', '_controller' => 'App\\Controller\\Admin\\HintController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        345 => [[['_route' => 'admin_hint_delete', '_controller' => 'App\\Controller\\Admin\\HintController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        372 => [[['_route' => 'super_admin_edit', '_controller' => 'App\\Controller\\Admin\\MainController::superAdminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        403 => [[['_route' => 'admin_mastery_level_show', '_controller' => 'App\\Controller\\Admin\\MasteryLevelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        421 => [[['_route' => 'admin_mastery_level_edit', '_controller' => 'App\\Controller\\Admin\\MasteryLevelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        434 => [[['_route' => 'admin_mastery_level_delete', '_controller' => 'App\\Controller\\Admin\\MasteryLevelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        467 => [[['_route' => 'admin_prerequisite_show', '_controller' => 'App\\Controller\\Admin\\PrerequisiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        485 => [[['_route' => 'admin_prerequisite_edit', '_controller' => 'App\\Controller\\Admin\\PrerequisiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        498 => [[['_route' => 'admin_prerequisite_delete', '_controller' => 'App\\Controller\\Admin\\PrerequisiteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        533 => [[['_route' => 'admin_program_comment_show', '_controller' => 'App\\Controller\\Admin\\ProgramCommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        551 => [[['_route' => 'admin_program_comment_edit', '_controller' => 'App\\Controller\\Admin\\ProgramCommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        564 => [[['_route' => 'admin_program_comment_delete', '_controller' => 'App\\Controller\\Admin\\ProgramCommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        582 => [[['_route' => 'admin_program_show', '_controller' => 'App\\Controller\\Admin\\ProgramController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        600 => [[['_route' => 'admin_program_edit', '_controller' => 'App\\Controller\\Admin\\ProgramController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        613 => [[['_route' => 'admin_program_delete', '_controller' => 'App\\Controller\\Admin\\ProgramController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        637 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        655 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        682 => [[['_route' => 'admin_user_edit_password', '_controller' => 'App\\Controller\\Admin\\UserController::editPassword'], ['id'], null, null, false, true, null]],
        695 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        740 => [
            [['_route' => 'exercise_comment_show', '_controller' => 'App\\Controller\\Api\\ExerciseCommentController::getExerciseComment'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'exercise_comment_edit', '_controller' => 'App\\Controller\\Api\\ExerciseCommentController::putExerciseComment'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'exercise_comment_delete', '_controller' => 'App\\Controller\\Api\\ExerciseCommentController::deleteExerciseComment'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        758 => [
            [['_route' => 'exercise_show', '_controller' => 'App\\Controller\\Api\\ExerciseController::getExercise'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'exercise_edit', '_controller' => 'App\\Controller\\Api\\ExerciseController::putExercise'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'exercise_delete', '_controller' => 'App\\Controller\\Api\\ExerciseController::deleteExercise'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        781 => [
            [['_route' => 'hint_show', '_controller' => 'App\\Controller\\Api\\HintController::getHint'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'hint_edit', '_controller' => 'App\\Controller\\Api\\HintController::putHint'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'hint_delete', '_controller' => 'App\\Controller\\Api\\HintController::deleteHint'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        813 => [
            [['_route' => 'mastery_level_show', '_controller' => 'App\\Controller\\Api\\MasteryLevelController::getMasterLevel'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'mastery_level_edit', '_controller' => 'App\\Controller\\Api\\MasteryLevelController::putMasterLevel'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'mastery_level_delete', '_controller' => 'App\\Controller\\Api\\MasteryLevelController::deleteMasteryLevel'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        846 => [
            [['_route' => 'prerequisite_show', '_controller' => 'App\\Controller\\Api\\PrerequisiteController::getPrerequisite'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'prerequisite_edit', '_controller' => 'App\\Controller\\Api\\PrerequisiteController::putPrerequisite'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'prerequisite_delete', '_controller' => 'App\\Controller\\Api\\PrerequisiteController::deletePrerequisite'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        881 => [
            [['_route' => 'program_comment_show', '_controller' => 'App\\Controller\\Api\\ProgramCommentController::getProgramComment'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'program_comment_edit', '_controller' => 'App\\Controller\\Api\\ProgramCommentController::putProgramComment'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'program_comment_delete', '_controller' => 'App\\Controller\\Api\\ProgramCommentController::deleteProgramComment'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        899 => [
            [['_route' => 'program_show', '_controller' => 'App\\Controller\\Api\\ProgramController::getProgram'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'program_edit', '_controller' => 'App\\Controller\\Api\\ProgramController::putProgram'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'program_delete', '_controller' => 'App\\Controller\\Api\\ProgramController::deleteProgram'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        923 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\Api\\UserController::getAblocUser'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'user_edit', '_controller' => 'App\\Controller\\Api\\UserController::putAblocUser'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\Api\\UserController::deleteAblocUser'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
