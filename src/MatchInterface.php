<?php 
namespace Hx\Route;

interface MatchInterface {
	
	/**
	 * Get matched info
	 * @return InfoInterface
	 */
	public function getInfo(): InfoInterface;

	/**
	 * Get arguments passed from user request
	 * @return array
	 */
	public function getArgs(): array;
}
?>