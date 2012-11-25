<?php
return array (
	'controllers' => array (
		'invokables' => array (
			'MyModule\Controller\Index' => 
					'MyModule\Controller\IndexController',
						
			) 
	),
	'router' => array (
		'routes' => array (
			'mymodule' => array (
				'type' => 'segment',
				'options' => array (
					'route' => '/mymodule[/:action]',
					'constraints' => array (
						'action'=>'[a-zA-Z][a-zA-Z0-9_-]*',
						),
					'defaults' => array (
						'controller' => 
								'MyModule\Controller\Index',
						'action' => 'index' 
					) 
				) 
			),
		) 
	),
		
	'view_manager' => array (
		'template_path_stack' => array (
			'mymodule' => __DIR__ . '/../view' 
		), 
	),
);