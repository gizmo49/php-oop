<?php 
/**
 * Queyybuilder class
 */
class QueryBuilder{
	
	function __construct(PDO $pdo){

		$this->pdo = $pdo;
	}


	public function selectAll($table){

		$sth = $this->pdo->prepare("SELECT * FROM {$table}");
		$sth->execute();	
		return $sth->fetchAll(PDO::FETCH_OBJ);
	}
}