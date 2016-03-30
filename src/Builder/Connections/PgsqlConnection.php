<?php

namespace App\Builder\Connections;
use App\Builder\Connections\Connection;

class PgsqlConnection extends Connection {

	public function createPDO(){
		$this->pdo = (new \PDO($this->connectionData['connection'] . ':host=' . $this->connectionData['host'] . ';dbname=' . $this->connectionData['dbname'] . ';user=' . $this->connectionData['username'] . ';password=' . $this->connectionData['password']));
	}

}