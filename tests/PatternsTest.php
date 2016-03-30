<?php

class PatternsTest extends PHPUnit_Framework_TestCase{
	public function testConnectionBuilder(){
		$connectionBuilder = new \App\Builder\MysqlConnectionBuilder;
		$dbConnection = (new \App\Builder\ConnectionDirector())->build($connectionBuilder);

		$this->assertInstanceOf('\App\Builder\Connections\Connection', $dbConnection);
		$this->assertInstanceOf('\PDO', $dbConnection->getPDO());
	}
}