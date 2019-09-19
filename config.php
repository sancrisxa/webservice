<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'webservice_tarefa';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'todo';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
?>