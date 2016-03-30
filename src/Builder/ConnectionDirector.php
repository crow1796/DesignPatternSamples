<?php

namespace App\Builder;
use App\Builder\Config\ConnectionConfig;

class ConnectionDirector {
	public function build(ConnectionBuilder $builder){
		$dbConnection = $builder->buildConnection();
		$dbConnection->setDBHost(ConnectionConfig::DB_HOST);
		$dbConnection->setDBUsername(ConnectionConfig::DB_USERNAME);
		$dbConnection->setDBPassword(ConnectionConfig::DB_PASSWORD);
		$dbConnection->setDBPort(ConnectionConfig::DB_PORT);
		$dbConnection->setDBName(ConnectionConfig::DB_NAME);
		
		return $dbConnection->getConnection();
	}
}