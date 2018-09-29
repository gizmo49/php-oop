<?php 

/**
 * router class
 */
class Router{
	protected $routes = [];
	/**/
	public static function load($vari){
		$router = new static;
	    require $vari;
	    return $router;

	}


	public function define($urls){

		$this->routes = $urls;
		//return "done";
	}

	public function direct($uri){
		if (array_key_exists($uri, $this->routes)) {

			return $this->routes[$uri];

		}


		die("not found");

	
	}
}