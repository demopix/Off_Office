<?php

	define('PUBLIC_DIRECTORY',dirname(__FILE__));

	//autochargement des classes
	require("../vendor/autoload.php");

	//configuration
	require("../app/configAdmin.php");

	//rares fonctions globales
	require("../W/globals.php");

	//instancie notre application  en lui passant la config et les routes
	$app = new W\App($w_routesAdmin, $w_config);

	//exécute l'application
	$app->run();