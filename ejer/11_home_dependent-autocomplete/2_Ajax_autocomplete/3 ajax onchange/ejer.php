<?php
	$q=$_GET["q"];
	/*$con = mysql_connect('localhost', 'root', 'root1');
	if (!$con) die('Could not connect: ' . mysql_error());

	mysql_select_db("encuestas", $con);
	$sql="SELECT * FROM usuario WHERE login = '".$q."'";
	$result = mysql_query($sql);
	*/
	echo "<table border='1'>
	<tr>
		<th>login</th>
		<th>password</th>
		<th>tipoUsuario</th>
		<th>img_usuario</th>
	</tr>";

	/*while($row = mysql_fetch_array($result)){
	  echo "<tr>";
		  echo "<td>" . $row['login'] . "</td>";
		  echo "<td>" . $row['password'] . "</td>";
		  echo "<td>" . $row['tipoUsuario'] . "</td>";
		  echo "<td>" . $row['img_usuario'] . "</td>";
	  echo "</tr>";
	}*/
	  echo "<tr>";
		  echo "<td>" . 'yomogan' . "</td>";
		  echo "<td>" . 'Yomogan1' . "</td>";
		  echo "<td>" . 'admin' . "</td>";
		  echo "<td>" . '/img.png' . "</td>";
	  echo "</tr>";
	echo "</table>";
	//mysql_close($con);
?> 