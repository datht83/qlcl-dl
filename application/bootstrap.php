<?php
class Bootstrap{
	
	protected $_params;
	
	function __construct(){
		//echo __METHOD__;
		$this->_params = $this->getParam();
		/*echo "<pre>";
		print_r($this->_params);
		echo "</pre>";*/
	}
	
	function getParam(){
		$get = $_GET;
		$post = $_POST;
		if(!isset($get['controller'])){
			$get['controller'] = 'index';
		}
		
		if(!isset($get['action'])){
			$get['action'] = 'index';
		}
		
		$params = array_merge($get,$post);
		return $params;		
	}
	
	function run(){
		require_once (ROOT . '/configs/config.php');
		require_once (LIBRARY . '/main/Controller.php');
		//$controllerName = IndexController
		$controllerName = ucfirst($this->_params['controller']).'Controller';
		require_once (APPLICATION . '/controllers/' . $controllerName . '.php');
		$controller = new $controllerName();
		$actionName = $this->_params['action']. 'Action';
		$controller->$actionName();
	}
}