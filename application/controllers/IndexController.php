<?php
class IndexController extends Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function indexAction(){
		$model = $this->getModel('News');
		$result = $model->listItem();
		$this->render(null,$result);
		
		
	}
	
	public function viewAction(){
		echo '<br>' . __METHOD__;
		$param = $this->getParam();
		$model = $this->getModel('News');
		$result = $model->getItem($param['id']);
		$this->render(null,$result);
		
	}
	
	public function addAction(){
		echo '<br>' . __METHOD__;
	}
	
	public function editAction(){
		//echo '<br>' . __METHOD__;
		if(empty($_POST)){
			$param = $this->getParam();
			$model = $this->getModel('News');
			$result = $model->getItem($param['id']);
			$this->render(null,$result);
		}else{
			$param = $this->getParam();
			$model = $this->getModel('News');
			$model->saveItem($param,'edit');
			$this->redirect('index.php?controller=index&action=index');
			
		}
	}
	
	public function deleteAction(){
		$param = $this->getParam();
		$model = $this->getModel('News');
		$model->deleteItem($param['id']);
		$this->redirect('index.php?controller=index&action=index');
	}

}