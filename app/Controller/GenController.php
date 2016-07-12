<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\UsersManager;
use \Manager\ContractsManager;


class GenController extends Controller
{
	/**
	 * Page d'affichage du pdf generé et inseré dans la db + lien pour vers server location du pdf enregistrer ex; http://offoffice/eclient/clientname39409/ymd-hms-docname.pdf rule -> user || employe || admin
	 */
	public function gen_pdf($id)
	{


	//$query_use = new UsersManager();
	//$data_use= $query_use->find('id');
	$query_con = new ContractsManager();
	$data_con= $query_con->find($id);
	//debug($data_con);

	$html = 'Vous pouvez maintenant imprimer facilement du texte mélangeant différents styles : <b>gras</b>,
	<i>italique</i>, <u>souligné</u>, ou <b><i><u>tous à la fois</u></i></b> !<br><br>Vous pouvez aussi
	insérer des liens sous forme textuelle, comme <a href="http://www.fpdf.org">www.fpdf.org</a>, ou bien
	sous forme d\'image : cliquez sur le logo.';
	
	$html2='This document was generated from Off_Office database.';
	
	// Première page
	$pdf = new \ClassePDF\PDF('P','mm','A4');
	$data=array($data_con);
	$header9 = '9. nom et prenom du souscripteur de la police ou de l\'utilisateur du véhicule';
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Ln(20);
	$pdf->Ln(20);
	$pdf->WriteHTML($html2);
	$pdf->ObjInssu($header9,$data);
	$pdf->Ln(20);
	$pdf->Ln(20);
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,10,'Nom:'.' '.$data_con['user_lname'] ,0,1);
	$pdf->Cell(0,10,'Prénom:'.' '.$data_con['user_fname'] ,0,1);
	$pdf->Cell(0,10,'Numéro de contrat:'.' '.$data_con['contract_num'] ,0,1);
	$pdf->Cell(0,10,'Date de fin de contrat:'.' '.$data_con['contract_end'] ,0,1);
	$pdf->Cell(0,10,'Email de l\'employé:'.' '.$data_con['employ_email'] ,0,1);
	$pdf->Cell(0,10,'Identité du Directeur de l\'employé:'.' '.$data_con['admin_employ_id'] ,0,1);
	$pdf->Cell(0,10,'Adresse: 4, rue de Merl, L-1472 Luxembourg' ,0,1);
	//Lien hyperlink qui amène vers le contrat
	$link = $pdf->AddLink();
	$pdf->Write(5,'Copie du contrat:'.' '.$data_con['contract_copy'],$link);




	// Seconde page
	$pdf->AddPage();
	$pdf->SetLink($link);
	$pdf->Image(PUBLIC_DIRECTORY.'/assets/img/logoAssurance.png',10,6,30,'','http://www.fpdf.org');
	$pdf->SetLeftMargin(45);
	$pdf->SetFontSize(14);
	$pdf->WriteHTML($html);
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




