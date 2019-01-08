<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_user&op=create">
        <h1>Usuario nuevo</h1>
        <table border='0'>
            <tr>
                <td>Usuario: </td>
                <td><input type="text" id="usuario" name="usuario" placeholder="usuario" value=""/></td>
                <td><font color="red">
                    <span id="error_usuario" class="error">
                        <?php
                            echo "$error_usuario";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Contraseña: </td>
                <td><input type="password" id="pass" name="pass" placeholder="contraseña" value=""/></td>
                <td><font color="red">
                    <span id="error_pass" class="error">
                        <?php
                            echo "$error_pass";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Nombre: </td>
                <td><input type="text" id="nombre" name="nombre" placeholder="nombre" value=""/></td>
                <td><font color="red">
                    <span id="error_nombre" class="error">
                        <?php
                            echo "$error_nombre";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>DNI: </td>
                <td><input type="text" id= "DNI" name="DNI" placeholder="DNI" value=""/></td>
                <td><font color="red">
                    <span id="error_DNI" class="error">
                        <?php
                            echo "$error_DNI";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Sexo: </td>
                <td><input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Hombre"/>Hombre
                    <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Mujer"/>Mujer</td>
                <td><font color="red">
                    <span id="error_sexo" class="error">
                        <?php
                            echo "$error_sexo";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Fecha de nacimiento: </td>
                <td><input id="fecha" type="text" name="fecha_nacimiento" placeholder="fecha de nacimiento" value=""/></td>
                <td><font color="red">
                    <span id="error_fecha_nacimiento" class="error">
                        <?php
                            echo "$error_fecha_nacimiento";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Edad: </td>
                <td><input type="text" id="edad" name="edad" placeholder="edad" value=""/></td>
                <td><font color="red">
                    <span id="error_edad" class="error">
                        <?php
                            echo "$error_edad";
                        ?>
                    </span>
                </font></font></td>
                
            </tr>
            
            <tr>
                <td>Pais: </td>
                <td><select id="pais" name="pais" placeholder="pais">
                    <option value="España">España</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Francia">Francia</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_pais" class="error">
                        <?php
                            echo "$error_pais";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Idioma: </td>
                <td><select multiple size="3" id="idioma[]" name="idioma[]" placeholder="idioma">
                    <option value="Español">Español</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Portugues">Portugues</option>
                    <option value="Frances">Frances</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_idioma" class="error">
                        <?php
                            echo "$error_idioma";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Observaciones: </td>
                <td><textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_observaciones" class="error">
                        <?php
                            echo "$error_observaciones";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Aficiones: </td>
                <td><input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "aficion" value="Informatica"/>informatica
                    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "aficion" value="Alimentacion"/>alimentacion
                    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "aficion" value="Automovil"/>automovil</td>
                <td><font color="red">
                    <span id="error_aficion" class="error">
                        <?php
                            echo "$error_aficion";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>