<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\UsersManager;
use \Manager\ContractsManager;

class UsersController extends \W\Controller\Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function login()
	{	
		
		$this->show('open_view/login');
	}

	public function loginPost() {
		$usernameOrEmail = isset($_POST['username']) ? trim($_POST['username']) : '';
		$password = isset($_POST['pwd']) ? trim($_POST['pwd']) : '';

		// Il manque la vérification des données
		$authManager = new \W\Security\AuthentificationManager();
		$usr_id = $authManager->isValidLoginInfo($usernameOrEmail, $password);
		if ($usr_id === 0) {
			echo 'Arf :: login invalide<br />';
		}
		else {
			$userManager = new \Manager\UsersManager();
			// On met les infos en session
			$authManager->logUserIn(
				$userManager->find($usr_id)
			);
			echo "rrrrrrrbgvgvfcf";
			// On redirige vers la home
			$this->redirectToRoute('home');
		}
	}


    public function signup()
    {
   		
        //traiter le formulaire contact ici...
        $this->show('open_view/login');
    }

    public function signupPost()
    {
     echo 'fui e voltei';    	

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
		$user_fname = isset($_POST['fname'])?trim($_POST['fname']):'';
    	$user_lname= isset($_POST['lname'])?trim($_POST['lname']):'';
    	$contract_id = isset($_POST['id'])?trim($_POST['id']):'';
    	$city_id= isset($_POST['cityid'])?trim($_POST['city']):'';
    	$country_id= isset($_POST['countryid'])?trim($_POST['country']):'';   	
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

		if ($password != '' && $password == $password2) {
			// J'insère en DB
			$userManager = new \Manager\UsersManager();
			$userManager->insert(
				array(
					'user_fname' => $user_fname,
					'user_lname' => $user_lname,
					'contract_id' => $contract_id,
					'user_bdate' => $user_bdate,
					//'city_id' => $city_id,
					//'country_id' => $country_id,
					'user_address' => $adress,
					'user_gender' => $user_gender,
					'user_email' => $email,
					'user_tel' => $user_tel,
					'date_registry' => date('Y-m-d'),
					'user_password' => password_hash($password, PASSWORD_BCRYPT),
					'user_condition' => '1',
					'user_status' => '1'
				)
			);

			// On redirige vers la page de login
			//$this->redirectToRoute('users_login');
		}

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
}