<?php

/**
 * Configuration
 */
return [

    /**
     * Unique name that identifies your theme.
     */
    'name' => 'theme-alphabet',

    /**
     * Define menu positions.
     * Will be listed in the backend so that users
     * can assign menus to these positions.
     */
    'menus' => [

        'main' => 'Main',

    ],

    /**
     * Define widget positions.
     * will be listed in the backend so that users
     * can publish widgets in these positions.
     */
    'positions' => [

        'sidebar' => 'Sidebar',
        'top' => 'Top'

    ],

    'events' => [

        'view.system/site/admin/edit' => function ($event, $view) {
            $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
        }

    ],

    /**
     * Define theme configuration.
     * This is the theme's default configuration. During run-time, they will be merged with
     * settings the user has set in the backend. The default configuration can therefore
     * be overwritten.
     */
    'config' => [
    ]

];