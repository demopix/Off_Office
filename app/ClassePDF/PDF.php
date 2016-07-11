<?php

namespace ClassePDF;
use \fpdf\FPDF;

class PDF extends FPDF
{
// En-tête
	function Header()
	{
	    // Logo
	    $this->Image(PUBLIC_DIRECTORY.'/assets/img/logophp.jpg',10,6,30);
	    // Police Arial gras 15
	    $this->SetFont('Arial','B',15);
	    // Décalage à droite
	    $this->Cell(80);
	    // Titre
	    $this->Cell(30,10,'Titre',1,0,'C');
	    // Saut de ligne
	    $this->Ln(20);
	}//fin fonction header

	// Pied de page
	function Footer()
	{
	    // Positionnement à 1,5 cm du bas
	    $this->SetY(-15);
	    // Police Arial italique 8
	    $this->SetFont('Arial','I',8);
	    // Numéro de page
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}//fin fonction footer


	
}//fin classe pdf