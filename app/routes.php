<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['GET|POST', '/contact', 'Default#contact', 'default_contact'],

		['GET|POST', '/register', 'Security#register', 'security_register'],
		['POST', '/login', 'Security#login', 'security_login'],
		['GET', '/logout', 'Security#logout', 'security_logout'],

		['GET|POST', '/profile', 'Default#profile', 'default_profile'],
		['GET|POST', '/team', 'Default#team', 'default_team'],

		['GET|POST', '/messagerie', 'Default#messagerie', 'default_messagerie'],

		['GET', '/jeux', 'Games#allgames', 'games_allgames'],

		['GET', '/jeux/[i:id]', 'Games#onegame', 'games_onegame'],

	);
