<?php 

$w_config = [
	//url
	'base_url' => '/s/Off_Office/public',	//chemin relatif au domaine, menant à la racine de l'appli

   	//information de connexion à la bdd
	'db_host' => 'localhost',						//hôte (ip, domaine) de la bdd
    'db_user' => 'root',							//nom d'utilisateur pour la bdd
    'db_pass' => 'lanthanide',								//mot de passe de la bdd
    'db_name' => 'offofficebd',								//nom de la bdd
    'db_table_prefix' => '',						//préfixe ajouté aux noms de table

	//authentification, autorisation
	'security_user_table' => 'users',				//nom de la table contenant les infos des utilisateurs
	'security_id_property' => 'id',					//nom de la colonne pour la clef primaire
	'security_username_property' => 'user_fname',		//nom de la colonne pour le "pseudo"
	'security_email_property' => 'user_email',			//nom de la colonne pour l'"email"
	'security_password_property' => 'password',		//nom de la colonne pour le "mot de passe"
	'security_role_property' => 'role',				//nom de la colonne pour le "role"

	'security_login_route_name' => 'login',			//nom de la route affichant le formulaire de connexion
];

require('routes.php');
