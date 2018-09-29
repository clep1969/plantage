<?php
	class MySQL_DB	{
		var $host;
		var $user;
		var $pass;
		var $dbname;
		var $Query;
		var $Record = "0";
		var $Row = "0";
		
		function setHost($DB_Host)	{
			$this->host = $DB_Host;
		}
		
		function setUser($DB_User)	{
			$this->user = $DB_User;
		}
		
		function setPass($DB_Pass)	{
			$this->pass = $DB_Pass;
		}
		
		function setDBName($DB_Name)	{
			$this->dbname = $DB_Name;
		}
		
#		function MySQL_DB()	{
			function init($hostname,$username,$password,$database)	{
				$this->setHost($hostname);
				$this->setUser($username);
				$this->setPass($password);
				$this->setDBName($database);
			}
#		}
		
		function connect()	{
			$db = mysql_connect ($this->host, $this->user, $this->pass) or die("<b>Error:</b> " . mysql_error());
			mysql_select_db ($this->dbname, $db);
		}
		
		function query($sql)	{
			$this->connect();
			$this->Query = mysql_query($sql) or die("Error #".mysql_errno().": ".mysql_error());
			//   return $this->query;
		}
		
		function next_record()	{
			$this->Record = mysql_fetch_array($this->Query);
			$this->Row +=1;
			$stat = is_array($this->Record);
			if (!$stat)	{
				mysql_free_result ($this->Query);
				$this->query = 0;
			}
			return $stat;
		}
		
		function cleanUp()	{
			mysql_free_result ($this->query);
			mysql_close ($this->db);
		}
	}
?>
