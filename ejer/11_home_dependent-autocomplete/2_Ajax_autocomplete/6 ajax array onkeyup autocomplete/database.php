<?php
	db_connect() or die('Unable to connect to database server!');
	function db_connect($server = '127.0.0.1', $username = 'yomogan', $password = '', $database = 'autosuggest', $link = 'db_link') {
		global $$link;
		$$link = mysql_connect($server, $username, $password);
		if ($$link) mysql_select_db($database);
		return $$link;
	}
	function db_error($query, $errno, $error) { 
		die('<font color="#000000"><b>' . $errno . ' - ' . $error . '<br><br>' . $query . '<br><br><small><font color="#ff0000">[STOP]</font></small><br><br></b></font>');
	}
	function db_query($query, $link = 'db_link') {
		global $$link;
		$result = mysql_query($query, $$link) or db_error($query, mysql_errno(), mysql_error());
		return $result;
	}
	function db_fetch_array($db_query) {
		return mysql_fetch_array($db_query, MYSQL_ASSOC);
	}
	function db_num_rows($db_query) {
		return mysql_num_rows($db_query);
	}
	//Get the last auto_increment ID
	  function db_insert_id() {
		return mysql_insert_id();
	}
	//Add HTML character incoding to strings
	function db_output($string) {
		return htmlspecialchars($string);
	}
	//Add slashes to incoming data
	function db_input($string, $link = 'db_link') {
		global $$link;

		if (function_exists('mysql_real_escape_string')) 
		  return mysql_real_escape_string($string, $$link);
		elseif (function_exists('mysql_escape_string')) 
		  return mysql_escape_string($string);

		return addslashes($string);
	}
?>