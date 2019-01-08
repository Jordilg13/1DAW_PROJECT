<div id="contenido">
    <h1>Informacion del Usuario</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Usuario: </td>
            <td>
                <?php
                    echo $user[user];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Contraseña: </td>
            <td>
                <?php
                    echo $user['pass'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Nombre: </td>
            <td>
                <?php
                    echo $user['name'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>DNI: </td>
            <td>
                <?php
                    echo $user['dni'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Sexo: </td>
            <td>
                <?php
                    echo $user['sex'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de nacimiento: </td>
            <td>
                <?php
                    echo $user['birthdate'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Edad: </td>
            <td>
                <?php
                    echo $user['age'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Pais: </td>
            <td>
                <?php
                    echo $user['country'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Idioma: </td>
            <td>
                <?php
                    echo $user['language'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Observaciones: </td>
            <td>
                <?php
                    echo $user['comment'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Aficiones: </td>
            <td>
                <?php
                    echo $user['hobby'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>