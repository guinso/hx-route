<?php 
namespace Hx\Route;

interface InfoInterface {
	
	/**
	 * Get URI patern
	 */
	public function getUri();
	
	/**
	 * Get http request method name
	 */
	public function getReqMethod();
	
	/**
	 * Get closure
	 */
	public function getClosure();
}
?>