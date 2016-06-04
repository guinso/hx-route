<?php 
declare(strict_types=1);

namespace Hx\Route;

class Info implements InfoInterface {
	private $uri, $method, $closure;
	
	public function __construct(string $uri, string $method, \Closure $closure)
	{
		$this->uri = $uri;
		
		$this->method = $method;
		
		$this->closure = $closure;
	}

	public function getUri(): string
	{
		return $this->uri;
	}

	public function getReqMethod(): string
	{
		return $this->method;
	}

	public function getClosure(): \Closure
	{
		return $this->closure;
	}
}
?>