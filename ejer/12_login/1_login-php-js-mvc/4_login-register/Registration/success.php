<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Registration Form using jQuery Ajax and PHP MySQL</title>
  
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
  <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
  <script type="text/javascript" src="validation.min.js"></script>
  <link href="style.css" rel="stylesheet" media="screen">
  
  <script type="text/javascript">
    $('document').ready(function(){ 
    	window.setTimeout(function(){
    		window.location.href = "index.php";
    	}, 6000);
    	
    	$("#back").click(function(){
    		window.location.href = "index.php";
    	});
    });
  </script>
</head>

<body>
  <div class="signin-form">
  <div class="container">
      <div class='alert alert-success'>
      
  		<button class='close' data-dismiss='alert'>&times;</button>
  			<strong>Success!</strong>  Successfully Registered.
      </div>
      
      <button class="btn btn-primary" id="back">
        <span class="glyphicon glyphicon-backward"></span> &nbsp; back to main page
      </button>
  </div>
  </div>
</body>
</html>