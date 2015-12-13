<?php 
namespace Hx\Route;

class RestRouter implements \Hx\Route\RouterInterface {
	private $mapper, $inputHandler, $httpHeadReader;
	
	public function __construct(
		\Hx\Route\MapperInterface $mapper, 
		\Hx\Http\HeaderReaderInterface $headReader,
		\Hx\Http\InputServiceInterface $inputHandler)
	{
		$this->mapper = $mapper;
		
		$this->inputHandler = $inputHandler;
		
		$this->httpHeadReader = $headReader;
	}
	
	public function run()
	{
		//1. handler command
		try 
		{
			$match = $this->mapper->find(
				$this->httpHeadReader->getRequestUri(),
				$this->httpHeadReader->getMethod());
		}
		catch (\Exception $ex)
		{
			Throw new \Hx\Route\RestRouterException(
				RestRouterException::INPUT_ERROR, 
				"Fail to get request path '{$this->httpHeadReader->getRequestUri()}'," . 
					" '{$this->httpHeadReader->getMethod()}'", 
				0, 
				$ex);
		}
		
		//2. handle input data
		try 
		{
			$input = $this->inputHandler->getInput(
				$this->httpHeadReader);
		}
		catch (\Exception $ex)
		{
			Throw new \Hx\Route\RestRouterException(
				RestRouterException::INPUT_ERROR,
				"Fail to get user input",
				0,
				$ex);
		}
				
		//3. run
		try 
		{
			$closure = $match->getInfo()->getClosure();
			
			$closure($match->getArgs(), $input);
		}
		catch (\Exception $ex)
		{
			Throw new \Hx\Route\RestRouterException(
				RestRouterException::DOMAIN_ERROR,
				"Fail to process content.",
				0,
				$ex);
		}
	}
}
?>