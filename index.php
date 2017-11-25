<?php

require 'app/vendor/autoload.php';
require_once 'app/config/database.php';

header('x-powered-by: PHP');
header('Server: Ubuntu');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Content-type: text/html; charset=UTF-8');

Flight::route('/hola', function(){
	echo json_encode(Model::factory('Usuario')->find_array());
  echo 'hello world!';
});

Flight::route('/tipo/lista', function(){
	echo json_encode(Model::factory('Tipos')->find_array());
});

Flight::start();

?>