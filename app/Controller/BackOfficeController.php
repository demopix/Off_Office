<?php

namespace Controller;

use \Manager\ContractsManager;
use \Manager\AdminManager;

use \W\Controller\Controller;

class BackOfficeController extends Controller
{

	/**
	 * Page d'accueil Back Office
	 */
		public function backoffice($e)
		{
			$adminBD = new AdminManager();
			$contractBD = new ContractsManager();
			$countC = $contractBD->count();
			$countE = $adminBD->count();
            //debug($countC);debug($countE);
			if ($e == 'Employeds'){
				$employL = $adminBD->findAll();
			//
				

			$e = true;	
			}
			else{
			$clientL = $contractBD->findAll();
			
			$e = false;
			//debug($clientL);
			}
			
			$this->show('backoffice_view/backoffice',['employL'=> $employL , 'clientL'=> $clientL , 'countC'=> $countC ,'countE'=> $countE , 'e'=>$e]);
		}

	/**
	 * Page Client Management 
	 */
	    public function c_management()
	    {
	    	echo 'Client Management';
	        //traiter le info client et list de clients  ici...
	        //$this->show('backoffice_view/c_management');
	    }

    /**
	 * Page Employer ajouter nouveau contract 
	 */
	public function contract_add()
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
			 $this->show('backoffice_view/contract_add',['c'=>$c]);

		} //if not empty

	       


		if ($_POST['fname']) {
	      

			//debug($_POST);
			 
		//
		echo '<h1> Ajouter le contract Nº '.$_POST['contract_num'].'</h1>';	

	    echo 'remplir les info de client';
		
		 // si le contract n'exist pas prepare pour traite la insertion du nouveux contract
		$id = $_POST['adm_id'];
		$adm = new AdminManager();
			
	    $empl= $adm->find($id);
	    debug($_POST['adm_id']);
	    debug($_POST['contract_num']);
	    debug($empl);
	    debug($_FILES);

				if ($empl) { 
					
			 echo '<br><h2> Bonjour '.$empl['employ_name'] .'</h2>';
		 
				    if (!empty($_POST['contract_num'])) {


					 	if (empty($_POST['fname'])) {
					 	 	echo'veuilez ajouter le Prenom du client';
					 	}
					 	else{ 
					 		if (empty($_POST['lname'])) {
					 	 	echo'veuilez ajouter le Nom du client';
						 	}
						 	else{
							 	if (empty($_POST['user_email'])) {
							 	 	echo'veuilez ajouter le email du client';
							 	}
							 	else{ 
								 	if (empty($_POST['contract_type'])) {
								 	 	echo'veuilez ajouter le type de contract';
								 	}
								 	else{
									 	if (empty($_POST['contract_end'])) {
									 	 	echo'veuilez ajouter le date du fin';
									 	}
									 	else{
											 	
										 	if (empty($_POST['contract_num']) ) {
										 	 	echo'Numero de contract vide !!    ensayer a nouvelle';
										 	}
										 	else{
											 		
											    $contract_num = htmlspecialchars(stripcslashes(trim($_POST['contract_num'])));
												$fname = htmlspecialchars(stripcslashes(trim($_POST['fname'])));
												$lname = htmlspecialchars(stripcslashes(trim($_POST['lname'])));
												$user_email = htmlspecialchars(stripcslashes(trim($_POST['user_email'])));
												$contract_end = htmlspecialchars(stripcslashes(trim($_POST['contract_end']))); 
											    $contract_type = htmlspecialchars(stripcslashes(trim($_POST['contract_type']))); 

		                                        if ($_FILES['fileUp']) {
										        
	                                                 
													
													$salt = "133#2D83B1S16%3450EBD!802160y*7z85Cd17";
												    $contractHash = $lname.'-'.hash('crc32', $salt.$contract_num).'/';
												    $clientDir = mkdir( PUBLIC_DIRECTORY.'/assets/eclient/'.$contractHash, 0777, true);
													
												 
													
													if($clientDir && $contractHash){
	                                                     

													    $Destination = PUBLIC_DIRECTORY.'/assets/eclient/'.$contractHash;
														    if(!isset($_FILES['fileUp']) || !is_uploaded_file($_FILES['fileUp']['tmp_name']))
														    {
														        die('Something went wrong with Upload!');
														    }

													    $allowedExts = array("jpg", "pdf", "jpeg", "gif", "png");

													    $RandomNum = rand(0, 9999999999);
													    $fileName  = str_replace(' ','-',strtolower($_FILES['fileUp']['name']));
													    $FileType = $_FILES['fileUp']['type']; // pdf or"image/png", image/jpeg etc.
													    $FileExt = substr($fileName, strrpos($fileName, '.'));
													    $FileExt = str_replace('.','',$FileExt);
														    if(!in_array($FileExt, $allowedExts))
														    {
														        die('Pour utiliser cette fonctionnalité, sélectionner d\'autres format d\'image<br> Les formats acceptés sont  <b>"jpg", "jpeg", "gif", "png"</b> allowed.');
														    }

													    $fileName      = preg_replace("/\.[^.\s]{3,4}$/", "", $fileName);

													    //Create new image name (with random number added).
													    $NewfileName = $fileName.'-'.$RandomNum.'.'.$FileExt;
													    
													    move_uploaded_file($_FILES['fileUp']['tmp_name'], "$Destination/$NewfileName");
													    
													    $contract_copy = $contractHash.$NewfileName;

														if($contract_copy)
														{


												           // debug pour contract add print_r($_POST);echo $user_email;echo $contract_num;echo '<br>'.$contractHash;echo '<b><h2>dir client  ok '.$contractHash .'</h2>';print_r($query_employ);echo '<br><h2> id employe ok'.$query_employ->employ_email .'</h2>';

															$contractAddManager = new \Manager\ContractsManager();
															 $addedCon = $contractAddManager->insert(
																['admin_employ_id' => $_POST['adm_id'],
																	'user_fname' => $fname,
																	'user_lname' => $lname,
																	'contract_num' => $contract_num,
																	'contract_end' => $contract_end,
																	'contract_copy' => $contract_copy,
																	'contract_type' => $contract_type,
																	'employ_email' => $empl['employ_email'],
																	'users_user_email' => $user_email,
																	'user_dir'=> $contractHash]);echo "raqqqq";

															if($addedCon){

												            echo '<br> <h1>insert ok </h1>';           
															} // if everything is allright this refresh url 
															else{
															echo '<h2> erro de serveur veuilez ensayer à nouvelle dans quelque minute! ></h2>'.$e->getMessage();
		                                                    } // error if the fail something in the server 

														} // confirm before insert if the  file as have ecrypted names 
													}// when the file is  ok and the folder as created 
												}//when the good file chosen
										    }// if te contract nº is ok	
						                }// if contact end is ok
					                }// if contact type is ok
							    }// if email    is ok
						    }// if last name is ok 
					    }// if first name is ok 

				    }// when get post 
	            } // if after verify if contract exist 

			$this->show('backoffice_view/contract_add');
		}

		else{ 
	    //debug($c);
				
		    $this->show('backoffice_view/contract_add');
		}
	    $this->show('backoffice_view/contract_add',['c'=>$c]);

	    
	} // end add contracts #######################################################################




	

    
    /**
	 * Page Employer ajouter nouveau client ou nouveau employe
	 */
	public function user_add()
	    {
	    	echo 'Employe add client ou admin add all types';
	        //traiter le form de insertion de client   ici...
	        //$this->show('backoffice_view/user_add');
	    } // end add user #######################################################################
	    


	/**
	 * Page Employer modifié les information client 'ce methode sera créer au OpenController '
	 
     public function client_details()
    {
    	echo 'Details de client et update ';
        //traiter les details de client avec placeholder get details de la base de données updade  ici...
        //$this->show('open_view/c_details');
    }*/

    
    /**
	 * Page Employer delete client = 'status inatif' 'ce methode sera créer au OpenController '
	
    public function client_delete()
    {
    	echo 'Employer Login';
        //traiter suppression de client   ici...
        //$this->show('backoffice_view/client_details');
    }

 */

}