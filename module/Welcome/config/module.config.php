<?php
return array (
	'controllers' => array (
		'invokables' => array (
			'Welcome\Controller\Index' => 
					'Welcome\Controller\IndexController',
						
			) 
	),
	'router' => array (
		'routes' => array (
			'welcome' => array (
				'type' => 'segment',
				'options' => array (
					'route' => '/welcome[/:action]',
					'constraints' => array (
						'action'=>'[a-zA-Z][a-zA-Z0-9_-]*',
						),
					'defaults' => array (
						'controller' => 
								'Welcome\Controller\Index',
						'action' => 'index' 
					) 
				) 
			),
		) 
	),
		
	'view_manager' => array (
		'template_path_stack' => array (
			'welcome' => __DIR__ . '/../view' 
		), 
	),
);