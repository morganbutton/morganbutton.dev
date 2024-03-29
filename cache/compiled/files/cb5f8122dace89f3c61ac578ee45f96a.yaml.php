<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/themes/typhoon/blueprints/default.yaml',
    'modified' => 1625095586,
    'data' => [
        'title' => 'Default',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'header.body_classes' => [
                                                    'unset@' => true
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'section_layout' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.BLUEPRINTS.LAYOUT_CLASSES',
                                    'underline' => true,
                                    'ordering@' => 1,
                                    'import@' => [
                                        'type' => 'partials/layout'
                                    ]
                                ],
                                'section_colors' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.BLUEPRINTS.COLORS',
                                    'underline' => true,
                                    'ordering@' => 1,
                                    'import@' => [
                                        'type' => 'partials/colors'
                                    ]
                                ],
                                'section_header' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_CONFIGURATION',
                                    'underline' => true,
                                    'ordering@' => 1,
                                    'import@' => [
                                        'type' => 'partials/header'
                                    ]
                                ]
                            ]
                        ],
                        'hero' => [
                            'title' => 'THEME_TYPHOON.BLUEPRINTS.HERO',
                            'type' => 'tab',
                            'ordering@' => 1,
                            'import@' => [
                                'type' => 'partials/hero'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
