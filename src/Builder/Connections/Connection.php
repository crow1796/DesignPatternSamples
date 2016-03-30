<?php

namespace App\Builder\Connections;

abstract class Connection {
	protected $connectionData;
	protected $pdo;
	
	public function __construct($connectionData){
		$this->connectionData = $connectionData;
		$this->createPDO();
	}

	public abstract function createPDO();

	public function getPDO(){
		return $this->pdo;
	}
}