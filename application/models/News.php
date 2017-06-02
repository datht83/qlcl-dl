<?php
class News extends Model{
	
	
	public function deleteItem($id){
		$sql  = "DELETE FROM tintuc 
				 WHERE id= " . $id;
		$this->execute($sql);
	}
	public function saveItem($arrParam,$opt = 'add'){
		/*echo __METHOD__;
		echo "<pre>";
		print_r($arrParam);
		echo "</pre>";*/
		$sql = "UPDATE tintuc  
				SET title ='" .  $arrParam['title'] . "',  
					summary ='" . $arrParam['summary'] . "', 
					content ='" . $arrParam['content'] . "' 
					WHERE id = " . $arrParam['id'];
		$this->execute($sql);
	}
	
	public function listItem(){
		//echo '<br>' . __METHOD__;
		$sql = 'SELECT * FROM tintuc';
		$result = $this->execute($sql);
		$newArray = array();
		while($row = mysql_fetch_assoc($result)){
			$newArray[] = $row;
			
		}
		return $newArray;
	}
	
	public function getItem($id){
		$sql = 'SELECT * FROM tintuc WHERE id = ' . $id;
		$result = $this->execute($sql);
		$newArray = array();
		while($row = mysql_fetch_assoc($result)){
			$newArray[] = $row;
			
		}
		return $newArray[0];
	}
}