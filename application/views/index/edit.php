<form action="" method="post" enctype="application/x-www-form-urlencoded">
	Title:
	<br></br> 
	<input type="text" value="<?php echo $this->data['title'];?>" name="title"></input>
	<br></br>	
	Summary:
	<br></br>
	<textarea rows="6" cols="50" name="summary"><?php echo $this->data['summary'];?></textarea>
	<br></br>
	Content:
	<br></br> 
	<textarea rows="8" cols="50" name="content"><?php echo $this->data['content'];?></textarea>
	<br></br>
	<input type="submit"></input>
</form>