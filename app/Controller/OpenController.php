<?php
namespace Controller;

use \W\Controller\Controller;
use \Manager\ContractsManager;
use \Manager\ClaimsManager;

class OpenController extends Controller
{

	/**
	 * Page d'accueil Back Office -> rule public
	 */
		public function home()
		{
			$this->show('open_view/home');
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
			$cityNameP = isset($_POST['city_name']) ? trim($_POST['city_name']) : '';
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

		 	if (!empty($_POST['user_fname'])){
		 		//echo $_POST['user_fname'];
			 	$usersManager = new \Manager\UsersManager();
				$usersManager->update(['user_fname' => $fnameP],$verify['id']);
				}	
			if (!empty($_POST['user_lname'])){
		 		//echo $_POST['user_lname'];
			 	$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_lname' => $lnameP],$verify['id']);
			  	}
			}
			if (!empty($userAdressP)){
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_address' => $userAdressP],$verify['id']);
				}
			if (!empty($cityNameP)){
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['city_name' => $cityNameP],$verify['id']);
				}
			if (!empty($userGenP)){
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_gender' => $userGenP],$verify['id']);
				}
			if (!empty($userBDateP)){
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_bdate' => $userBDateP],$verify['id']);
			}
			if (!empty($userTelP)){
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_tel' => $userTelP],$verify['id']);
			}
			if (!empty($dateRegP)){
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_address' => $dateRegP],$verify['id']);
			}
			if (!empty($userMailP)){
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_email' => $userMailP],$verify['id']);
			}

		  	//traiter les details de client avec placeholder get details de la base de données
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

			//limitation taille fichier (que j'ai d'ailleurs aussi modifié dans le fichier php.ini)
			$taille_max = 1000000;
			$taille = filesize($_FILES['avatar']['tmp_name']);
				
			$extensions = array('.docx','.txt','.pdf','.png', '.gif', '.jpg', '.jpeg');
			$extension = strrchr($_FILES['avatar']['name'], '.');

			//vérifications de sécurité
			if(!in_array($extension, $extensions)){ //Si l'extension n'est pas dans le tableau
				echo strrchr($_FILES['avatar']['name'], '.');;
			     $erreur = 'Vous devez uploader un fichier de type pdf, png, gif, jpg, jpeg, txt ou docx';
			}
			if (isset($_POST['avatar'])){ //test taille fichier max
					if ($taille>$taille_max){
			     $erreur = 'Le fichier est trop grand';
				}
			}	
		 	//S'il n'y a pas d'erreur, je upload
			if (!isset($erreur)){
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
			     	
		     		$ClaimsManager = new \Manager\ClaimsManager();
		     		
		     		//!!requête d'insertion dans la base de données!!
					if (isset($claimImg)){ 
						$ClaimsManager->insert(array(
							'id' => $Contractslist['employ_email'],
							'user_fname' => $Contractslist['user_fname'],
							'user_lname' => $Contractslist['user_lname'],
							'claim_img' => $claimImg,
							'contracts_contract_id' => $id,
							'user_email' => $Contractslist['users_user_email']
							));
						}
					if (isset($attachments)){ 
						$ClaimsManager->insert(array(
							'id' => $Contractslist['employ_email'],
							'user_fname' => $Contractslist['user_fname'],
							'user_lname' => $Contractslist['user_lname'],
							'contracts_contract_id' => $id,
							'user_email' => $Contractslist['users_user_email'],
							'atachm' => $Contractslist['attachm']
							));
						}
			          		echo 'Upload effectué avec succès';
			     		} 
			     		else { 
			         		echo 'Echec de l\'upload !';
			     		}
			    	}
			    	else {
			     		echo $erreur;
					}
				}
	        $this->show('open_view/claim_add',['contracts' => $Contractslist]);
	        } 
	        
	    }

	/**
	 * Page Espace de Client après login authorisé le access ; doc_request, e_client, claim_add
	rule -> user || employe || admin
	 */
    	public function e_client()
	    {
	    	echo 'Espace de Client et annulation de demande de sinistre ';
	        //traiter le formulaire login ici...
	        //
	        $this->show('open_view/e_client');
	    }


    /**
	 * Demande un document form ajouter les données du client atravers de la db avec 3 checkbox '1= carte gris voiture , 2= home protect 3= copy du contract'  rule -> user || employe || admin
	 */
	    public function doc_request()
	    {
	    	echo 'Demande un document';
	        //traiter le form de demande de doc de client et reevoier au GenController -> methode gen_pdf  ici...
	        //$this->show('open_view/doc_request');
	    }


    /**
	 * Page Verification de docs -> rule pulbic
	 */
	    public function verification()
	    {

	    	$fetch_c = $_POST['fetch_c'];
		$contractBD = new ContractsManager();

 		if (!empty($_POST['fetch_c'])) {

        	//debug($_POST);
		    $c = $contractBD->findName($fetch_c);
			
			if ($contractBD->countR($fetch_c) > 0) {
			 $c[] = true;
			}
	
	
		    //template motor
			 $this->show('open_view/verification',['c'=>$c]);

		} //if not empty
	        //traiter le docs client si le doc est valable echo nom client, nº doc , nom doc, date de fin de validité   ici...
	        //

	        $this->show('open_view/verification');
	    }


    
    /**
	 * Page signup client -> rule pulbic
	 */
		public function login()
	    {
	    	
	        //traiter le form de Inscription de client   ici...
	        // avec confirm password
	        //
	        $this->show('open_view/login');
	    }
	
    
    /**
	 * Page Employer delete client = 'status inatif' rule -> user || employe || admin
	 */
    	public function client_delete()
	    {
	    	// :param pour binder le values
			$query = "DELETE FROM contracts WHERE id = :id";

			// tableau associatif qui a la variable qui binde la value
			$data = Array(":id" => $id);

			// query et resultat
			$deleted = $db->delete($query, $data);

			// verifier le resultat
			if($deleted > 0){
			    echo "Supprimé avec succès!";
			}
			else{
				echo 'Erreur survenu';
			}
			    
	        //traiter suppression de client efface tous les docs existents et marque le status 0 = inatif   ici...
	        //
	    }
      public function contact()
	    {
	    	echo 'form = title  + message + email +btn submit';
	        //traiter suppression de client efface tous les docs existents et marque le status 0 = inatif   ici...
	        //
	        $this->show('open_view/contact');
	    }




}