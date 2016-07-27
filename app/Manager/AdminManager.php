<?php 
namespace Manager;

class AdminManager extends \W\Manager\Manager
{
	public function __construct(){
		parent:: __construct();
		//defintion du nom de la table
		$this->setTable('admin');
	}
	public function getTok($token)
	{
		

		$sql = "SELECT * FROM " . $this->table . " WHERE token = :tok LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":tok", $token);
		$sth->execute();

		return $sth->fetch();
	}


}

