<?php 
namespace Hx\Route;

interface RouterInterface {
	
	/**
	 * Handle HTTP request and find matching rule, then execute respective closure
	 */
	public function run();
}
?>