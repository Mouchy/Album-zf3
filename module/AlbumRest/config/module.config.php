<?php
namespace Albumrest;

use Zend\Router\Http\Segment;

return [
    'controllers' => [
        'invokables' => [
            'AlbumRest\Controller\AlbumRest' => 'AlbumRest\Controller\AlbumRestController',
        ],
    ],
	// The following section is new and should be added to your file
    'router' => [
        'routes' => [
            'album-rest' => [
                'type'    =>  Segment::class,
                'options' => [
                    'route'    => '/album-rest[/:id]',
                    'constraints' => [
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => AlbumRest\Controller::class,
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            'album-rest' => __DIR__ . '/../view',
        ],
		'strategies' => [
            'ViewJsonStrategy',
	],

  ],
];
