<?php 
namespace Manager;

class ClaimsManager extends \W\Manager\Manager
{
	public function __construct(){
		parent:: __construct();
		//defintion du nom de la table
		$this->setTable('claims');
	}

}

