<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\UsersManager;

class UsersController extends \W\Controller\Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function login()
	{
		echo "login and signup ";
		$this->show('open_view/login');
	}

	public function loginPost() {
		$usernameOrEmail = isset($_POST['usernameDem']) ? trim($_POST['usernameDem']) : '';
		$passwordDem = isset($_POST['passwordDem']) ? trim($_POST['passwordDem']) : '';

		// Il manque la vérification des données

		$authManager = new \W\Security\AuthentificationManager();
		$usr_id = $authManager->isValidLoginInfo($usernameOrEmail, $passwordDem);
		if ($usr_id === 0) {
			echo 'Arf :: login invalide<br />';
		}
		else {
			$userManager = new \Manager\UsersManager();
			// On met les infos en session
			$authManager->logUserIn(
				$userManager->find($usr_id)
			);
			// On redirige vers la home
			$this->redirectToRoute('home');
		}
	}


    public function signup()
    {
    
        //traiter le formulaire contact ici...
        $this->show('open_view/signup');
    }

    public function signupPost()
    {
    
    	debug($_POST);
    	$username = isset($_POST['username'])?trim($_POST['username']):'';
    	$email = isset($_POST['email'])?trim($_POST['email']):'';
    	$passwordDem = isset($_POST['passwordDem']) ? trim($_POST['passwordDem']) : '';
		$passwordDem2 = isset($_POST['passwordDem2']) ? trim($_POST['passwordDem2']) : '';

		// Il manque la validation des données

		if ($passwordDem != '' && $passwordDem == $passwordDem2) {
			// J'insère en DB
			$userManager = new \Manager\UsersManager();
			$userManager->insert(
				array(
					'username' => $username,
					'email' => $email,
					'password_hash' => password_hash($passwordDem, PASSWORD_BCRYPT),
					'role' => 'user'
				)
			);

			// On redirige vers la page de login
			//$this->redirectToRoute('users_login');
		}

		else {
			echo 'Arf :: password vide!<br />';
			exit;
		}
    }

    public function logout() {
		// On supprime le user en session
		$authManager = new \W\Security\AuthentificationManager();
		$authManager->logUserOut();

		// On redirige vers la home
		$this->redirectToRoute('home');
	}
}