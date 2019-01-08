<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf8" />
	<title>Login Form</title>
    <link type="text/css" href="<?php echo BASE_URL ?>/Views/Assets/style.css" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <?php if( isset( $_SESSION['__message'] ) && $_SESSION['__message'] != '' ) : ?>
            <div class="message_box">
                <p><?php echo $_SESSION['__message']; unset( $_SESSION['__message'] ); ?></p>
            </div>
        <?php endif; ?>
        
        <form action="<?php echo BASE_URL ?>/User/ProcessLogin" method="POST" >
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="" required="required" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="" required="required" />
            </div>
            <div class="btn-group">
                <input type="submit" name="submit" class="btn-primary" value="Login" />
                <input type="reset" name="reset" value="Reset" />
                <a class="register-btn" href="<?php echo BASE_URL ?>/User/Register">Register</a>
            </div>
        </form>
    </div>
</body>
</html>