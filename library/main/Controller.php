<?php
class Controller{
	
	protected  $_arrParam;
	
	function __construct(){
		//echo '<br>' . __METHOD__;
		$this->_arrParam = $this->getParam();
		/*echo "<pre>";
		print_r($this->_arrParam);
		echo "</pre>";*/
	}
	
	function redirect($url){
		header("Location: " . $url);
	}
	function getParam(){
		$get = $_GET;
		$post = $_POST;
		$cookie = $_COOKIE;
		if(!isset($get['controller'])){
			$post['controller'] = 'index';
		}
		
		if(!isset($get['action'])){
			$post['action'] = 'index';
		}
		$params = array_merge($get,$post,$cookie);
		
		return $params;
	}
	
	function getModel($modelName){
		require_once (LIBRARY . '/main/Model.php');
		$modelClass = ucfirst($modelName);
		require_once (APPLICATION . '/models/' . ucfirst($modelName) . '.php');
		$model = new $modelClass();
		return $model;
	}
	
	function render($view = null,$param = null){
		require_once (LIBRARY . '/main/Template.php');
	
		if($view == null){
			$path = APPLICATION . '/views/' 
					. $this->_arrParam['controller'] . '/' 
					. $this->_arrParam['action'] . '.php';			
			//require_once $path;
		}else{
			$path = APPLICATION . '/view/' . $view . '.php'; 
			
		}
		$template = new Template();
		$template->data =  $param;
		$template->create($path);
		
	}
}
