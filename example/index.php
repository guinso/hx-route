<?php 
	//Please run 'composer update' to generate dependencies library
	include_once dirname(__DIR__) . "/vendor/autoload.php";
	
	$data = array(
		new \Hx\Route\Info("/", "GET", function($uriArg, array $inputData){
			echo "done";
		}),
		new \Hx\Route\Info("/(\w+)", "GET", function($uriArg, array $inputData){
			echo "done ***";
		})
	);
	
	$mapper = new \Hx\Route\Mapper($data);
	
	$httpHeaderReader = new \Hx\Http\HeaderReader();
	
	$httpInputHandler = new \Hx\Http\InputService();
	
	$router = new \Hx\Route\RestRouter(
		$mapper, 
		$httpHeaderReader, 
		$httpInputHandler);
	
	$router->run();
?>