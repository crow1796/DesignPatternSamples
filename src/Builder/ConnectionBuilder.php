<?php

namespace App\Builder;

abstract class ConnectionBuilder {
	protected $connection;
	protected $host;
	protected $username;
	protected $password;
	protected $port;
	protected $dbname;

	public function buildConnection(){
		return (new $this);
	}

	public function setDBHost($host){
		$this->host = $host;
	}

	public function setDBUsername($username){
		$this->username = $username;
	}

	public function setDBPassword($password = ''){
		$this->password = $password;
	}

	public function setDBPort($port){
		$this->port = $port;
	}

	public function setDBName($name){
		$this->dbname = $name;
	}

	public abstract function getConnection();
}