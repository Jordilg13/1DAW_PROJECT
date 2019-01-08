<?php
    session_start();
    require_once("includes/comentarios.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema de comentarios (PHP, JS, JQuery, SQL, HTML)</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script> 
    <script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
    <div id="resultado" style="display: none;"></div>
    <div id="nuevo_comentario" style="width:730;">
        <form method="post" name="nuevo_comentario" id="dejar_nuevo_comentario">
        	Tu nombre:<br>
            <input type="text" id="usuario"><br><br>
            
            Comentario:<br>
        	<textarea id="comentario" style="height:100;width:730;"></textarea><br /><br />
            
            <input name="" type="button" id="comentar" accesskey="intro" value="Comentar">
            <div id="contador_caracteres" style="text-align: right;"></div>
        </form>
    </div>
    <div id="comentarios" style="display: none;"></div>
</body>
</html>