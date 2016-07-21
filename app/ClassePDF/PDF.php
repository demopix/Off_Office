<?php

namespace ClassePDF;
use \fpdf\FPDF;

class PDF extends FPDF
{

protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';

// En-tête
	function Header()
	{
	    // Logo
	    $this->Image(PUBLIC_DIRECTORY.'/assets/img/logoAssurance.png',170,10,30,0);
	    // Police Arial gras 15
	    $this->SetFont('Arial','B',15);
		  
	    // Titre
	    
        $this->MultiCell(150,7,'1.CARTE INTERNATIONALE D\'ASSURANCE AUTOMOBILE
            1.INTERNATIONAL MOTOR INSURANCE CARD',1);
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


function WriteHTML($html)
{
    // Parseur HTML
    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            // Texte
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            // Balise
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                // Extraction des attributs
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag, $attr)
{
    // Balise ouvrante
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    // Balise fermante
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{
    // Modifie le style et sélectionne la police correspondante
    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    // Place un hyperlien
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}

function ObjInssu($header9, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(20, 128, 201);
    $this->SetTextColor(255);
    $this->SetDrawColor(115, 56, 29);
    $this->SetLineWidth(.3);
    $this->SetFont('','B',10);
    $this->SetY(70);
    $this->SetX(10);
    // Header
    $w = array(40, 40, 35, 35,20,20);

    //for($i=0;$i<count($header);$i++)
    $this->Cell(190.1,7,$header9,0,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',10);
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,'Nom','LR',0,'L',$fill);
        $this->Cell($w[1],6,'Prénom','LR',0,'L',$fill);
        $this->Cell($w[2],6,'Adresse','LR',0,'L',$fill);
        $this->Cell($w[3],6,'Code postal','LR',0,'L',$fill);
        $this->Cell($w[4],6,'Ville','LR',0,'L',$fill);
        
        $this->Cell($w[4],6,'*********','LR',0,'L',$fill);
    

        //$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
        //$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }


    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row['user_lname'],'LR',0,'L',$fill);
       $this->Cell($w[1],6,$row['user_fname'],'LR',0,'L',$fill);
        $this->Cell($w[2],6,'rue toto','LR',0,'L',$fill);
        $this->Cell($w[3],6,'L-6969','LR',0,'L',$fill);
        $this->Cell($w[4],6,'petange','LR',0,'L',$fill);
        $this->Cell($w[4],6,'***********','LR',0,'L',$fill);
        
        //$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
        //$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

}//fin classe pdf