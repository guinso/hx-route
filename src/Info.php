<?php 
namespace Hx\Route;

class Info implements InfoInterface {
	private $uri, $method, $closure;
	
	public function __construct($uri, $method, \Closure $closure)
	{
		$this->uri = $uri;
		
		$this->method = $method;
		
		$this->closure = $closure;
	}

	public function getUri()
	{
		return $this->uri;
	}

	public function getReqMethod()
	{
		return $this->method;
	}

	public function getClosure()
	{
		return $this->closure;
	}
}
?>