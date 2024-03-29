<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/themes/typhoon/blueprints/partials/blog.yaml',
    'modified' => 1625095586,
    'data' => [
        'form' => [
            'fields' => [
                'header.show_breadcrumbs' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_SHOW_BREADCRUMBS',
                    'highlight' => 1,
                    'size' => 'medium',
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.show_sidebar' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_SHOW_SIDEBAR',
                    'highlight' => 1,
                    'size' => 'medium',
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.show_pagination' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_SHOW_PAGINATION',
                    'highlight' => 1,
                    'size' => 'medium',
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.author' => [
                    'type' => 'text',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_AUTHOR'
                ]
            ]
        ]
    ]
];
