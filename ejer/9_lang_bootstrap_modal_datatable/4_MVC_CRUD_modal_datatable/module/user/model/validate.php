<?php
    function validate_usuario($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$teto);
    }
    
    function validate_password($texto){
        $reg = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
        return preg_match($reg,$teto);
    }
    
    function validate_nombre($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$teto);
    }
    
    function validate_DNI($dni){
        $reg="/^[0-9]{8}[A-Z]$/";
        return preg_match($reg,$dni);
    }
    
    function validate_sexo($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_fecha($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_edad($texto){
        $reg="/[0-9]{1,2}$/";
        return preg_match($reg,$texto);
    }
    
    function validate_pais($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_idioma($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_observaciones($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_aficion($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate(){
        $check=true;
        
        $v_usuario=$_POST['usuario'];
        $v_password=$_POST['pass'];
        $v_nombre=$_POST['nombre'];
        $v_DNI=$_POST['DNI'];
        $v_sexo=$_POST['sexo'];
        $v_fecha_nacimiento=$_POST['fecha'];
        $v_edad=$_POST['edad'];
        $v_idioma=$_POST['idioma[]'];
        $v_observaciones=$_POST['observaciones'];
        $v_aficion=$_POST['aficion[]'];
        
        $r_usuario=validate_usuario(v_usuario);
        $r_password=validate_password(v_password);
        $r_nombre=validate_nombre(v_nombre);
        $r_DNI=validate_DNI(v_DNI);
        $r_sexo=validate_sexo(v_sexo);
        $r_fecha_nacimiento=validate_fecha(v_fecha_nacimiento);
        $r_edad=validate_edad(v_edad);
        $r_idioma=validate_idioma(v_idioma);
        $r_observaciones=validate_observaciones(v_observaciones);
        $r_aficion=validate_aficion(v_aficion);
        
        if($r_usuario !== 1){
            $error_usuario = " * El usuario introducido no es valido";
            $check=false;
        }else{
            $error_usuario = "";
        }
        if($r_password !== 1){
            $error_pass = " * La contraseña introducida no es valida";
            $check=false;
        }else{
            $error_pass = "";
        }
        if($r_nombre !== 1){
            $error_nombre = " * El nombre introducido no es valido";
            $check=false;
        }else{
            $error_nombre = "";
        }
        if($r_DNI !== 1){
            $error_DNI = " * El DNI introducido no es valido";
            $check=false;
        }else{
            $error_DNI = "";
        }
        if(!$r_sexo){
            $error_sexo = " * No has seleccionado ningun genero";
            $check=false;
        }else{
            $error_sexo = "";
        }
        if(!$r_fecha_nacimiento){
            $error_fecha_nacimiento = " * No has introducido ninguna fecha";
            $check=false;
        }else{
            $error_fecha_nacimiento = "";
        }
        if($r_edad !== 1){
            $error_edad = " * La edad introducida no es valida";
            $check=false;
        }else{
            $error_edad = "";
        }
        if(!$r_idioma){
            $error_idioma = " * No has seleccionado ningun idioma";
            $check=false;
        }else{
            $error_idioma = "";
        }
        if(!$r_observaciones){
            $error_observaciones = " * El texto introducido no es valido";
            $check=false;
        }else{
            $error_observaciones = "";
        }
        if(!$r_aficion){
            $error_aficion = " * No has seleccionado ninguna aficion";
            $check=false;
        }else{
            $error_aficion = "";
        }
        return check;
    }