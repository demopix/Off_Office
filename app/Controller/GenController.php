<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ContractsManager;

class GenController extends Controller
{
	/**
	 * Page d'affichage du pdf generé et inseré dans la db + lien pour vers server location du pdf enregistrer ex; http://offoffice/eclient/clientname39409/ymd-hms-docname.pdf rule -> user || employe || admin
	 */
	public function gen_pdf($id)
	{

	$query_con = new ContractsManager();
	$data_con= $query_con->find($id);
	//debug($data_con);
		
	$pdf = new \ClassePDF\PDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(0,10,'Prénom:'.' '.$data_con['user_fname'] ,0,1);
	$pdf->Cell(0,10,'Nom:'.' '.$data_con['user_lname'] ,0,1);
	$pdf->Cell(0,10,'Numéro de contrat:'.' '.$data_con['contract_num'] ,0,1);
	$pdf->Cell(0,10,'Date de fin de contrat:'.' '.$data_con['contract_end'] ,0,1);
	$pdf->Cell(0,10,'Copie du contrat:'.' '.$data_con['contract_copy'] ,0,1);
	$pdf->Cell(0,10,'Email de l\'employé:'.' '.$data_con['contract_copy'] ,0,1);
	$pdf->Cell(0,10,'Identité du Directeur de l\'employé:'.' '.$data_con['admin_employ_id'] ,0,1);
	
	$pdf->Output();


	
    //$this->show('open_view/gen_pdf' 
    	//,['contracts'=> $data_con]);
	}// fin de genpdf


   
	/* utiliser la function phpmailler ajouter les parametres ici rule -> user || employe || admin
	 */

    public function forward_pdf()
    {
    	echo 'formulaire envoyer par email';
        //envoyer par email à un ou plusieurs destinataires ...
        //$this->show('open_view/gen_pdf');
    }//fin de forward pdf

}//fin class gencontroller




