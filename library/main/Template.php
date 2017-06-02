<?php
class Template{
	
	function __construct(){
		/*echo "<pre>";
		print_r();
		echo "</pre>";*/
	}
	
	function __set($name,$value){
		$this->$name = $value;
	}
	
	function __get($name){
		return $this->$name;
	}
	
	function create($path){
		/*echo "<pre>";
		print_r($this);
		echo "</pre>";*/
		
		include (ROOT . '/templates/header.php');
		include ($path);
		include (ROOT . '/templates/footer.php');
	}
}
