<?php 
namespace Hx\Route;

class Match implements MatchInterface {
	private $args, $info;

	
	public function __construct(InfoInterface $info, Array $arguments)
	{
		$this->info = $info;
		
		$this->args = $arguments;
	}
	
	public function getInfo():InfoInterface 
	{
		return $this->info;
	}
	
	public function getArgs(): array
	{
		return $this->args;
	}
}
?>