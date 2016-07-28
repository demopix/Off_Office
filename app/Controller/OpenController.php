<?php
namespace Controller;

use \W\Controller\Controller;
use \Manager\ContractsManager;
use \Manager\ClaimsManager;


class OpenController extends Controller{
	/**
	 * Page d'accueil Back Office -> rule public
	 */
		public function home()
		{
			$this->show('open_view/home');
		}

     	public function client_details(){

	    	$user =  $this->getUser(); 

			$userManager = new \W\Manager\UserManager();
			$verify = $userManager->getUserByUsernameOrEmail($user['user_email']);

			if (sizeof($verify) > 0){
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
			$ContractP = isset($_POST['contract_num']) ? trim($_POST['contract_num']) : '';

			//Si le Post n´est pas vide, je retourne la donnée correspondante
		 	if (!empty($_POST['user_fname'])){
		 		echo $_POST['user_fname'];
			 	$usersManager = new \Manager\UsersManager();
				$usersManager->update(['user_fname' => $fnameP],$verify['id']);
				}	
			if (!empty($_POST['user_lname'])){
		 		echo $_POST['user_lname'];
			 	$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_lname' => $lnameP],$verify['id']);
			  	}
			
			if (!empty($userAdressP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_address' => $userAdressP],$verify['id']);
				}
			if (!empty($cityNameP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['city_name' => $cityNameP],$verify['id']);
				}
			if (!empty($userGenP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_gender' => $userGenP],$verify['id']);
				}
			if (!empty($userBDateP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_bdate' => $userBDateP],$verify['id']);
			}
			if (!empty($userTelP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_tel' => $userTelP],$verify['id']);
			}
			if (!empty($dateRegP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_address' => $dateRegP],$verify['id']);
			}
			if (!empty($userMailP)) {
				$usersManager = new \Manager\UsersManager();	
				$usersManager->update(['user_email' => $userMailP],$verify['id']);
				}
				$this->redirectToRoute('open_c_details');
			}

		  	//traiter les details de client avec placeholder get details de la base de données en update
		  	//sur c_details.php
		  	$this->show('open_view/c_details',[ 'verify'=> $verify]);
			}else{
				$this->redirectToRoute('home');
			}
		}    
    	public function claim_add(){

    		if (isset($_POST['id'])){
    			//debug($_POST);
    			//debug($_FILES);
    		
	    	$id = $_POST['id'];
	
		    $ContractsManager = New ContractsManager();
	        $Contractslist = $ContractsManager->find($id);
         	//debug($Contractslist);
	   
	    	//Chemin d'arborescence dans lequel le fichier à envoyer sera renvoyé
			$dossier = PUBLIC_DIRECTORY.'/assets/eclient/'.$Contractslist['user_dir']; 
			if (isset($_FILES['avatar'])){
				$fichier = date('Ymd').'-'.$Contractslist['user_lname'].basename($_FILES['avatar']['name']);
			//limitation taille fichier (que j'ai d'ailleurs aussi modifié dans le fichier php.ini !)
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
			     $fichier = strtr($fichier, //Formatage du fichier
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
		     		
		     		//insertion dans la base de données
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
					//insertion dans la base de données
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
    	public function e_client()
	    {
	    	echo 'Espace de Client et cancel un demande de sinistre ';
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

	    			$contractBD = new ContractsManager();

 		if (!empty($_POST['fetch_c'])) {
           $fetch_c = $_POST['fetch_c'];

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
	    	echo 'delete';
	        //traiter suppression de client efface tous les docs existents et marque le status 0 = inatif   ici...
	        //$this->show('open_view/client_details');
	    }
      
public function contact()
		    {
		    	// configure

// J'initialise mes variables de validation
	$nom = '';
	$prenom = '';
	$email = '';
	$message = '';
	$telephone = '';
	

	$formValide = false;
	// Si Formulaire soumis
	if (!empty($_POST)) {
		print_r($_POST);

	$nomValide = false;
	$prenomValide = false;
	$emailValide = false;

	// Traitement des données
	$nom = str_ireplace('?', '', strtoupper(strip_tags(trim($_POST['surname']))));
	$prenom = strip_tags(trim($_POST['name']));
	$email = strip_tags(trim($_POST['email']));
	$message = strip_tags(trim($_POST['message']));
	$telephone = strip_tags(trim($_POST['phone']));
	$subject='formulaire de contact';
   
    $body='bonjour Offoffice, ce message provient de:'.$nom.' '.$prenom.'<br/>'.'email:'.$email.'<br/>'.'message:'.$message.
    'message:'.'<br/>'.'telephone:'.$telephone;

	// Je teste si le nom est non vide
	if (empty($nom)) {
		echo 'Le nom soumis est vide<br />';
	}
	// Je teste si le nom est valide
	else if (strlen($nom) >= 3) {
		// Détecte "aaa" ou "bbb"
		if ($nom[0] == $nom[1] && $nom[1] == $nom[2]) {
			echo 'Le nom est incorrect<br />';
		}
		else {
			$nomValide = true;
		}
	}

	// Je teste si le prénom est non vide
	if (empty($prenom)) {
		echo 'Le prénom soumis est vide<br />';
	}
	// Je test si si le prénom est valide
	else if (strlen($prenom) >= 3) {
		$prenomValide = true;
	}

	// Je teste si l'email est non vide
	if (empty($email)) {
		echo 'L\'adresse email est vide<br />';
	}
	// Sinon, je teste si l'email est valide
	else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		echo "$email is not a valid email address";
	}
	else {
		$emailValide = true;
	}

	// Si c'est valide, j'affiche le nom et le prénom
	if ($nomValide && $prenomValide && $emailValide) {
		
		$envoiEmail= new \ClasseEmail\EnvoiEmail();
		$envoiEmail->sendEmail('offoffice.info@gmail.com', $subject='formulaire de contact',$body,$email,$attachments=array());
		
    	echo ' : Le formulaire de contact a bien été soumis.<br>';	

		$formValide = true;
		}
	}

     $this->show('open_view/contact');
    }
    public function about()
	    {
	    	 $this->show('open_view/about');
	        
	    }

}//fin de OpenController






