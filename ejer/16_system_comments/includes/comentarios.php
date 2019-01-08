<?php 
	class comentarios{ 
		private $server_sql, $sql_user, $sql_password, $sql_database, $username, $mysql_link;
		
		private $bb_code = array( 
			'[b]' => '<strong>', 
			'[/b]' => '</strong>', 
			'[i]' => '<em>', 
			'[/i]' => '</em>', 
			'[u]' => '<u>', 
			'[/u]' => '</u>', 
			'\n' => '<br>', 
			'[img]' => '<img src="', 
			'[/img]' => '" border="0" />' ,
			'[url]' => '<a href="', 
			'[/url]' => '" target="_new"></a>' ,
		);
		  
		public function __construct($server_sql, $sql_user, $sql_password, $sql_database){
			if(!(($server_sql == "") OR ($sql_user == "") OR ($sql_password == "") OR ($sql_database == ""))){
			  $this->server_sql=$server_sql;
			  $this->sql_user=$sql_user;
			  $this->sql_password=$sql_password;
			  $this->sql_database=$sql_database;
			  return true;
			}else{
			  return false;
			}
		}
		  
		public function sql_connect() { 
			  $this->mysql_link = mysqli_connect(getenv('IP'), "yomogan", "", "comments", 3306);
			  return $this->mysql_link; 
		}
		  
		public function sql_close() { 
			  mysqli_close($this->mysql_link);
			  $this->server_sql="";
			  $this->sql_user="";
			  $this->sql_password="";
			  $this->sql_database="";
			  $this->mysql_link="";
		}
		  
		public function no_inyeccion($texto) {
			  $texto = htmlspecialchars($texto, ENT_QUOTES);
			  if(get_magic_quotes_gpc())
			  $texto = stripslashes($texto);
			  return $texto;
		}
		  
		public function bbcode($texto) {
		  	  $texto = nl2br($texto);
		      $texto = str_replace(array_keys($this->bb_code), $this->bb_code, $texto); 
		  	  return $texto;
		}
		  
	}
