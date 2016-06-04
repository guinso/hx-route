<?php 
namespace Hx\Route\MapLoader;

use Hx\Route\InfoInterface;

/**
 * Router mapping loader tools
 * @author chingchetsiang
 *
 */
interface MapLoaderInterface {
	
	/**
	 * Load from file
	 * @param string $filePath
	 * @return array array of InfoInterface
	 */
	public function loadFile(string $filePath):array;
	
	/**
	 * Load from all XML file under targeted directory
	 * @param string $directory
	 * @return array array of InfoInterface
	*/
	public function loadDir($directory): array;
	
	/**
	 * Load from in memory string
	 * @param string $content
	 * @return array array of InfoInterface
	*/
	public function loadString($content): array;
}
?>