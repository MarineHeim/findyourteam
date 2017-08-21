<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['GET|POST', '/contact', 'Default#contact', 'default_contact'],

		['GET|POST', '/register', 'Security#register', 'security_register'],
		['GET|POST', '/register', 'Security#login', 'security_login'],
		['GET', '/logout', 'Security#logout', 'security_logout'],

		['GET', '/api/users', 'Default#userListApi', 'profile_user_list'],


		['GET|POST', '/profile/[*:username]', 'Default#profile', 'default_profile_view'],
		['GET|POST', '/profile', 'Default#profile', 'default_profile'],
		['GET|POST', '/teams', 'Default#teams', 'default_teams'],
		['GET|POST', '/players', 'Default#players', 'default_players'],

		['GET|POST', '/messagerie', 'Default#messagerie', 'default_messagerie'],
		['GET|POST', '/messagerie/recu', 'messagerie#recu', 'messagerie_recu'],
		['GET|POST', '/messagerie/lecture', 'messageriet#lecture', 'messagerie_lecture'],
		['GET|POST', '/messagerie/delete', 'messagerie#delete', 'messagerie_delete'],

		['GET', '/jeux', 'Games#allgames', 'games_allgames'],

		['GET', '/jeux/[i:id]', 'Games#onegame', 'games_onegame'],

	);
