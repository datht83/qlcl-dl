<div style="width:800px">
	<?php 
		foreach ($this->data as $key => $info){
			$linkView = 'index.php?controller=index&action=view&id=' . $info['id'];
			$linkEdit = 'index.php?controller=index&action=edit&id=' . $info['id'];
			$linkDelete = 'index.php?controller=index&action=delete&id=' . $info['id'];
	?>
	<div>
		<h1><?php echo $info['id'] . ' - ' . $info['title']?></h1>
		<p><?php echo $info['summary']?></p>
		<div>
			<a href="<?php echo $linkView;?>">View</a> |  
			<a href="<?php echo $linkEdit;?>">Edit</a> | 
			<a href="<?php echo $linkDelete;?>">Delete</a> 
		</div>
		<hr></hr>
	</div> 
	<?php 
		}
	?>
	
</div>