<?php
class Model{
	protected $hostname 	= DB_HOST;
	protected $username 	= DB_USER;
	protected $password 	= DB_PASSWORD;
	protected $db			= DB_NAME;
	
	protected $dbCon		= null;
	protected $result;
	
	protected $connection;
	protected $flagConnect;
	
	public function __construct() {		
		$connection = mysql_connect ( $this->hostname, $this->username, $this->password );
		
		if (! $connection) {
			die ( 'Could not connect: ' . mysql_error () );
		} else {
			$this->connection = $connection;
			$this->flagConnect = true;
			mysql_select_db($this->db, $connection);
		}
	
	}
	
	
	public function execute($sql){
		if ($this->flagConnect == true) {
			//echo __METHOD__;
			mysql_query("SET NAMES 'utf8'");
			mysql_query("SET CHARACTER SET 'utf8'");
			$this->result = mysql_query($sql);			
			return $this->result;
		}
	}
	
	
	
	function __destruct() {
		
		if ($this->flagConnect == true) {
			@mysql_free_result($this->result);
			mysql_close ( $this->connection );
		}
	
	}
	
}
