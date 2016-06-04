<?php 
declare(strict_types=1);

namespace Hx\Route;

interface InfoInterface {
	
	/**
	 * Get URI patern
	 * @return string
	 */
	public function getUri(): string;
	
	/**
	 * Get http request method name
	 * @return string
	 */
	public function getReqMethod(): string;
	
	/**
	 * Get anonymous function
	 * @return \Closure
	 */
	public function getClosure(): \Closure;
}
?>