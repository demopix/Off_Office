<?php 
namespace Manager;

class UsersManager extends \W\Manager\Manager
{
	public function __construct(){
		parent:: __construct();
		//defintion du nom de la table
		$this->setTable('users');
	}
	/**
	 * Récupère une token de la table en fonction d'un identifiant
	 * @param  string token
	 * @return mixed Les données
	 */
	public function getTok($token)
	{
		

		$sql = "SELECT * FROM " . $this->table . " WHERE user_token = :tok LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":tok", $token);
		$sth->execute();

		return $sth->fetch();
	}


}

