<?php

namespace Controller;

use \W\Controller\Controller;

class OpenController extends Controller
{

	/**
	 * Page d'accueil home -> rule pulbic
	 */
		public function home()
		{
			$this->show('open_view/homev');
		}


	/**
	 * Page visualisé et modifié les information client rule -> user || employe || admin
	 */

    	public function client_details(){

	    	$usernameOrEmail = 'alex@gmail.com';

			$userManager = new \W\Manager\UserManager();
			$verify = $userManager->getUserByUsernameOrEmail($usernameOrEmail);
			//debug($verify);

			if (!empty($verify)){
			// Si le formulaire est soumis
			if (!empty($_POST)){
			//print_pre($_POST);
			// Je récupère mes données en POST
			$idP = isset($id) ? trim($_POST['id']) : '';
			$fnameP = isset($_POST['user_fname']) ? trim($_POST['user_fname']) : '';
			$lnameP = isset($_POST['user_lname']) ? trim($_POST['user_lname']) : '';
			$contractIdP = isset($_POST['contract_id']) ? trim($_POST['contract_id']) : '';
			$cityIdP = isset($_POST['city_id']) ? trim($_POST['city_id']) : '';
			$countryIdP = isset($_POST['country_id']) ? trim($_POST['country_id']) : '';
			$userAdressP = isset($_POST['user_address']) ? trim($_POST['user_address']) : '';
			$userGenP = isset($_POST['user_gender']) ? trim($_POST['user_gender']) : '';
			$userBDateP = isset($_POST['user_bdate']) ? trim($_POST['user_bdate']) : '';
			$userPassP = isset($_POST['user_password']) ? trim($_POST['user_password']) : '';
			$userTelP = isset($_POST['user_tel']) ? trim($_POST['user_tel']) : '';
			$dateRegP = isset($_POST['date_registry']) ? trim($_POST['date_registry']) : '';
			$userStatP = isset($_POST['user_status']) ? trim($_POST['user_status']) : '';
			$userCondP = isset($_POST['user_condition']) ? trim($_POST['user_condition']) : '';
			$userMailP = isset($_POST['user_email']) ? trim($_POST['user_email']) : '';

		 	if (isset($_POST['user_fname'])){
		 		echo $_POST['user_fname'];
			 	$usersManager = new \Manager\UsersManager();
				$usersManager->update(['user_fname' => $fnameP],$verify['id']);
				}	
			if (isset($_POST['user_lname'])){
		 		echo $_POST['user_lname'];
			 	$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_lname' => $lnameP],$verify['id']);
			  	}
			}
			if (isset($userGenP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_address' => $userAdressP],$verify['id']);
				}
			if (isset($userGenP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_gender' => $userGenP],$verify['id']);
				}
			if (isset($userBDateP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_bdate' => $userBDateP],$verify['id']);
			}
			if (isset($userTelP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_tel' => $userTelP],$verify['id']);
			}
			if (isset($dateRegP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_address' => $dateRegP],$verify['id']);
			}
			if (isset($userMailP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_email' => $userMailP],$verify['id']);
			}

		  	//traiter les details de client avec placeholder get details de la base de données updade  ici...
		  	$this->show('open_view/c_details',[ 'verify'=> $verify]);
				}	
			}    
			 /**
			 * Page Planning rule -> user || employe || admin
			 */

    	public function claim_add(){

    		if (isset($_POST['id'])){
    			//debug($_POST);
    			//debug($_FILES);
    		
	    	$id = $_POST['id'];
	
		    $ContractsManager = New ContractsManager();
	        $Contractslist = $ContractsManager->find($id);

         	//debug($Contractslist);
	    	//echo 'renseignement d\'une sinistre';
	        //traiter le formulaire options upload img pdf ou champ texte obs; ajouter info client apartir de la db 

			$dossier = PUBLIC_DIRECTORY.'/assets/eclient/'.$Contractslist['user_dir']; 

			if (isset($_FILES['avatar'])){
				$fichier = date('Ymd').'-'.$Contractslist['user_lname'].basename($_FILES['avatar']['name']);
			}
			$taille_max = 1000000;

			if (isset($_POST['avatar'])){
				$taille = filesize($_FILES['avatar']['tmp_name']);
				
			$extensions = array('.docx','.pdf','.png', '.gif', '.jpg', '.jpeg');
			
			$extension = strrchr($_FILES['avatar']['name'], '.');
						//vérifications de sécurité
			if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
			{
				echo strrchr($_FILES['avatar']['name'], '.');;
			     $erreur = ' //Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou docx';
			}
			}
			if (isset($_POST['avatar'])){
					if($taille>$taille_max){
			     $erreur = 'Le fichier est trop grand';
				}
			}	
		
			if (!isset($erreur)) //S'il n'y a pas d'erreur -> upload
			{
			     //Formatage du fichier
			     $fichier = strtr($fichier, 
			          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
			          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
				
 				 $fileUpload = move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier. $fichier);

			     if ($fileUpload){ // Teste insertion extension PDF et DOCX
			     		if ($extension == '.pdf' or $extension == '.docx'){
			     			$attachments = $fileUpload;   
			     		}
			     		else {
			     			 $claimImg = $fileUpload;
			     		}
			     	//requête d'insertion dans la base de données
		     		$ClaimsManager = new \Manager\ClaimsManager();

		     		//debug($fname);
					$ClaimsManager->insert(
						array(
						'id' => $_POST['adm_id'],
						'user_fname' => $fname,
						'user_lname' => $lname,
						'claim_img' => $claimImg,
						'contracts_contract_id' => $id,
						'user_email' => $empl['employ_name'],
						'users_user_id' => $_POST['adm_id'],
						'atachm' => $attachments,
						)
						);
			          	echo 'Upload effectué avec succès';
			     	}
			    	else{ 
			         	echo 'Echec de l\'upload !';
			     }
				}
				else{
			     	echo $erreur;
				}
	        $this->show('open_view/claim_add',['contracts' => $Contractslist]);
	        } 
	        
	    }

    	public function e_client()
	    {
	    	echo 'Espace de Client et cancel un demande de sinistre ';
	        //traiter le formulaire login ici...
	        //$this->show('open_view/e_clientv');
	    }


    /**
	 * Demande un document form ajouter les données du client atravers de la db avec 3 checkbox '1= carte gris voiture , 2= home protect 3= copy du contract'  rule -> user || employe || admin
	 */
	    public function doc_request()
	    {
	    	echo 'Demande un document';
	        //traiter le form de demande de doc de client et reevoier au GenController -> methode gen_pdf  ici...
	        //$this->show('open_view/doc_requestv');
	    }


    /**
	 * Page Verification de docs -> rule pulbic
	 */
	    public function verification()
	    {
	    	echo 'Verification de docs publiées ';
	        //traiter le docs client si le doc est valable echo nom client, nº doc , nom doc, date de fin de validité   ici...
	        //$this->show('open_view/verificationv');
	    }


    
    /**
	 * Page signup client -> rule pulbic
	 */
		public function signup()
	    {
	    	echo 'Inscription';
	        //traiter le form de Inscription de client   ici...
	        // avec confirm password
	        //$this->show('open_view/signupv');
	    }
   /**
	 * Page reinstalation de mot de pass client -> rule pulbic
	 */
		public function resetpass()
	    {
	    	echo 'recovery password';
	        //traiter le email de recuperation de mot pass   ici...
	        // avec token créer le champ a la table users et duplique le process pour le controller admin
	        //$this->show('open_view/recoveryv');
	    }
   /**
	 * Page reinstalation de mot de pass client -> rule pulbic
	 */
		public function recoverypass()
	    {
	    	echo 'recovery password';
	        //traiter le form de recuperation de mot pass   ici...
	        // avec confirm password
	        //$this->show('open_view/recoveryv');
	    }
    
    /**
	 * Page Employer delete client = 'status inatif' rule -> user || employe || admin
	 */
    	public function client_delete()
	    {
	    	echo 'delete';
	        //traiter suppression de client efface tous les docs existents et marque le status 0 = inatif   ici...
	        //$this->show('open_view/client_detailsv');
	    }





}
