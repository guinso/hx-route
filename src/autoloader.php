<?php 

//implement PSR-4 autoloading
function HxRouteAutoload($className)
{
	$xx = explode('\\', $className);
	
	if($xx[0] == 'Hx' && $xx[1] == 'Route') {

		array_shift($xx);
		
		$xx[0] = __DIR__;
		$filePath = join(DIRECTORY_SEPARATOR, $xx) . '.php';

		if(is_readable($filePath)) {
			require_once $filePath;
		}
	}
}
spl_autoload_register('HxRouteAutoload', true, true);
?>