<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\UsersManager;
use \Manager\ContractsManager;
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
		$usernameOrEmail = isset($_POST['username']) ? trim($_POST['username']) : '';
		$plainPassword = isset($_POST['pwd']) ? trim($_POST['pwd']) : '';
		//debug($_POST);

		// Il manque la vérification des données

		$authManager = new \W\Security\AuthentificationManager();
		$usr_id = $authManager->isValidLoginInfo($usernameOrEmail, $plainPassword);
		if ($usr_id === 0) {
			echo 'Arf :: login invalide<br />';
			//require "..\public\assets\js\login.js";
		}

		else {
			echo "ok";
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
        $this->show('open_view/login');
    }

    public function signupPost() //function qui teste si les champs du formulaire on ete remplis pour les envoyer a la base de données
    {
    	//pour tester si le contrat exist dans la table contracts, si oui il montre le formulaire de signup
		if (!empty($_POST['fetch_c'])) {
			$contractBD = new ContractsManager();
	    	//debug($_POST);				
			$fetch_c = $_POST['fetch_c'];
			$c = $contractBD->findName($fetch_c);
			$contractBD = new ContractsManager();
	        	debug($_POST);
			    $c = $contractBD->findName($fetch_c);
				
				if ($contractBD->countR($fetch_c) > 0) {
				 $c[] = true;
				}	
	
		    //template motor
			 $this->show('open_view/login',['c'=>$c]);

		}
		//pour tester le remplissage du formulaire et donner le contenu de chaque post a une variable
		$user_fname = isset($_POST['fname'])?trim($_POST['fname']):'';
    	$user_lname= isset($_POST['lname'])?trim($_POST['lname']):'';
    	$contract_id = isset($_POST['id'])?trim($_POST['id']):'';
    	$city_name= isset($_POST['city'])?trim($_POST['city']):'';
    	$p_code = isset($_POST['pCode'])?trim($_POST['pCode']):'';
    	//$country_id= isset($_POST['countryid'])?trim($_POST['country']):'';   	
    	$user_gender= isset($_POST['gender'])?trim($_POST['gender']):'';
    	$user_bdate= isset($_POST['bdate'])?trim($_POST['bdate']):'';
    	$user_tel= isset($_POST['phone'])?trim($_POST['phone']):'';    	
    	$adress = isset($_POST['adress'])?trim($_POST['adress']):'';
    	$email = isset($_POST['email'])?trim($_POST['email']):'';    	
    	$password = isset($_POST['pwd']) ? trim($_POST['pwd']) : '';
		$password2 = isset($_POST['pwd2']) ? trim($_POST['pwd2']) : '';
		//
		debug($user_fname);
		// Il manque la validation des données

		//si la password et egal a la password de confirmation on rempli les donnes de user dans la table
		if ($password != '' && $password == $password2) {

			// J'insère en DB
			$userManager = new \Manager\UsersManager();
			$userManager->insert(
				array(
					'user_fname' => $user_fname,
					'user_lname' => $user_lname,
					'contract_id' => $contract_id,
					'user_bdate' => $user_bdate,
					'city_name' => $city_name,
					'p_code' => $p_code,
					//'country_id' => $country_id,
					'user_address' => $adress,
					'user_gender' => $user_gender,
					'user_email' => $email,
					'user_tel' => $user_tel,
					'date_registry' => date('Y-m-d'),
					'user_password' => password_hash($password, PASSWORD_BCRYPT), //pour incripter et cache la password
					'user_condition' => '1',
					'user_status' => '1',
					'role' => 'user'
				)
			);

			// On redirige vers la page de login
			//$this->redirectToRoute('users_login');
		}
		//si les password sont pas les memes on indique password vide
		else {
			echo 'Arf :: password vide!<br />';
			
		}
		 $this->show('open_view/login');
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
		$body = 'Réinitialiser votre mot de passe,<br>Cliquez ici pour changer votre mot de passe : <a href="">lien  http://localhost'.$this->generateurl("admin_initpass",['token'=> $token]).'</a><br><br>Veillez le changer le plus tôt possible<br>';
		$mailemploye = 'annemarie_yim@yahoo.fr';
		$atachm='';
        $envoiEmail = new \ClasseEmail\EnvoiEmail();
    	$envoiEmail->sendEmail($mailemploye,$verifyEmail['user_email'],$body,$atachm);
    	echo ' : votre nouveau mot de passe vous a été envoyé par email.<br>';
    	debug($body);
    	
			}
			else {
				echo 'email non reconnu<br>';
			}	
	}
  }

		echo "forgot password";
		$this->show('open_view/reset_pass');
	}//end reset pass


	public function envoiEmail($mailemploye,$mailuser,$atachm){
        
	 
        //envoyer par email à un ou plusieurs destinataires ...
        
        //$this->show('open_view/gen_envoiEmail');
    }//fin de enoviEmail pdf

    //Méthode permettant de réinitialiser le mot de passe

    public function init_pass($token){
$usersManager= new UsersManager();
$tkbd = $usersManager->getTok($token);
	// Je récupère le token spécifié dans l'URL
	if ($tkbd) {
		//$token = $_GET['token'];
				debug($token);
		
		debug($tkbd);
		//on teste l'existence du token généré dans la bd
	
		
			
	    	$email = isset($_POST['email'])?trim($_POST['email']):'';
	    	$user_password = isset($_POST['user_password']) ? trim($_POST['user_password']) : '';
			$user_password2 = isset($_POST['user_password2']) ? trim($_POST['user_password2']) : '';

	// On vérifie que les deux mots de passe entrés sont identiques
			if ($user_password != '' && $user_password == $user_password2) {
	// si les deux mots de passe sont identiques, alors je fais une mise à jour du mot de passe hasché dans la DB
				$userManager = new \Manager\UsersManager();
				$userManager->update(
					array(
						'user_password' => password_hash($user_password, PASSWORD_BCRYPT),
						'user_token' => $tkbd['id']
						),$tkbd['id']
					);
				echo "ok changed";
		
		
		}

	    	$this->show('open_view/init_pass');	//si le token existe j'affiche le formulaire de réinitialisation
	 } else{
			//echo 'le token n\'existe pas, vous ne pouvez pas réinitialiser le mot de passe';
			
			$this->redirectToRoute('home');
		} 
	}

}//fin classe

