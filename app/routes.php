<?php

	$w_routes = array(

		// Homepage
		['GET', '/', 'Default#home', 'default_home'],
		// Fin Homepage

		// Page contact
		['GET|POST', '/contact', 'Default#contact', 'default_contact'],
		// Fin page contact


		// Page d'inscription/connexion
		['GET|POST', '/register', 'Security#register', 'security_register'],
		['GET|POST', '/register', 'Security#login', 'security_login'],
		['GET', '/logout', 'Security#logout', 'security_logout'],
		// Fin page d'inscription/connexion


		['GET', '/api/users', 'Default#userListApi', 'profile_user_list'],

		// Pages du profil
		['GET|POST', '/profile/[i:id]', 'Profile#profileview', 'profile_profile_view'],
		['GET|POST', '/profile', 'Profile#profile', 'profile_profile'],
		// Fin pages du profil

		// Pages joueurs
		['GET|POST', '/players', 'Default#players', 'default_players'],
		// Fin des joueurs

		// Pages de la messagerie interne
		['GET|POST', '/messagerie', 'Messagerie#envoi', 'messagerie_envoi'],
		['GET|POST', '/messagerie/recu', 'Messagerie#recu', 'messagerie_recu'],
		['GET|POST', '/messagerie/envoye', 'Messagerie#envoye', 'messagerie_envoye'],
		['GET|POST', '/messagerie/delete', 'Messagerie#delete', 'messagerie_delete'],
		['GET', 	 '/messagerie/lecture/[i:id]', 'Messagerie#lecture', 'messagerie_lecture'],
		// Fin des pages de la messagerie interne

		// Pages des jeux
		['GET', '/jeux', 'Games#allgames', 'games_allgames'],
		['GET', '/jeux/[i:id]', 'Games#onegame', 'games_onegame'],
		// Fin des pages des jeux

		// Pages admins
		['GET|POST', '/admin', 'Admin#gamescreate', 'admin_gamescreate'],
		['GET|POST', '/admin/gamesdelete', 'Admin#gamesdelete', 'admin_gamesdelete'],
		['GET|POST', '/admin/gamesupdate', 'Admin#gamesupdate', 'admin_updategame'],
	);
