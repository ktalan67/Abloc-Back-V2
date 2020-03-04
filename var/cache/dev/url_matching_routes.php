<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/access_level' => [
            [['_route' => 'access_level_list', '_controller' => 'App\\Controller\\AccessLevelController::getAcessLevels'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'access_level_new', '_controller' => 'App\\Controller\\AccessLevelController::postAccessLevel'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/exercise' => [
            [['_route' => 'exercise_list', '_controller' => 'App\\Controller\\ExerciseController::getExercises'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'exercise_new', '_controller' => 'App\\Controller\\ExerciseController::postExercise'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/hint' => [
            [['_route' => 'hint_list', '_controller' => 'App\\Controller\\HintController::getHints'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'hint_new', '_controller' => 'App\\Controller\\HintController::postHint'], null, ['POST' => 0], null, true, false, null],
        ],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::home'], null, null, null, false, false, null]],
        '/api/mastery_level' => [
            [['_route' => 'mastery_level_list', '_controller' => 'App\\Controller\\MasteryLevelController::getMasteryLevels'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'mastery_level_new', '_controller' => 'App\\Controller\\MasteryLevelController::postMasteryLevel'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/prerequisite' => [
            [['_route' => 'prerequisite_list', '_controller' => 'App\\Controller\\PrerequisiteController::getPrerequisites'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'prerequisite_new', '_controller' => 'App\\Controller\\PrerequisiteController::postPrerequisite'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/program' => [
            [['_route' => 'program_list', '_controller' => 'App\\Controller\\ProgramController::getPrograms'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::postProgram'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/user' => [
            [['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::getAblocUsers'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::postAblocUser'], null, ['POST' => 0], null, true, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|access_level/([^/]++)(?'
                        .'|(*:74)'
                    .')'
                    .'|exercise/([^/]++)(?'
                        .'|(*:102)'
                        .'|/edit(*:115)'
                        .'|(*:123)'
                    .')'
                    .'|hint/([^/]++)(?'
                        .'|(*:148)'
                        .'|/edit(*:161)'
                        .'|(*:169)'
                    .')'
                    .'|mastery_level/([^/]++)(?'
                        .'|(*:203)'
                        .'|/edit(*:216)'
                        .'|(*:224)'
                    .')'
                    .'|pr(?'
                        .'|erequisite/([^/]++)(?'
                            .'|(*:260)'
                            .'|/edit(*:273)'
                            .'|(*:281)'
                        .')'
                        .'|ogram/([^/]++)(?'
                            .'|(*:307)'
                            .'|/edit(*:320)'
                            .'|(*:328)'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:354)'
                        .'|/edit(*:367)'
                        .'|(*:375)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [
            [['_route' => 'access_level_show', '_controller' => 'App\\Controller\\AccessLevelController::getAccessLevel'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'access_level_edit', '_controller' => 'App\\Controller\\AccessLevelController::putAccessLevel'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'access_level_delete', '_controller' => 'App\\Controller\\AccessLevelController::deleteAccessLevel'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        102 => [[['_route' => 'exercise_show', '_controller' => 'App\\Controller\\ExerciseController::getExercise'], ['id'], ['GET' => 0], null, false, true, null]],
        115 => [[['_route' => 'exercise_edit', '_controller' => 'App\\Controller\\ExerciseController::putExercise'], ['id'], ['PUT' => 0], null, false, false, null]],
        123 => [[['_route' => 'exercise_delete', '_controller' => 'App\\Controller\\ExerciseController::deleteExercise'], ['id'], ['DELETE' => 0], null, false, true, null]],
        148 => [[['_route' => 'hint_show', '_controller' => 'App\\Controller\\HintController::getHint'], ['id'], ['GET' => 0], null, false, true, null]],
        161 => [[['_route' => 'hint_edit', '_controller' => 'App\\Controller\\HintController::putHint'], ['id'], ['PUT' => 0], null, false, false, null]],
        169 => [[['_route' => 'hint_delete', '_controller' => 'App\\Controller\\HintController::deleteHint'], ['id'], ['DELETE' => 0], null, false, true, null]],
        203 => [[['_route' => 'mastery_level_show', '_controller' => 'App\\Controller\\MasteryLevelController::getMasterLevel'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'mastery_level_edit', '_controller' => 'App\\Controller\\MasteryLevelController::putMasterLevel'], ['id'], ['PUT' => 0], null, false, false, null]],
        224 => [[['_route' => 'mastery_level_delete', '_controller' => 'App\\Controller\\MasteryLevelController::deleteMasteryLevel'], ['id'], ['DELETE' => 0], null, false, true, null]],
        260 => [[['_route' => 'prerequisite_show', '_controller' => 'App\\Controller\\PrerequisiteController::getPrerequisite'], ['id'], ['GET' => 0], null, false, true, null]],
        273 => [[['_route' => 'prerequisite_edit', '_controller' => 'App\\Controller\\PrerequisiteController::putPrerequisite'], ['id'], ['PUT' => 0], null, false, false, null]],
        281 => [[['_route' => 'prerequisite_delete', '_controller' => 'App\\Controller\\PrerequisiteController::deletePrerequisite'], ['id'], ['DELETE' => 0], null, false, true, null]],
        307 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::getProgram'], ['id'], ['GET' => 0], null, false, true, null]],
        320 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::putProgram'], ['id'], ['PUT' => 0], null, false, false, null]],
        328 => [[['_route' => 'program_delete', '_controller' => 'App\\Controller\\ProgramController::deleteProgram'], ['id'], ['DELETE' => 0], null, false, true, null]],
        354 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::getAblocUser'], ['id'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::putAblocUser'], ['id'], ['PUT' => 0], null, false, false, null]],
        375 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::deleteAblocUser'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
