<?php
	ini_set("display_errors", 'on');
	//Simple Array
	$myItems = ['user', 'password', 'date'];
	//echo $myItems[1];


	//Associative Array
	$user = [

		'username' => 'jamesuser',
		'password' => 'jamespassword',
		'firstname' => 'James',
		'lastname' => 'John'


	];




	$user = [

		'user_data' => [

			'firstname' => 'James',
			'lastname' => 'John',
			'username' => 'jamesuser',
			'password' => 'jamespassword',
			'position' => ['senior_dev', 'cfo', 'chairman' => []]
		],

		'settings' => [

			'color_theme' => 'dark',
			'receive_notifications' => true,
			'2_factor_auth'=> false

		]

	];

	$user['user_data']['position'][1];











?>