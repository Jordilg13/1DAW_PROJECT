<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE USUARIOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table>
                <tr>
                    <td width=125><b>Usuario</b></th>
                    <td width=125><b>DNI</b></th>
                    <td width=125><b>Nombre</b></th>
                    <th width=350><b>Accion</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN USUARIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['user'] . '</td>';
                    	   	echo '<td width=125>'. $row['dni'] . '</td>';
                    	   	echo '<td width=125>'. $row['name'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	
                    	    print ("<div class='user' id='".$row['user']."'>Read</div>");  //READ
                    	    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                    	   	
                    	   	//echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['user'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['user'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_user&op=delete&id='.$row['user'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>

<!-- modal window -->
<section id="user_modal">
    <div id="details_user" hidden>
        <div id="details">
            <div id="container">
                User: <div id="user1"></div></br>
                Pass: <div id="pass"></div></br>
                Name: <div id="name"></div></br>
                Language: <div id="language"></div></br>
                Sexo: <div id="sex"></div></br>
                DNI: <div id="dni"></div></br>
                Birthdate: <div id="birthdate"></div></br>
                Country: <div id="country"></div></br>
                Hobby: <div id="hobby"></div></br>
            </div>
        </div>
    </div>
</section>
