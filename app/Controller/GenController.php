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

	$html = 'Vous pouvez maintenant imprimer facilement du texte mélangeant différents styles : <b>gras</b>,
	<i>italique</i>, <u>souligné</u>, ou <b><i><u>tous à la fois</u></i></b> !<br><br>Vous pouvez aussi
	insérer des liens sous forme textuelle, comme <a href="http://www.fpdf.org">www.fpdf.org</a>, ou bien
	sous forme d\'image : cliquez sur le logo.';
		
	
	// Première page
	$pdf = new \ClassePDF\PDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Write(5,'Pour découvrir les nouveautés de ce tutoriel, cliquez ');
	$link = $pdf->AddLink();
	$pdf->Write(5,'Copie du contrat:'.' '.$data_con['contract_copy'],$link);
	$pdf->SetFont('Times','',12);
	 $pdf->Ln(20);
	$pdf->Cell(0,10,'Nom:'.' '.$data_con['user_lname'] ,0,1);
	$pdf->Cell(0,10,'Prénom:'.' '.$data_con['user_fname'] ,0,1);
	$pdf->Cell(0,10,'Numéro de contrat:'.' '.$data_con['contract_num'] ,0,1);
	$pdf->Cell(0,10,'Date de fin de contrat:'.' '.$data_con['contract_end'] ,0,1);
	$pdf->Cell(0,10,'Copie du contrat:'.' '.$data_con['contract_copy'] ,0,1);
	$pdf->Cell(0,10,'Email de l\'employé:'.' '.$data_con['contract_copy'] ,0,1);
	$pdf->Cell(0,10,'Identité du Directeur de l\'employé:'.' '.$data_con['admin_employ_id'] ,0,1);




	// Seconde page
	$pdf->AddPage();
	$pdf->SetLink($link);
	$pdf->Image(PUBLIC_DIRECTORY.'/assets/img/logophp.jpg',10,12,30,0,'','http://www.fpdf.org');
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




