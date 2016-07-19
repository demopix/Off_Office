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

     	public function client_details()
	    {
	    	echo 'Details de client et update ';
	        //traiter les details de client avec placeholder get details de la base de données updade  ici...
	        //
	        $this->show('open_view/c_details');


	}

	        /**
	 * Page Planning rule -> user || employe || admin
	 */
    	public function claim_add(){

    		if (isset($_POST['id'])){
    			//debug($_POST);
    			//debug($_FILES);
    			# code...
    		
	    	$id = $_POST['id'];

	
		    $ContractsManager = New ContractsManager();
	        $Contractslist = $ContractsManager->find($id);

         	//debug($Contractslist);

         
         	
         	
         	/***********************************/
	    	//echo 'renseignement d\'une sinistre';
	        //traiter le formulaire options upload img pdf ou champ texte obs; ajouter info client apartir de la db 


			$dossier = PUBLIC_DIRECTORY.'/assets/eclient/'.$Contractslist['user_dir']; 

			if (isset($_FILES['avatar'])){
				$fichier = date('Ymd').'-'.$Contractslist['user_lname'].basename($_FILES['avatar']['name']);
			}
			$taille_maxi = 1000000;

			if (isset($_POST['avatar'])){
				$taille = filesize($_FILES['avatar']['tmp_name']);
				
			$extensions = array('.doc','.pdf','.png', '.gif', '.jpg', '.jpeg');
			
				$extension = strrchr($_FILES['avatar']['name'], '.');
						//érifications de sécurité
			if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
			{
				echo strrchr($_FILES['avatar']['name'], '.');;
			     $erreur = '   //   Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
			}
			}
if (isset($_POST['avatar'])){
					if($taille>$taille_maxi){
			     $erreur = 'Le fichier est trop gros...';
				}
			}	
		
			if(!isset($erreur)) //S'il n'y a pas d'erreur -> upload
			{
			     //Formatage du fichier
			     $fichier = strtr($fichier, 
			          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
			          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
			     
			     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) // Correct si return TRUE
			     {
			          echo 'Upload effectuer;

			          tué avec succès !';
			     }
			     else{ //else (returns False).
			          echo 'Echec de l\'upload !';
			     }
			}
			else
			{
			     echo $erreur;
			}
	        //

	        $this->show('open_view/claim_add',['contracts' => $Contractslist]);
	        } 
	        
	    }

	/**
	 * Page Espace de Client après login authorisé le access ; doc_request, e_client, claim_add
	rule -> user || employe || admin
	 */
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
	    	echo 'delete';
	        //traiter suppression de client efface tous les docs existents et marque le status 0 = inatif   ici...
	        //$this->show('open_view/client_details');
	    }
      public function contact()
	    {
	    	echo 'form = title  + message + email +btn submit';
	        //traiter suppression de client efface tous les docs existents et marque le status 0 = inatif   ici...
	        //
	        $this->show('open_view/contact');
	    }




}