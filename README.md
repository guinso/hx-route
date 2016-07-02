# hx-route
Simple HTTP routing utility. Can use for REST handler.

## Install Package
### Composer
```json
//for PHP 7
{
  "require": {
    "guinso/hx-route": "2.0.*"
  }
}

//for PHP 5
{
  "require": {
    "guinso/hx-route": "1.0.*"
  }
}
```

### Manual
```php
require_once("hx-route-directory/src/autoloader.php");
```

## Example
```php
    // method options: GET, POST, PUT, DELETE, or any standard HTTP method
    //$inputData specification can read from hx-http
    //$inputData = array(
    //    "data" => ....  client input value
    //   "file" => ... client upload file path value
    //);
    $routeConfigure = array(
      new \Hx\Route\Info("/your/customer/(\w+)", "GET", function($arg, $inputData) {
        $urlArgument = $arg[0]; //this is value from URL argument (\w+)
        
        //get general value
        $clientSpecificKeyValue = $inputData["date"]["clientSpecificKey"];
        
        //get temporary uploaded file path
        $clientUploadFilePath = $inputData["file"]["clientSpecificFileName"];
      },
      
      new \Hx\Route\Info("/another/custom/path", "POST", function($arg, $inputData) {
        //handle another request
      }
    );

    //initialize URL routing handler
		$router = new \Hx\Route\RestRouter(
		  new \Hx\Route\Mapper($routeConfigure), 
		  new \Hx\Http\HeaderReader(), 
		  new \Hx\Http\InputService());
		
		$router->run(); //start process incoming request URL
```
