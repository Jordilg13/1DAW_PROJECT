<?php
  session_start();
  
  if(!isset($_SESSION['user_session'])){
  	header("Location: index.php");
  }
  
  include_once 'dbconfig.php';
  
  $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
  $stmt->execute(array(":uid"=>$_SESSION['user_session']));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login Form using jQuery Ajax and PHP MySQL</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
  <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
  <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
  <link href="style.css" rel="stylesheet" media="screen">
</head>

<body>
  <div class="body-container">
  <div class="container">
      <div class='alert alert-success'>
        
  		<button class='close' data-dismiss='alert'>&times;</button>
  			<strong>Hello '<?php echo $row['user_name']; ?></strong>  Welcome to the members page.
      </div>
      
      <a href="logout.php">Logout</a>
  </div>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>