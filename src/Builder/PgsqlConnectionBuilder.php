<?php

namespace App\Builder;
use App\Builder\ConnectionBuilder;

class PgsqlConnectionBuilder extends ConnectionBuilder {
	protected $connection = 'pgsql';

	public function getConnection(){
		$this->connectionData = [
			'host' => $this->host,
			'connection' => $this->connection,
			'username' => $this->username,
			'password' => $this->password,
			'port' => $this->port,
			'dbname' => $this->dbname,
		];
		
		return (new \App\Builder\Connections\PgsqlConnection($this->connectionData));
	}
}