<?php

namespace Controller;
//use \ClasseEmail\EnvoiEmail;
use \W\Controller\Controller;
use \Manager\UsersManager;

use \W\Manager\UserManager;
use W\Security\StringUtils;

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
			echo 'empty password !<br />';
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

	public function reset_pass()
	{

// formulaire soumis, on appelle la fonction  getUserByUsernameOrEmail,  qui permet de récupérer un utilisateur en fonction de son email ou de son pseudo

if (!empty($_POST)) {
	$usernameOrEmail=$_POST['user_email'];
	$userManager= new UserManager();
	debug($_POST);
	$verifyEmail = $userManager->getUserByUsernameOrEmail($usernameOrEmail);
	debug($verifyEmail);
		if (!empty($verifyEmail)) {
				
// On teste si l'email existe dans la DB
if ($userManager->emailExists($usernameOrEmail)) {
			
		echo "L'email existe déjà dans la base de données.";
		
		// Je génère un token par la méthode md5 et salt
		//$token = md5(time().'tokenForgotPassword'.$usernameOrEmail);
		$token = \W\Security\StringUtils::randomString(32);
		debug($token);

		// Je génère un token par la fonction StringUtils de Security
		$usersManager= new UsersManager();
		
		$usersManager->update(
				array(
					'user_token' => $token
				),$verifyEmail['id'] 
			);

		// J'envoie l'email au client pour réinitialiser le mot de passe avec PHP mailer
		$body = 'Réinitialiser votre mot de passe  ,<br>Cliquez ici pour changer votre mot de passe : <a href="'.PUBLIC_DIRECTORY.'/initpass/'.$token.'">lien</a><br><br>Veillez le changer le plus tôt possible<br>';
		$mailemploye = 'annemarie_yim@yahoo.fr';
		$atachm='';
        $envoiEmail = new \ClasseEmail\EnvoiEmail();
    	$envoiEmail->sendEmail($mailemploye,$verifyEmail['user_email'],$body,$atachm);
    	echo ' : votre nouveau mot de passe vous a été envoyé par email.<br>';
    	
			}
			else {
				echo 'email non reconnu<br>';
			}	
	}
}

		echo "forgot password";
		$this->show('open_view/reset_pass');
	}


	public function envoiEmail($mailemploye,$mailuser,$atachm){
        
	 
        //envoyer par email à un ou plusieurs destinataires ...
        
        //$this->show('open_view/gen_envoiEmail');
    }//fin de forward pdf

    //Méthode permettant de réinitialiser le mot de passe

    public function init_pass(){

	// Je récupère le token spécifié dans l'URL
	if (isset($_GET['token'])) {
		$token = $_GET['token'];
		$usersManager= new UsersManager();
		debug($_GET);
		$tkbd = $usersManager->getTok($token);
		//on teste l'existence du token généré dans la bd
		if ($tkbd) {
			echo $tkbd['id'].'le token existe ';
		}else{
			echo 'le token n\'existe pas ';
		}

		if ($tkbd) {
			
	    	$email = isset($_POST['email'])?trim($_POST['email']):'';
	    	$passwordDem = isset($_POST['passwordDem']) ? trim($_POST['passwordDem']) : '';
			$passwordDem2 = isset($_POST['passwordDem2']) ? trim($_POST['passwordDem2']) : '';

	// On vérifie que les deux mots de passe entrés sont identiques
			if ($passwordDem != '' && $passwordDem == $passwordDem2) {
	// si les deux mots de passe sont identiques, alors je fais une mise à jour du mot de passe hasché dans la DB
				$userManager = new \Manager\UsersManager();
				$userManager->update(
					array(
						'password_hash' => password_hash($passwordDem, PASSWORD_BCRYPT),
						'user_token' => $tkbd['id']
						),$tkbd['id']
					);
		}else{
			echo 'le token n\'existe pas, vous ne pouvez pas réinitialiser le mot de passe';
		}
	    	$this->show('open_view/init_pass');	//si le token existe j'affiche le formulaire de réinitialisation
		
		}

	 }  
	}

}//fin classe

